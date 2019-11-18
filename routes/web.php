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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', 'UsuarioController');
Route::resource('colecciones', 'ColeccionesController');
Route::resource('sitio', 'AcercaDeController');
Route::resource('biblio/afiches', 'AfichesController');
Route::resource('biblio/artesanias', 'ArtesaniasController');
Route::resource('biblio/arte', 'ArtesController');
Route::resource('biblio/electronicos', 'ElectronicosController');
Route::resource('biblio/fotografias', 'FotografiasController');
Route::resource('biblio/impresos', 'ImpresosController');
Route::resource('biblio/Obmedicos', 'ObmedicosController');
Route::resource('biblio/revistas', 'RevistasController');
Route::resource('biblio/tesis', 'TesisController');