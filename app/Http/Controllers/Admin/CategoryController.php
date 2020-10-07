<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('Admin.Category.index',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){

        // $this->validate($request,[
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        //     'category_image' => 'image|nullable|max:1999',
        // ]);

        // dd($request);

        if($request->hasFile('category_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('category_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('category_image')->storeAs('public/category_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        // dd($fileNameToStore);
        
        $category = new Category;
        $category->name = $request->categoryName;
        $category->description = $request->description;
        $category->category_image = $fileNameToStore;
        // $category->category_image = $request->category_image;
        $category->save();

        return redirect('/categories-all')->with('success','Category Add Succesfully');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('Admin.Category.edit-category',compact('category'));
    }

    public function update(Request $request, $id){

        // $this->validate($request,[
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        //     'category_image' => 'image|nullable|max:1999',

        // ]);

        if($request->hasFile('category_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('category_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('category_image')->storeAs('public/category_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $category = Category::findOrFail($id);
        $category->name = $request->categoryName;
        $category->description = $request->description;
        $category->category_image = $fileNameToStore;
        // $category->category_image = $request->category_image;
        
        $category->save();

        return redirect('/categories-all')->with('success','Category Update Succesfully');
    }

    public function deleteCategory($id){

        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/categories-all')->with('danger','Category Delete Succesfully');
    }
}
