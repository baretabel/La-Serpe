@extends('layout.layout')

@section('content')
<div style="padding: 10px">
<h1>{{ $espece->nom }}</h1>
<br><br>
<p>{{ $espece->description }}</p><br>
</div>


<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a onclick="inv()" style="margin-left:5px" class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Caractéristique</a>
      <a onclick="vis()" style="margin-left:5px" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Commentaire</a>
      <a onclick="inv()" style="margin-left:5px" class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Articles</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade active " id="nav-home" style="margin: 10px" role="tabpanel" aria-labelledby="nav-home-tab">
        
        <h3>Caractéristique</h3><br>
<p>{{ $espece->latin }}</p>
<p>{{ $espece->creole }}</p>
<p>{{ $espece->famille }}</p>
<p>{{ $espece->type }}</p>
    </div>
    <div class="tab-pane fade " style="display: inline" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
     <div style="display: inline">   <div style="float: left; margin: 10px " > <h3>Commentaire</h3><br>

<form action="/com" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input  name="id" type="hidden" value="{{ $espece->id }}">
    <input  name="idu" type="hidden" value="{{ Auth::user()->id }}">
        <textarea id="commentaire" name="commentaire" rows="5" cols="33">Ajouter un commentaire public...</textarea>
        <br><button class="btn btn-primary" style="background-color: #167549; margin-top:10px " type="submit" >Envoie</button>
    </form>  
</div>
<div id="invisible" style="display: none; left: 300px; position: absolute; padding-top:10; height:300px; overflow-x:scroll" class="p-3" >
    @foreach ($commentaires as $commentaire)
    @if($commentaire->etat==1)
    <div>
        <h5 style="color: #167549">{{ $commentaire->user->pseudo }}</h5>
        <p>{{ $commentaire->post }}<p>
        <p style="color: #167549; font-size: 0.7em">{{$commentaire->created_at}}</p>
    </div>

    @endif
    @endforeach
    </div>
</div>
</div>
    <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <h3>Articles</h3><br>
<ul>
    @foreach ($articles as $article)
    @if($article->etat==1)
        
                <li><a href="/article/{{ $article->id }}" >{{ $article->titre }}</a></li>
                       
            
    
     @endif
    @endforeach
</ul>
<a href="/new/{{ $espece->id }}" class="btn btn-primary" style="background-color: #167549; margin-top:10px ">Soumettre un article</a>
    </div>
  </div>
@endsection

<script>
    function vis(){
            
            document.getElementById('invisible').style.display = 'block';
          
            
            
    }
    function inv(){
            
            
          
            document.getElementById('invisible').style.display = 'none';
            
    }
    </script>