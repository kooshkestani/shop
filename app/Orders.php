<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $total
 * @property boolean $delivered
 * @property string $created_at
 * @property string $updated_at
 */
class Orders extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'total', 'delivered', 'created_at', 'updated_at'];

}
