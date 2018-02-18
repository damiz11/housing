<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = ['type','description','price','location',
        'bathroom','toilet','kitchen','rooms','status',];

    protected $dates = ['created_at','updated_at'];

    public function images(){

        return $this->hasMany(Images::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
