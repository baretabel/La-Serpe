<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){
        return view('test',['nom'=>'Baki','age'=>58,'taille'=>'1m97']);
    }
    public function test2(){
        return view('test2');
    }
    
}
