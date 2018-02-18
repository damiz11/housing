<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['house_id','type','bathroom','kitchen','toilet','description','status'];

    protected $dates= ['created_at','deleted_at','updated_at'];
}
