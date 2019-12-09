<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerpeControleur extends Controller
{
    public function index(){
        return view('serpe/formepcs');
    }

    public function create(Request $request){
  
   

        $especes = new Espece;
        $especes->nom = $request->nom;
        $especes->latin = $request->latin;
        $especes->creole = $request->creole;
        $especes->famille = $request->famille;
        $especes->type = $request->type;
        $especes->description = $request->description;
        $especes->save();
        return redirect()->action('SerpeControleur@index');
      }
}
