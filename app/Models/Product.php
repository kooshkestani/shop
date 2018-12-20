<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\Money\Money;
use Gerardojbaez\Money\Currency;

class Product extends Model
{
    use Searchable;
    protected $guarded = ['id'];
    

    public function getPriceAttribute($value){
        return number_format($value / 10 , 0, "", ","); 
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
   public function comments()
   {
       return $this->hasMany('App\Models\Comment');
   }
   public function order(){
       return $this->belongsToMany('App\Models\Order','order_product', 'order_id' ,'product_id');
   }
}
