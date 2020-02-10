@extends('layout.layout')

@section('content')  
<div class="corps">
    <h2>Bienvenue sous la serre!</h2>
<div class="aligne-art">
@foreach ($especes as $espece)
<div class="art-cad">
    <article class="arti" onclick="changerPage('/espece/{{ $espece->id }}')">
        
         <img src="{{ $espece->image }}" alt=" Image {{ $espece->nom }}" >
         <br><br>
         <a href="/espece/{{ $espece->id }}" >{{ $espece->nom }} | {{ $espece->latin }}</a>
         <p><svg id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
         <circle cx="16" cy="16" r="14" />
         <path d="M16 8 L16 16 20 20" />
         </svg> {{$espece->created_at}}</p>
         <br>
    </article>
</div>           




@endforeach
</div>
</div>
<script>
function changerPage(urlDestination){
document.location.href= urlDestination ;
}</script>
@endsection

