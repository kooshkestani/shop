<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'addressline', 'city', 'state','zip','country','phone'    ];

    public function user()
    {
        return $this->blongsTo('App\User');

    }
}
