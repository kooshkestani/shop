<?php
/**
 * Created by PhpStorm.
 * User: MSK
 * Date: 07/12/2018
 * Time: 12:11 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = ['order_id', 'product_id', 'quantity'];
}