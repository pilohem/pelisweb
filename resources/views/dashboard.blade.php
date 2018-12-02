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

                    Welcome!
                    <h3>Tus Peliculas<a href="/peliculas/create" class="btn btn-success pull-right">Agregar Peliculas</a></h3>
                      @if(count($peliculas))
                        <table class="table table-striped">
                          <tr>
                            <th>Pelicula</th>
                            <th></th>
                            <th></th>
                          </tr>
                          @foreach($peliculas as $pelicula)
                            <tr>
                              <td><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->titulo}}</a></td>
                              <td><a href="{{ route('peliculas.edit', $pelicula->id) }}" class="pull-right btn btn-default">Editar</a></td>
                              <td></td>
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
