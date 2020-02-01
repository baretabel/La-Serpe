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
        
        <th scope="col">Especes</th>
        <th scope="col">Auteur</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($attentes as $attente)
            
       
      <tr>
        <th scope="row">{{$attente->id}}</th>
        <td>{{$attente->espece->nom}}</td>
        <td>{{$attente->user->pseudo}}</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$attente->id}}">Détails</button></td>
      </tr> 
      @endforeach
     
    </tbody>
     </table>
     <table class="table" >
            <thead>
              <tr>
                <th scope="col">Id</th>
                
                <th scope="col">Especes</th>
                <th scope="col">Auteur</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($valides as $valide)
                    
               
              <tr>
                <th scope="row">{{$valide->id}}</th>
                <td>{{$valide->espece->nom}}</td>
                <td>{{$valide->user->pseudo}}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$valide->id}}">Détails</button></td>
              </tr> 
              @endforeach
             
            </tbody>
             </table>
             
             <!--Modal de details-->
             
                          @foreach ($commentaires as $commentaire)
                          <div class="modal fade" id="{{$commentaire->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h4 class="modal-title" id="exampleModalLabel">{{$commentaire->user->pseudo}}</h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 {{$commentaire->post}} 
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <a href="/supp/{{$commentaire->id}}" class="btn btn-primary">Supprimer</a>
                                 <a href="/valid/{{$commentaire->id}}" class="btn btn-primary">Valider</a>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod{{$commentaire->id}}" data-dismiss="modal">Modifier</button>
                               </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
<!--Modal de modification-->

@foreach ($commentaires as $commentaire)
<div class="modal fade" id="mod{{$commentaire->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">{{$commentaire->user->pseudo}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/up" method="POST">
         
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
            
          <input type="hidden" name="id" value="{{$commentaire->id}}">
          
                <div class="form-group">
                  
                  
                  <textarea id="commentaire" class="form-control" name="commentaire" rows="5" cols="33" required>{{$commentaire->post}}</textarea>
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
