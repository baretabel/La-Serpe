@extends('layout.layout')

@section('content')
<script>
    $(document).ready(function(){     
    
    $("#ong-carac").click(function(){
        $("#carac").addClass("vis");
        $("#com").addClass("inv");
        $("#article").addClass("inv");
        $("#carac").removeClass("inv");
        $("#com").removeClass("vis-com");
        $("#article").removeClass("vis");
        $("#ong-carac").addClass("activer")
        $("#ong-com").removeClass("activer")
        $("#ong-art").removeClass("activer")
    });
    
    $("#ong-com").click(function(){
        $("#com").addClass("vis-com");
        $("#carac").addClass("inv");
        $("#article").addClass("inv");
        $("#com").removeClass("inv");
        $("#carac").removeClass("vis");
        $("#article").removeClass("vis");
        $("#ong-com").addClass("activer")
        $("#ong-carac").removeClass("activer")
        $("#ong-art").removeClass("activer")
    });

    $("#ong-art").click(function(){
        $("#article").addClass("vis");
        $("#carac").addClass("inv");
        $("#com").addClass("inv");
        $("#article").removeClass("inv");
        $("#carac").removeClass("vis");
        $("#com").removeClass("vis-com");
        $("#ong-art").addClass("activer")
        $("#ong-carac").removeClass("activer")
        $("#ong-com").removeClass("activer")
    });
});
</script>
<div class="desc">
    <h1>{{ $espece->nom }}</h1>
    <br>
    <img id="image-es"src="{{ $espece->image }}" alt="Image de {{ $espece->nom }}" srcset="">
    <br><br>

    <p>{{ $espece->description }}</p><br>
</div>
<div id="menu">
    <ul id="onglets">
      <li id="ong-carac"class="activer"> <p>Caractéristique</p> </li>
      <li id="ong-com"> <p> Commentaires</p> </li>
      <li id="ong-art"> <p>Articles <p> </li>
    </ul>
</div>


<div id="carac" class="vis">
    <h3>Caractéristique</h3><br>
    <div class="détails">
        <p>Autre nom: {{ $espece->creole }}</p>
    <p>Latin: {{ $espece->latin }}</p>
    <p>Famille: {{ $espece->famille }}</p>
    <p>Type: {{ $espece->type }}</p>
    </div>
</div>
<div id="com" class="inv">
    <div id="com1" >
        <h3>Commentaire</h3><br>
        <form action="/com" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input  name="id" type="hidden" value="{{ $espece->id }}">
            @isset(Auth::user()->id)
                <input  name="idu" type="hidden" value="{{ Auth::user()->id }}">
                <textarea class="form-control" id="commentaire" name="commentaire" rows="5" cols="33">Ajouter un commentaire public...</textarea>
                <br><button class="btn btn-success form-control" type="submit" style="color: #167549!important;" >Envoie</button>
            @endisset
            @empty(Auth::user()->id)
                <textarea class="form-control" id="commentaire" name="commentaire" rows="5" cols="33">Veuillez vous connecter pour ajouter un commentaire public...</textarea>
                <br><button class="btn btn-success form-control " type="submit" style="color: #167549!important;" disabled>Envoie</button>
            @endempty
        </form>  
    </div>
    <div id="com2">
        @foreach ($commentaires as $commentaire)
            @if($commentaire->etat==1)
                <div class="com">
                    <h5>{{ $commentaire->user->pseudo }}</h5>
                    <p>{{ $commentaire->post }}<p>
                    <p class="date-com"><svg id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <circle cx="16" cy="16" r="14" />
                        <path d="M16 8 L16 16 20 20" />
                        </svg> {{$commentaire->created_at}}<p>
                </div>
            @endif
        @endforeach
    </div>
</div> 
<div id="article" class="inv">
    <h3>Articles</h3><br>
    <ul>
        @foreach ($articles as $article)
            @if($article->etat==1)    
                        <li><a href="/article/{{ $article->id }}" >{{ $article->titre }}</a></li>     
            @endif
        @endforeach
    </ul>
    @isset(Auth::user()->id)
        <a href="/new/{{ $espece->id }}" class="btn btn-success">Soumettre un article</a>
    @endisset
    @empty(Auth::user()->id)
        <a href="" class="btn btn-success" disabled>Soumettre un article</a>
    @endempty
</div>

@endsection

