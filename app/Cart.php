<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\User;

class Cart extends Model
{

    // protected $fillable = [
    //     'product_id',
    // ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    
}
