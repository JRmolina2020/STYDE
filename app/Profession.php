<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable=['name','is_active'];

    public function users(){
    return $this->hasMany('App\User');
    }
}

