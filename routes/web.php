<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();


// aca afuera van las rutas que no requieren de un usuario tipo administrador
//por ejemplo las rutas de las vistas de los productos y del carrito.  

  
Route::get('/guardarProducto', 'productosController@guardar');
Route::get('/home', 'HomeController@index');

Route::get('admin', function () { return view('admin_template'); });
Route::get('/Micarrito','VistasController@carrito');
Route::get('/MetodoE','VistasController@envio');

Route::get('/registroUsuario','usuarioController@registroUsuario');
