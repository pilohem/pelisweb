@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Tus Comentarios</h3>
                    {{-- @foreach ($comentarios as $comentario)
                      {{print_r($comentario)}}
                    @endforeach --}}
                    @if(count($comentarios))
                      <table class="table table-striped">
                        <tr>
                          <th>Comentario</th>
                          <th></th>
                          <th></th>
                        </tr>
                        @foreach($comentarios as $comentario)
                          <tr>
                            {{-- <td><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->titulo}}</a></td>
                            <td><a href="{{ route('peliculas.edit', $pelicula->id) }}" class="pull-right btn btn-default">Editar</a></td> --}}
                            <td>{{$comentario->body}}</td>
                            <td><a href="/peliculas/{{$comentario->pelicula_id}}" class="pull-right btn btn-default">Ver</a></td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
