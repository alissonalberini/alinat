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
}
