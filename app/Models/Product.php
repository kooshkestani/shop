<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\Money\Money;
use Gerardojbaez\Money\Currency;

class Product extends Model
{
    use Searchable;

    public function getPriceAttribute($value){
        return number_format($value / 10 , 0, "", ","); 
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
   
}
