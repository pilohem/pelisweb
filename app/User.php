<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    // revisar si un usuario es un administrador
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    //
    // public function isAdmin(){
    //   if($this->type === self::ADMIN_TYPE){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Add one to many relationship
    // Un usuario (admin) puede tener varias Peliculas
    public function peliculas(){
      return $this->hasMany('App\Pelicula');
    }
    public function comentarios(){
      return $this->hasMany('App\Comentario');
    }
}
