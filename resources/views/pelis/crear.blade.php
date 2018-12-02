@extends('layouts.app')


@section('content')
  <h1>Agregando Peliculas</h1>
  {{-- {!!Form::open(['action' => 'PeliculasController@store','method' => 'POST', 'files' => true])!!} --}}
  {!!Form::open(['route' => 'peliculas.store','method' => 'POST', 'files' => true])!!}

    {{Form::bsText('Titulo','',['placeholder' => 'Nombre de Pelicula'])}}
    {{Form::bsText('Sinopsis','',['placeholder' => 'Sinopsis...'])}}
    {{Form::bsText('Estreno','',['placeholder' => 'aaaa-mm-dd'])}}
    {{Form::bsFile('Poster')}}
    {{Form::bsTextArea('Reseña','',['placeholder' => 'Tu reseña...'])}}
    {{Form::bsSubmit('Submit')}}
  {!! Form::close() !!}
@endsection
