<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Product;
use App\Cart;
use Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Category;
// use Illuminate\Http\Client\Request;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]);
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        // dd($categories);
        return view('Main.index', compact('products','categories'));
    }

    public function categories($id)
    {
        $category = Category::findOrFail($id);

        // dd($category);
        $category->load('products');
        // dd($category);
        // foreach($category->products as $product){
        //             echo $product->name;
        //         }
        return view('Main.categories',compact('category'));
    }

    public function contactUs()
    {
        return view('Main.contact');
    }

    public function vendor()
    {
        return view('Main.vendorSignup');
    }

    public function login()
    {
        return view('Main.login');
    }

    public function singleProduct(Request $request, $productId)
    {
        // $user = User::find(auth()->user()->id);
        // $userId = $user->id;
        $singleProduct = Product::where('id', $productId)->first();
        $categoryId = $singleProduct->category_id;
        // dd($categoryId);
        $singleProductCategory = Category::where('id',$categoryId)->first();
        // $categoreName = $singleProductCategory->name;
        // dd($categoreName);
        // $singleCartProduct = Cart::where('user_id',$userId)->where('product_id',$productId)->first();

        // dd($singleCartProduct->id);
        return view('Main.singleProduct', compact('singleProduct','singleProductCategory'));
    }

    // public function cart(Cart $cartProducts){
    //     // $cartProduct = Product::where('id',$id)->first();
    //     // return view('Main.cart',compact('cartProduct'));
    //     $cartProducts = Cart::all();
    //     //  dd($cartProducts);
    //     // $cartProducts->load('products');
    //     //  dd($cartProducts);
    //     return view('Main.cart',compact('cartProducts'));
    // }

    public function cart(){

        // dd($cart);
        $userCartItems = User::find(auth()->user()->id)->carts;
        // dd($userCartItems);
        $userCartItems->load('products');
        // dd($userCartItems);       
         return view('Main.cart',compact('userCartItems'));

        // foreach($userCartItems as $item){
        //     foreach($item->products as $product){
        //         echo $product->name;
        //     }
        // }

    }


    // public function cart()
    // {
               
    //     $user = User::findOrFail(auth()->user()->id);
    //     $userId = $user->id;
    //     // dd($userId);

    //     $items = Product::whereExists(function ($query) use ($userId) {
    //         $query->select(DB::raw(1))
    //             ->from('carts')
    //             ->whereRaw('carts.product_id = products.id');

    //             // $query->select(DB::raw(1))
    //             // ->from('carts')
    //             // ->whereRaw('carts.user_id', $userId);
            
    //         })->get();

    //         // print_r($items);

    //         dd($items);

    // //             ->whereExists(function ($query) {
    // //                 $query->select(DB::raw(1))
    // //                     ->from('users')
    // //                     ->whereRaw('users.id = products.user_id');
    // //             });

    //     // })
    //     //     ->get();

    //     // $userCartItems = User::find(auth()->user()->id)->carts;

    //     // // $item->products->where('id',)->get()

    //     // foreach($userCartItems as $item){
    //     //     echo 'hello\n';
    //     // }

        
        


    //     // return view('Main.cart', compact('items'));
    // }


        public function accountInfo(){
            return view('Main.accountInfo');
        }


        public static function cartCount(){
            if(Auth::check()){
                $userId = Auth::user()->id;
                $cartCount = DB::table('carts')->where('user_id',$userId)->sum('quantity');
                return $cartCount;
            }
            
            else{
                return view('Main.index');
            }
        }


}
