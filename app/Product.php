<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function famille(){
        return $this->belongsTo('App\Famille');
    }
}
