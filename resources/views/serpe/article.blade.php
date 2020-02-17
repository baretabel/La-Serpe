@extends('layout.layout')

@section('content')
<div class="form-cad" style="margin-top: 5%" >
<h3>{{ $article->titre }}</h3>
<br><br>
<p>{!!  nl2br(e( $article->post))  !!} </p><br>
<p style="font-size:0.7em"> crée le {{ $article->created_at }} par {{ $article->user->pseudo }}</p><br>
<a href="/espece/{{ $article->espece_id }}" class="btn btn-success form-control">Retour</a>
<div>
@endsection

