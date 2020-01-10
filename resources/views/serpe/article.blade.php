@extends('layout.layout')

@section('content')
<h3>{{ $article->titre }}</h3>
<br><br>
<p>{{ $article->post }}</p><br>
<p style="font-size:0.8em"> crée par {{ $article->user->pseudo }}</p><br>
<a href="/espece/{{ $article->espece_id }}">Retour à {{ $article->espece->nom }}</a>
@endsection

