@extends('layout/layout')
@section('content')

@include('nav/nav')
<br><br><br>
<form action="/update" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group ">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom du produit" value="{{ $product->nom }}">
          @if($errors->has('nom'))
          <span class="help-block">
          <strong class="text-danger">{{ $errors->first('nom') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Prix</label>
          <input type="number" class="form-control" name="prix" id="exampleInputPassword1" placeholder="Prix du produit" value="{{ $product->prix_ventre }}">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Catégorie</label>
                <input type="text" class="form-control"name="cat" id="exampleInputPassword1" placeholder="Famille de produit" value="{{ $product->kT }}">
              </div>
        <button type="submit" name="id" class="btn btn-primary" value="{{ $product->id }}">Modifier</button>
      </form>
      
@endsection