<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('Admin.User.index')->with('users',$users);
   }

    public function editUser(Request $request, $id){
        $users = User::findOrFail($id);
        return view('Admin.User.edit-user')->with('users',$users);
   }

    public function updateUser(Request $request, $id){
        $users = User::find($id);

        $users->name = $request->input('username');
        $users->email = $request->input('useremail');
        $users->usertype = $request->input('usertype');

        $users->update();

        return redirect('/users-all')->with('success','User Update Succesfully');
   }

    public function deleteUser(Request $request,$id){
       $users = User::findOrFail($id);

       $users->delete();
    
       return redirect('/users-all')->with('danger','User Delete Succesfully');

   }

}
