@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Regresar</a>
  <hr>
  <div class="well">
    <h1>{{$pelicula->titulo}}</h1>
    <div class="container" id="poster">
      <img class="thumbnail" style="width: 200; height: 250px;" src="../storage/poster_covers/{{$pelicula->poster_image}}" alt="{{$pelicula->titulo}}">
    </div>
    <p>Estreno: {{$pelicula->estreno}}</p>
    <p><strong>Sinopsis:</strong> {{$pelicula->sinopsis}}</p>
    <p>{{$pelicula->resena}}</p>
  </div>

  <div class="well">
    <h3>Comentarios</h3>
    @if(count($comentarios))
      <table class="table table-striped">
        @foreach($comentarios as $comentario)
          <tr>
            <td>Usuario: <strong>{{$user_names[$comentario->id]}}</strong> comentó: {{$comentario->body}}</td>
          </tr>
        @endforeach
      </table>
    @endif
    {{-- {!!Form::open(['route' => 'comentario.store','method' => 'POST', 'files' => true])!!} --}}
    {!!Form::open(['action' => ['ComentariosController@store'],'method' => 'POST', 'files' => true])!!}
      {{Form::bsTextArea('Comentario','',['placeholder' => 'Escribe un comentario...'])}}
      {{Form::hidden('pelicula_id', $pelicula->id)}}
      {{Form::bsSubmit('Coment')}}
    {!! Form::close() !!}
  </div>
@endsection
