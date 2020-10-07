<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = [
        'name','description','category_image',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
