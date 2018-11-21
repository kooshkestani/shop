<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $addressline
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property string $country
 * @property string $phone
 * @property string $created_at
 * @property string $updated_at
 * @property int $user_id
 */
class Addresses extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['addressline', 'city', 'state', 'zip', 'country', 'phone', 'created_at', 'updated_at', 'user_id'];

}
