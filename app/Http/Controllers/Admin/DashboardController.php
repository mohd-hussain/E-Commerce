<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Product;
use App\Category;

class DashboardController extends Controller
{
   public function index(){
       $allProducts = Product::all();
       $allUsers = User::all();
       $allCategories = Category::all();
       
       return view('Admin.dashboard',compact('allProducts','allUsers','allCategories'));
   }
   

}
