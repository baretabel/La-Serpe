@extends('layout.layout')
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
          <input type="text" class="form-control" name="latin" id="nomLatin" placeholder="Nom Latin" required>
        </div>
        <div class="form-group">
                <label for="nomCreole">Nom Créole</label>
                <input type="text" class="form-control"name="creole" id="nomCreole" placeholder="Nom Créole" >
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
                
                <textarea id="description" name="description" rows="5" cols="33" required></textarea>
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
@endsection