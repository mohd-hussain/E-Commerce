<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\User;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name','detail','price','stock','discount','product_image',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    public function reviews(){

        return $this->hasMany(Review::class);
    }

    // public function getTotalPriceAttribute()
    // {
    //     return round((1 - ($this->discount/100)) * $this->price,2);
    // }

    public function carts(){
        return $this->belongsTo(Cart::class);
        // $abc =  $this->belongsTo(Cart::class);
        // dd($abc);
    }

}
