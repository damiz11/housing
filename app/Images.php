<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['house_id', 'room_id','customer_id','image_url'];

    protected $dates= ['created_at','deleted_at','updated_at'];

    public function house(){
        return $this->belongsTo(House::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
