<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\Money\Money;
use Gerardojbaez\Money\Currency;

class Product extends Model
{

    public function getPriceAttribute($value){
        return number_format($value / 10 , 0, "", ","); 
    }
   
}
