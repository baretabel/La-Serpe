<?php

namespace App\Http\Controllers;
use App\Espece;
use App\Commentaire;
use App\Article;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/admin');
    }
    public function especes(){
        $especes = Espece::all();
        return view('admin/espece',['especes'=> $especes]);
    }
    public function articles(){
        $articles = Article::all();
        $valides = Article::where('etat', 1)->get();
        $attentes = Article::where('etat', 0)->get();
        return view('admin/articles',['valides'=> $valides,'attentes'=> $attentes,'articles'=> $articles]);
    }
    public function com(){
        $commentaires = Commentaire::all();
        $valides = Commentaire::where('etat', 1)->get();
        $attentes = Commentaire::where('etat', 0)->get();
        return view('admin/commentaire',['valides'=> $valides,'attentes'=> $attentes,'commentaires'=> $commentaires]);
    }
    public function user(){
        $users = User::all();
        return view('admin/user',['users'=> $users]);
    }
    public function destroy($id){
        $espece = Espece::where('id', $id)->first();
        $commentaires= Commentaire::where('espece_id', $id)->delete();
        $espece->delete();
        
        return redirect()->action('AdminController@especes');
        
  
      }
      public function sup($id){
        $article = Article::where('id', $id)->first();
        $article->delete();
        return redirect()->action('AdminController@articles');
        
  
      }
      public function val($id){
        $articles = Article::find($id);
        $articles->etat = 1;
        $articles->save();
        return redirect()->action('AdminController@articles');
        
  
      }
      public function modif(Request $request){

        $this->validate($request,[
          'nom'=>'required|max:255',
          'latin'=>'required|max:255',
          'creole'=>'max:255',
          'famille'=>'required|max:255',
          'type'=>'required|max:255',
          'description'=>'required',
        ]);
      
        $espece = Espece::find($request->id);
      
        $espece->nom = $request->nom;
        $espece->latin = $request->latin;
        $espece->creole = $request->creole;
        $espece->famille = $request->famille;
        $espece->type = $request->type;
        $espece->description = $request->description;
      
      $espece->save();
      
      return redirect()->action('AdminController@especes');
      }
      public function modiff(Request $request){

        $this->validate($request,[
          'titre'=>'required|max:255',
          'article'=>'required',
          
        ]);
      
        $articles = Article::find($request->id);
        
        $articles->titre = $request->titre;
        $articles->post = $request->article;
      
        $articles->save();
      
     
      
        return redirect()->action('AdminController@articles');
      }
      public function supp($id){
        $commentaire = Commentaire::where('id', $id)->first();
        $commentaire->delete();
        return redirect()->action('AdminController@com');
        
  
      }
      public function valid($id){
        $commentaire = Commentaire::find($id);
        $commentaire->etat = 1;
        $commentaire->save();
        return redirect()->action('AdminController@com');
        
  
      }
      public function up(Request $request){

        $this->validate($request,[
          
          'commentaire'=>'required',
          
        ]);
      
        $commentaire = commentaire::find($request->id);
        
       
        $commentaire->post = $request->commentaire;
        $commentaire->save();
        return redirect()->action('AdminController@com');
      }
      public function util($id){
        $user = User::find($id);
        $user->role_id = 1;
        $user->save();
        return redirect()->action('AdminController@user');
      }
      public function mod($id){
        $user = User::find($id);
        $user->role_id = 2;
        $user->save();
        return redirect()->action('AdminController@user');
      }
      public function admins($id){
        $user = User::find($id);
        $user->role_id = 3;
        $user->save();
        return redirect()->action('AdminController@user');
      }
}