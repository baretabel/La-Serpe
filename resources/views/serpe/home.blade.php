@extends('layout.layout')

@section('content')

@foreach ($especes as $espece)

    
            
         <article class="cadre"><div class="center"><a href="/espece/{{ $espece->id }}" style="font-size: 1.5em">{{ $espece->nom }}</a>
        <img style="max-width: 100px" src="http://www.mi-aime-a-ou.com/photos_ile_reunion/img/faune_flore/bois_de_fer_02.JPG" alt="Image {{ $espece->nom }}"></div></article>

@endforeach

@endsection

