<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Model\Product;
use Illuminate\Support\Facades\Redirect;
use App\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cart = Cart::all();
        // dd($cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
   
        public function addToCart(Request $request){
            $product= Product::find(request('product_id'));
            $user= User::find(request('user_id'));
                $cart = new Cart();
                $cart->product_id = $product->id;
                $cart->user_id = $user->id;
                $cart->save();
                return redirect('/cart')->with('success','Added to Cart');
           }


        public function deleteFromCart(Request $request, $id){
            // $cartProduct = Cart::where('product_id',$id);
            // $user= User::find(request('user_id'));

            // if(auth()->user()->id !== $user->id){
            //     return redirect('/cart')->with('danger','Unauthorised Page');
            // }

            // $cartProduct->delete();
            // return redirect('/cart')->with('success','Remove From  Cart');
            $item = Cart::find($id);
            $user = User::find(auth()->user()->id);
            $user->carts()->delete($item);
            return redirect('/cart')->with('success','Remove From  Cart');
        }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
