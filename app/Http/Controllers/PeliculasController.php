<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Comentario;
use App\User;
class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelis = Pelicula::all();
        // ORDER MOVIES BY PREMIER DATE
        $peliculas = Pelicula::orderBy('estreno', 'DESC')->orderBy('titulo', 'DESC')->get();
        return view('pelis.index')->with('peliculas', $peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      //catch exception
      try {
        $user_id = auth()->user()->id;
      }
      catch(\Exception $e) {
      //echo 'Message: ' .$e->getMessage();
        return redirect('/login');
      }

      $user = auth()->user();
      if($user->type !== 'admin'){
        return redirect('/login');
      } else{
        // print_r($user->type);
        return view('pelis.crear');
      }
      // auth()->user()->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
      'Titulo' => 'required',
      'Sinopsis' => 'required',
      'Estreno' => 'required',
      'Reseña' => 'required',
      'poster_image' => 'required|image|max:1999'
    ]);
    //
    // Get filename with extension
    $filenameWithExt = $request->file('poster_image')->getClientOriginalName();

    // Get just the filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    // Get extension
    $extension = $request->file('poster_image')->getClientOriginalExtension();

    // Create new filename
    $filenameToStore = $filename.'_'.time().'.'.$extension;

    // Uplaod image
    $path= $request->file('poster_image')->storeAs('public/poster_covers', $filenameToStore);
    //
    // Create Pelicula
    $pelicula = new Pelicula;

    // AGREGAR PELICULA

    // Get user id
    $user_id = auth()->user()->id;
    $pelicula->user_id = $user_id;
    $pelicula->titulo = $request->input('Titulo');
    $pelicula->sinopsis = $request->input('Sinopsis');
    $pelicula->resena = $request->input('Reseña');
    $pelicula->estreno = $request->input('Estreno');
    $pelicula->poster_image = $filenameToStore;

    $pelicula->save();

    return redirect('/peliculas')->with('success', 'Pelicula Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        // GET COMENTARIOS corresponding to the pelicula_id
        $comentarios = Comentario::where('pelicula_id', $id)->get();
        $user_names = array();
        foreach ($comentarios as $comentario) {
          $user_name = User::find($comentario->user_id)->name;
          $user_names[$comentario->id] = $user_name;
        }
        // GET user names

        // print_r($user_names);
        return view('pelis.show')->with(['pelicula' => $pelicula, 'comentarios' => $comentarios, 'user_names' => $user_names]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelis.edit')->with('pelicula', $pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
      'Titulo' => 'required',
      'Sinopsis' => 'required',
      'Estreno' => 'required',
      'Reseña' => 'required',
      'poster_image' => 'required|image|max:1999'
      ]);
      //
      // Get filename with extension
      $filenameWithExt = $request->file('poster_image')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('poster_image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path= $request->file('poster_image')->storeAs('public/poster_covers', $filenameToStore);
      //
      // Find Pelicula
      $pelicula = Pelicula::find($id);

      // AGREGAR PELICULA

      // Get user id
      $user_id = auth()->user()->id;
      $pelicula->user_id = $user_id;
      $pelicula->titulo = $request->input('Titulo');
      $pelicula->sinopsis = $request->input('Sinopsis');
      $pelicula->resena = $request->input('Reseña');
      $pelicula->estreno = $request->input('Estreno');
      $pelicula->poster_image = $filenameToStore;

      $pelicula->save();
      return redirect('/peliculas')->with('success', 'Pelicula Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
