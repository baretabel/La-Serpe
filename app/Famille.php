<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    public function products(){
        return $this->hasMany('App\Product');
    }
}
