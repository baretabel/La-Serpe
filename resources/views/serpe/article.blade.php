@extends('layout.layout')

@section('content')
<div style="margin:10px">
<h3>{{ $article->titre }}</h3>
<br><br>
<p>{{ $article->post }}</p><br>
<p style="font-size:0.7em"> crée par {{ $article->user->pseudo }} le {{$article->created_at}}</p>
<a href="/espece/{{ $article->espece_id }}">Retourner à {{ $article->espece->nom }}</a></div>
@endsection

