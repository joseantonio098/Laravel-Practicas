<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController; //Llamar archivo de controladores

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

Route::get('/home', function () {
    return view('welcome');
    //return 'Bienvenidos a esta página';
});

//------------Agregando más rutas
Route::get('/contacto', function(){
    return "Esta página es de Contacto";
});

Route::get('/foro', function(){
    return 'Está página es un: <h2>foro</h2>';
});

//------------Pasando 1 parámetro a la url
Route::get('/articulo/{id}', function($id){
    return 'Este es el artículo Nro: ' . $id;
});

//------------Pasando 2 o más parámetros a la url
Route::get('/post/{id}/{nombre}', function($id,$nombre){
    return 'Este es el post Nro ' . $id . ' Escrito por ' . $nombre;
});

//------------Expresiones regulares en php
Route::get('/seccion/{id}/{nombre}', function($id,$nombre){
    return 'Este es la sección Nro ' . $id . ' Escrito por ' . $nombre;

})-> where('nombre','[a-z]+'); //--->Regex

//------------Agregando ruta desde un controlador (Clase)
Route::get('/inicio/{usuario}', [EjemploController::class, 'inicio']);
