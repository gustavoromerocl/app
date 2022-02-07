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

Route::get('/', function () {
    $nombre = "Gustavo";
    return view('index', ['name' => $nombre]); //es posible usar la funcion compact('nombre') siempre y cuando variable y nombre de la variable sean iguales
})->name('home'); //Le asigna un nombre a la ruta

Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return 'hola ' . $nombre;
});

Route::get('nuevo', function(){
    return view('new');
});
