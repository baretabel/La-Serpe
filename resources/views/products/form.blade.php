@extends('layout/layout')
@section('content')

@include('nav/nav')
<br><br><br>
<form action="/insert" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom du produit">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Prix</label>
          <input type="number" class="form-control" name="prix" id="exampleInputPassword1" placeholder="Prix du produit">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Catégorie</label>
                <input type="text" class="form-control"name="cat" id="exampleInputPassword1" placeholder="Famille de produit">
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
@endsection