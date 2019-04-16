<?php

namespace App\Model;

use App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function prouct(){
        return $this->belongsTo(Product::class);
    }

}
