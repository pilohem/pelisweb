<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pelicula;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get user id
        $user_id = auth()->user()->id;

        // Find user
        $user = User::find($user_id);

        if ($user->type == 'admin') {
          return view('dashboard')->with('peliculas', $user->peliculas);
        } else {
          // get all MOVIES
          $peliculas = Pelicula::all();
          
          return view('userdashboard')->with('comentarios', $user->comentarios);
        }
        // return view with peliculas para el usuario
    }
}
