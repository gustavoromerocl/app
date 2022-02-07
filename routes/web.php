<?php

use Illuminate\Support\Facades\Route;

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

//Route::view('/', 'index', ['name' => $nombre])->name('home'); //Se puede usar para paginas que no requieran programar una lógica compleja como el home o politicas de privacidad
Route::get('/', 'App\Http\Controllers\VotesController@index');
//Se debe especificar la ruta completa del controlador
Route::resource('voters', 'App\Http\Controllers\VotesController');
