<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=[
        'id','name','image_url'
    ];
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
