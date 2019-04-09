<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable=[
        'id','name',
    ];
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
