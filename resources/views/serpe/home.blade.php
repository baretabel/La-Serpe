@extends('layout.layout')

@section('content')
<div clas="container row marge">
@foreach ($especes as $espece)

    <div class="col-sm-2">
            <article class="cadre" onclick="changerPage('/espece/{{ $espece->id }}')">
                
                 <img src="http://www.mi-aime-a-ou.com/photos_ile_reunion/img/faune_flore/bois_de_fer_02.JPG" alt=" Image {{ $espece->nom }}" style="max-width: 200px">
                 <br><br>
                 <a href="/espece/{{ $espece->id }}" >{{ $espece->nom }} | {{ $espece->latin }}</a>
            <p><svg id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <circle cx="16" cy="16" r="14" />
                <path d="M16 8 L16 16 20 20" />
            </svg> {{$espece->created_at}}</p>
            </article>
                   
   </div>
   <script>
   function changerPage(urlDestination){
    document.location.href= urlDestination ;
}</script>
@endforeach
 
  </div>  
@endsection

