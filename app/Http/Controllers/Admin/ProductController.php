<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Http\Resources\Product\ProductCollection;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortByDesc("created_at");
        return view('Admin.Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'detail' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
            'product_image' => 'image|nullable|max:1999',

        ]);
        // dd($request);

        if($request->hasFile('product_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('product_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        
        
        $product = new Product;
        
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->product_image = $fileNameToStore;
        // $product->user_id = auth()->user()->id;

        $product->save();
        
        return redirect('/products-all')->with('success','Your Product is succesfully added in the product list');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.Products.edit-product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'detail' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
            'product_image' => 'image|nullable|max:1999',

        ]);

        if($request->hasFile('product_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('product_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->product_image = $fileNameToStore;

        $product->update();
        

        return redirect('/products-all')->with('success','Your Data is Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products-all')->with('danger','Your Data is Deleted Succesfully');
    }
}
