@extends('layouts.app')


@section('content')
  <h1>Editando Pelicula: {{$pelicula->titulo}}</h1>
  {{-- {!!Form::open(['action' => 'PeliculasController@store','method' => 'POST', 'files' => true])!!} --}}
  {!!Form::open(['action' => ['PeliculasController@update', $pelicula->id],'method' => 'POST', 'files' => true])!!}

    {{Form::bsText('Titulo',$pelicula->titulo,['placeholder' => 'Nombre de Pelicula'])}}
    {{Form::bsText('Sinopsis',$pelicula->sinopsis,['placeholder' => 'Sinopsis...'])}}
    {{Form::bsText('Estreno',$pelicula->estreno,['placeholder' => 'aaaa-mm-dd'])}}
    {{Form::bsFile('Poster', $pelicula->poster_image)}}
    {{Form::bsTextArea('Reseña',$pelicula->resena,['placeholder' => 'Tu reseña...'])}}
    {{Form::bsSubmit('Submit')}}
    {{Form::hidden('_method', 'PUT')}}
  {!! Form::close() !!}
@endsection
