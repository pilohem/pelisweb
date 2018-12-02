<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//     // return 'hello';
// });

Route::get('/', 'PeliculasController@index');
Route::resource('peliculas', 'PeliculasController');

Route::post('/peliculas/store', 'PeliculasController@store')->name('peliculas.store');

Route::resource('api/items', 'ItemsController');

Auth::routes();

// Comentarios Routes
Route::resource('comentario', 'ComentariosController');
// Route::post('/comentario/{pelicula_id}', 'ComentariosController@store')->name('comentario.store');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Admin route
Route::resource('/admin', 'AdminsController');

// Route::get('/home', 'HomeController@index')
//     ->name('home');
//
// Route::get('/admin', 'AdminsController@admin')
//     ->middleware('is_admin')
//     ->name('admin');
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
