@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-md-2">
@include('nav/nav')
</div>
<div class="col-md-8">
  <h1>Articles validés</h1>
  <table class="table" >
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Especes</th>
        <th scope="col">Auteur</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($valides as $valide)
            
       
      <tr>
        <th scope="row">{{$valide->id}}</th>
        <td>{{$valide->titre}}</td>
        <td>{{$valide->espece->nom}}</td>
        <td>{{$valide->user->pseudo}}</td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$valide->id}}">Détails</button></td>
      </tr> 
      @endforeach
   
    </tbody>
     </table>
     <br><br>
<table class="table" >
  <h1>Articles en attentes de validation</h1>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Especes</th>
        <th scope="col">Auteur</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($attentes as $attente)
            
       
      <tr>
        <th scope="row">{{$attente->id}}</th>
        <td>{{$attente->titre}}</td>
        <td>{{$attente->espece->nom}}</td>
        <td>{{$attente->user->pseudo}}</td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$attente->id}}">Détails</button></td>
      </tr> 
      @endforeach
     
    </tbody>
     </table>
    

<!--Modal de details-->

             @foreach ($articles as $article)
             <div class="modal fade" id="{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">{{$article->titre}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {!!  nl2br(e( $article->post))  !!} <br>
                    par {{$article->user->pseudo}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/sup/{{$article->id}}" class="btn btn-success">Supprimer</a>
                    @if($article->etat==0)
                    <a href="/val/{{$article->id}}" class="btn btn-success">Valider</a>
                    @endif
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mod{{$article->id}}" data-dismiss="modal">Modifier</button>
                  </div>
                 </div>
               </div>
             </div>
             @endforeach

<!--Modal de modification-->

             @foreach ($articles as $article)
  <div class="modal fade" id="mod{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">{{$article->titre}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/modiff" method="POST">
           
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" name="titre" id="titre" aria-describedby="emailHelp" placeholder="Titre" value="{{$article->titre}}" required>
              </div>
              
            <input type="hidden" name="id" value="{{$article->id}}">
            
                  <div class="form-group">
                    <label for="article">Articles</label><br>
                    
                    <textarea id="article" class="form-control" name="article" rows="5" cols="33" required>{{$article->post}}</textarea>
                  </div>
            
          <button type="submit" class="btn btn-success">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
@endsection

