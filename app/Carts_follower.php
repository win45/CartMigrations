<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts_follower extends Model
{
    protected $fillable = [

    	'user_id', //temporary for dev only
    	'cart_following_id' 
    ];
}
