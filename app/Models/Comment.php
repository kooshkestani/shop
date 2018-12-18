<?php
/**
 * Created by PhpStorm.
 * User: MSK
 * Date: 17/12/2018
 * Time: 11:46 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [ 'created_at' , 'updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
//    public function products()
//    {
//        return $this->belongsTo('App\Models\Product');
//    }
}