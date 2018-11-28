<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ResetPriceFormat()
    {
    //return money_format('$%i',$this->price/100);
    }
}
