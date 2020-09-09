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

    public function store(Request $request){
        $category = new Category;

        $category->name = $request->categoryName;

        $category->save();

        return redirect('/categories-all')->with('success','Category Add Succesfully');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('Admin.Category.edit-category',compact('category'));
    }

    public function update(Request $request, $id){

        $category = Category::findOrFail($id);

        $category->id = $request->categoryId;
        $category->name = $request->categoryName;

        $category->save();

        return redirect('/categories-all')->with('success','Category Update Succesfully');
    }

    public function deleteCategory($id){

        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/categories-all')->with('danger','Category Delete Succesfully');
    }
}
