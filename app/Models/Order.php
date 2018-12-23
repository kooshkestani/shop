<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'total','status'];

    protected $guarded = ['id'];
    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'order_product','order_id','product_id')->withPivot('total','quantity');
    }
}
