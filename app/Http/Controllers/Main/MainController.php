<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class MainController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('Main.index',compact('products'));
    }

    public function categories(){
        return view ('Main.categories');
    }

    public function contactUs(){
        return view ('Main.contact');
    }

    public function vendor(){
        return view ('Main.vendorSignup');
    }

    public function login(){
        return view ('Main.login');
    }

    public function singleProduct(Request $request, $productId){
        $singleProduct = Product::where('id',$productId)->first();
        // echo $singleProduct->name ;
        return view('Main.singleProduct',compact('singleProduct'));
    }

    public function cart($id){
        $cartProduct = Product::where('id',$id)->first();
        return view('Main.cart',compact('cartProduct'));
    }
}
