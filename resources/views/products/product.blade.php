@extends('layout/layout')
@section('content')

@include('nav/nav')
<br><br>

<h1>{{ $product->nom }}</h1>
<br><br>
<p>{{ $product->prix_ventre }}</p>
<p>{{ $product->kT }}</p>

@endsection
