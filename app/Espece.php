<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    public function article(){
        return $this->hasMany('App\Article');
    }
    public function commentaire(){
        return $this->hasMany('App\Commentaire');
    }
}
