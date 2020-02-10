@extends('layout.layout')
@section('content')


<br><br><br>
<div class="form-cad" >
  <h2>Nouvel Article</h2>
  <br>
<form action="/art" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" class="form-control" name="titre" id="titre" aria-describedby="emailHelp" placeholder="Titre" required>
          </div>
          <input  name="idu" type="hidden" value="{{ Auth::user()->id }}">
        <input type="hidden" name="id" value="{{$especes->id}}">
              <div class="form-group">
                <label for="article">Articles</label><br>
                
                <textarea id="article"  class="form-control"  name="article" rows="5" cols="33" required></textarea>
              </div>
        <button type="submit" class="btn btn-success form-control">Submit</button>
      </form>
</div>
@endsection