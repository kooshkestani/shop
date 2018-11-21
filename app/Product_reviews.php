<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $headline
 * @property string $description
 * @property string $rating
 * @property boolean $approved
 * @property string $created_at
 * @property string $updated_at
 * @property int $product_id
 */
class Product_reviews extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'headline', 'description', 'rating', 'approved', 'created_at', 'updated_at', 'product_id'];

}
