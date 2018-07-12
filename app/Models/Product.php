<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'name',
        'unity',
        'purchase_price',
        'sale_price',
        'stock',
        'stock_min',
        'input',
        'exit'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    
    public function categories(){
        //return $this->hasMany('App\Models\ProductCategory');
        return $this->belongsToMany('App\Models\Category','product_categories','product_id','category_id');
    }
    
    public function similars(){
        return $this->belongsToMany('App\Models\Product','product_similars','product_id','product_similar_id');
    }

}
