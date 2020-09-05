<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\User;
use Auth;
use DB;

class Cart extends Model
{

    protected $table = 'carts';

    // protected $fillable = [
    //     'product_id',
    // ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'id','product_id');
    }

    // public static function cartCount(){
    //     if(Auth::check()){
    //         $userId = Auth::user()->id;
    //         $cartCount = DB::table('carts')->where('user_id',$userId)->sum('quantity');
    //     }
    //     return $cartCount;
    // }

    
}
