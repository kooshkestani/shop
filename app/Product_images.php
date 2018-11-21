<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $image_path
 * @property int $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product_images extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['image_path', 'product_id', 'created_at', 'updated_at'];

}
