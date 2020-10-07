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
// use Illuminate\Support\Facades\Session;
// use Illuminate\Http\Client\Request;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        // $products = session(['key' => $products]);
        // $products = session()->get('key');
        // dd($sessionProducts);
            // foreach($pdata as $product){
            //      print_r($product->name);
            //     //  var_dump($product);
            // }
                
            
        
        $categories = Category::all();
        // $categories = session(['cat' => $categories]);
        // $categories = session()->get('cat');
        // foreach($categories as $category){
        //     echo $category->name;
        // }
        // dd($categories);

        return view('Main.index',compact('products','categories'));
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
