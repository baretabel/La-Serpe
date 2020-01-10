@extends('layout.layout')

@section('content')
<h1>{{ $espece->nom }}</h1>
<br><br>
<p>{{ $espece->description }}</p><br>
<h3>Caractéristique</h3><br>
<p>{{ $espece->latin }}</p>
<p>{{ $espece->creole }}</p>
<p>{{ $espece->famille }}</p>
<p>{{ $espece->type }}</p>
<h3>Commentaire</h3><br>

<form action="/com" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input  name="id" type="hidden" value="{{ $espece->id }}">
    <input  name="idu" type="hidden" value="{{ Auth::user()->id }}">
        <textarea id="commentaire" name="commentaire" rows="5" cols="33">Ajouter un commentaire public...</textarea>
        <br><button class="btn btn-primary" type="submit" >Envoie</button>
    </form>  

    @foreach ($commentaires as $commentaire)
    @if($commentaire->etat==1)
    <div>
        <h5>{{ $commentaire->user->pseudo }}</h5>
        <p>{{ $commentaire->post }}<p>
        <a href="/sign">Signaler</a>
    </div>

    @endif
    @endforeach
<h3>Articles</h3><br>
<ul>
    @foreach ($articles as $article)
    @if($article->etat==1)
        
                <li><a href="/article/{{ $article->id }}" >{{ $article->titre }}</a></li>
                       
            
    
     @endif
    @endforeach
</ul>
<a href="/new/{{ $espece->id }}" class="btn btn-primary">Soumettre un article</a>
@endsection

