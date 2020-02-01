@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-md-2">
@include('nav/nav')
</div>
<div class="col-md-8">
<table class="table" >
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Nom Scientifique</th>
        <th scope="col">Famille botanique</th>
        <th scope="col">Type de Plante</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($especes as $espece)
            
       
      <tr>
        <th scope="row">{{$espece->id}}</th>
        <td>{{$espece->nom}}</td>
        <td>{{$espece->latin}}</td>
        <td>{{$espece->famille}}</td>
        <td>{{$espece->type}}</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$espece->id}}">Détails</button></td>
      </tr> 
      @endforeach
     
    </tbody>
  </table>
  <!--Modal de details-->
  @foreach ($especes as $espece)
  <div class="modal fade" id="{{$espece->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">{{$espece->nom}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{$espece->description}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="/destroy/{{$espece->id}}" class="btn btn-primary">Supprimer</a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod{{$espece->id}}" data-dismiss="modal">Modifier</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!--Modal de modification-->
  @foreach ($especes as $espece)
  <div class="modal fade" id="mod{{$espece->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">{{$espece->nom}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/modif" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <input type="hidden" name="id" value="{{$espece->id}}">
                  <label for="nomCommun">Nom Commun</label>
                  <input type="text" class="form-control" name="nom" id="nomCommun" aria-describedby="emailHelp" placeholder="Nom Commun" value="{{$espece->nom}}" required>
                  </div>
                <div class="form-group">
                  <label for="nomLatin">Nom Latin</label>
                  <input type="text" class="form-control" name="latin" id="nomLatin" placeholder="Nom Latin" value="{{$espece->latin}}" required>
                </div>
                <div class="form-group">
                        <label for="nomCreole">Nom Créole</label>
                        <input type="text" class="form-control"name="creole" id="nomCreole" value="{{$espece->creole}}" placeholder="Nom Créole" >
                      </div>
                      <div class="form-group">
                        <label for="famille">Famille Botanique </label>
                        <input type="text" class="form-control"name="famille" id="famille" placeholder="Famille Botanique" value="{{$espece->famille}}" required>
                      </div>
                      <div class="form-group">
                        <label for="type">Type de plante</label>
                        <input type="text" class="form-control"name="type" id="type" value="{{$espece->type}}" placeholder="Type de plante" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label><br>
                        
                        <textarea class="form-control" id="description" name="description" rows="5" cols="33" required>{{$espece->description}}</textarea>
                      </div>
               
        
          <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
@endsection

