@extends('layout/layout')
@section('content')


<br><br><br>
<form action="/insert" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="nomCommun">Nom Commun</label>
          <input type="text" class="form-control" name="nom" id="nomCommun" aria-describedby="emailHelp" placeholder="Nom Commun">
          </div>
        <div class="form-group">
          <label for="nomLatin">Nom Latin</label>
          <input type="text" class="form-control" name="latin" id="nomLatin" placeholder="Nom Latin">
        </div>
        <div class="form-group">
                <label for="nomCreole">Nom Créole</label>
                <input type="text" class="form-control"name="creole" id="nomCreole" placeholder="Famille de produit">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Famille Botanique </label>
                <input type="text" class="form-control"name="famille" id="exampleInputPassword1" placeholder="Famille de produit">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Type de plante</label>
                <input type="text" class="form-control"name="type" id="exampleInputPassword1" placeholder="Famille de produit">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label><br>
                <textarea  name="description" rows="5" cols="33"></textarea>
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
@endsection