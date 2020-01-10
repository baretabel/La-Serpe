<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    public function commentaire(){
        return $this->belongsTo('App\Commentaire');
    }
    public function article(){
        return $this->belongsTo('App\Article');
    }
}
