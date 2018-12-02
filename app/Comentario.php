<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    // protected $fillable = ['comment','votes','spam','reply_id','page_id','users_id'];
    //
    // protected $dates = ['created_at', 'updated_at'];

    public function pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
