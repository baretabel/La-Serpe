<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use DB;


class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
      

    return view('products/products',['products'=> $products]);

    }
    public function show($id){
      $product = Product::where('id', $id)->first();
     

    return view('products/product',['product'=> $product]);

    }
    public function destroy($id){
      $product = Product::where('id', $id)->first();
      $product->delete();
      return redirect()->action('ProductController@index');
      

    }
    public function form(){
      return view('products/form');
  }
  public function create(Request $request){
  
   

    $product = new Product;
    $product->nom = $request->nom;
    $product->prix_ventre = $request->prix;
    $product->kT = $request->cat;
    $product->save();
    return redirect()->action('ProductController@index');
  }

public function modif($id){
  $product = Product::where('id', $id)->first();
 

return view('products/form2',['product'=> $product]);

}
public function update(Request $request){

  $this->validate($request,[
    'nom'=>'required|max:255',
    'prix'=>'required|integer',
    'cat'=>'required',
  ]);

  $product = Product::find($request->id);

  $product->nom = $request->nom;
  $product->prix_ventre = $request->prix;
  $product->kT = $request->cat;

$product->save();

return redirect()->action('ProductController@index');
}
}
