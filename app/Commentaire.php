<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function espece(){
        return $this->belongsTo('App\Espece');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function signal(){
    return $this->hasMany('App\Signal');
}
}


