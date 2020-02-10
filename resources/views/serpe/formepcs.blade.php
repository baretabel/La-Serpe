@extends('layout.layout')
@section('content')


<br><br><br>
<div class="form-cad" >
  <h2>Nouvelle Espèce</h2>
  <br>
<form action="/insert" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="nomCommun">Nom Commun</label>
          <input type="text" class="form-control" name="nom" id="nomCommun" aria-describedby="emailHelp" placeholder="Nom Commun">
          </div>
        <div class="form-group">
          <label for="nomLatin">Nom Latin</label>
          <input type="text" class="form-control" name="latin" id="nomLatin" placeholder="Nom Latin" required>
        </div>
        <div class="form-group">
                <label for="nomCreole">Autre Nom</label>
                <input type="text" class="form-control"name="creole" id="nomCreole" placeholder="Autre Nom" >
              </div>
              <div class="form-group">
                <label for="famille">Famille Botanique </label>
                <input type="text" class="form-control"name="famille" id="famille" placeholder="Famille Botanique" required>
              </div>
              <div class="form-group">
                <label for="type">Type de plante</label>
                <input type="text" class="form-control"name="type" id="type" placeholder="Type de plante" required>
              </div>
              <div class="form-group">
                <label for="description">Description</label><br>
                
                <textarea id="description" class="form-control" name="description" rows="5" cols="33" required></textarea>
              </div>
              <div class="form-group">
                <label for="type">Lien d'image</label>
                <input type="text" class="form-control"name="img" id="img" placeholder="Lien d'image" required>
              </div>
        <button type="submit" class="btn btn-success form-control">Valider</button>
      </form>
 <div>     
@endsection