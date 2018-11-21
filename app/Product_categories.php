<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $parent_id
 * @property int $order
 * @property string $name
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 * @property ProductCategory $productCategory
 */
class Product_categories extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'order', 'name', 'slug', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'parent_id');
    }
}
