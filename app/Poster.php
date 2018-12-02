<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    public function pelicula(){
      return $this->belongsTo('App\Pelicula');
    }
}
