<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart');
    }
}
