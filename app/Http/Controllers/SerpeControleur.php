<?php

namespace App\Http\Controllers;
use App\Espece;
use App\Commentaire;
use App\Article;

use Illuminate\Http\Request;

class SerpeControleur extends Controller
{
    public function form(){
        return view('serpe/formepcs');
    }
    public function nouv($id){
        $espece = Espece::where('id', $id)->first();
        return view('serpe/formart',['especes'=> $espece]);
    }
    public function article($id){
      $article = Article::where('id', $id)->first();
      return view('serpe/article',['article'=> $article]);
  }
    public function aff(){
        $especes = Espece::all();
        return view('serpe/home',['especes'=> $especes]);
    }
    public function show($id){
        $espece = Espece::where('id', $id)->first();
        $commentaires= Commentaire::where('espece_id', $id)->get();
        $articles= Article::where('espece_id', $id)->get();
       
  
      return view('serpe/espece',['espece'=> $espece,'commentaires'=> $commentaires,'articles'=> $articles]);
  
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
        return redirect()->action('SerpeControleur@aff');
      }
      public function com(Request $request){
  
   

        $commentaires = new Commentaire;
        $commentaires->espece_id = $request->id;
        $commentaires->user_id = $request->idu;
        $commentaires->post = $request->commentaire;
      
        $commentaires->save();
        return redirect()->action('SerpeControleur@show', array($request->id));
      }
      public function art(Request $request){
  
   

        $articles = new Article;
        $articles->espece_id = $request->id;
        $articles->user_id = $request->idu;
        $articles->titre = $request->titre;
        $articles->post = $request->article;
      
        $articles->save();
        return redirect()->action('SerpeControleur@show', array($request->id));
      }
}
