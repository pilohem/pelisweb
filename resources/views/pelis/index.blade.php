@extends('layouts.app')
@section('content')
<h1>Peliculas</h1>
@if(count($peliculas)>0)
  @foreach ($peliculas as $pelicula)
    {{-- <div class="container" style="padding-left:0px; padding-right: 0px;"> --}}
    <div class="well">
      <h3><a href="peliculas/{{$pelicula->id}}">{{$pelicula->titulo}}</a></h3>
      <div class="container" id="poster">
        <a href="peliculas/{{$pelicula->id}}">
        <img class="thumbnail" style="width: 200; height: 250px;" src="storage/poster_covers/{{$pelicula->poster_image}}" alt="{{$pelicula->titulo}}">
        </a>
      </div>
      <p>Estreno: {{$pelicula->estreno}}</p>
      <p><strong>Sinopsis:</strong> {{$pelicula->sinopsis}}</p>
    </div>

  @endforeach
@endif
@endsection
