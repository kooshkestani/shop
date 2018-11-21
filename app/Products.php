<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $size
 * @property string $price
 * @property string $image
 * @property int $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'size', 'price', 'image', 'category_id', 'created_at', 'updated_at'];

}
