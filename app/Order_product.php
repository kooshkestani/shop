<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_id
 * @property int $order_id
 * @property int $qty
 * @property float $total
 * @property string $created_at
 * @property string $updated_at
 */
class Order_product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'order_product';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'order_id', 'qty', 'total', 'created_at', 'updated_at'];

}
