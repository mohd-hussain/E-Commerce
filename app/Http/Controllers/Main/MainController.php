<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Product;
use App\Cart;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
        return view('Main.index', compact('products'));
    }

    public function categories()
    {
        return view('Main.categories');
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
        $singleProduct = Product::where('id', $productId)->first();
        // echo $singleProduct->name ;
        return view('Main.singleProduct', compact('singleProduct'));
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

    // public function cart(){

       

    //         //    $items = Cart::where('user_id', auth()->user()->id)
    //         //                 // ->where->('product_id',)
    //         //                 ->get();

    //         //                 $items->load('products');

            

                            

    //         //    dd($items);

                
        
    //             $user = User::findOrFail(auth()->user()->id);
                
        
    //             $id = $user->id;
    //             $items = Product::whereHas('User',function($query) use($id){
    //                 $query->where('user_id', $id);
    //             })->get();
    //             // $total_price = $items->sum('price');
    //             return view('Main.cart',compact('items'));
    // }

    public function cart()
    {
               
        $user = User::findOrFail(auth()->user()->id);
        $userId = $user->id;
        // dd($userId);

        $items = Product::whereExists(function ($query) use ($userId) {
            $query->select(DB::raw(1))
                ->from('carts')
                ->whereRaw('carts.product_id = products.id')
                ->whereRaw('carts.user_id', $userId);
            
            })->get();

            // print_r($items);

            // dd($items);

    //             ->whereExists(function ($query) {
    //                 $query->select(DB::raw(1))
    //                     ->from('users')
    //                     ->whereRaw('users.id = products.user_id');
    //             });

        // })
        //     ->get();


        return view('Main.cart', compact('items'));
    }



}
