@extends('layout.layout')

@section('content')
<div class="form-cad" style="margin-top: 5%" >
<h3>{{ $article->titre }}</h3>
<br><br>
<p>{{ $article->post }}</p><br>
<p style="font-size:0.7em"> crée le {{ $article->created_at }} par {{ $article->user->pseudo }}</p>
<div>
@endsection

