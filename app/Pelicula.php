<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = array('titulo', 'sinopsis', 'resena', 'poster_image', 'estreno');

    public function poster(){
      return $this->hasOne('App\Poster');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function comentario(){
      // UNa pelicula tiene varios COmentarios
      return $this->hasMany('App\Comentario');
    }
}
