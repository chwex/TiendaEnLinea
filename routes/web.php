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

//Route::get('/home', 'HomeController@index');
Route::get('/guardarCategoria', '/categoriasController@guardar');   #}agregar categoria nueva
Route::get('/guardarProducto', '/productosController@guardar');    #agregar producto
Route::get('/home', 'HomeController@index');

Route::get('/registroUsuario','usuarioController@registroUsuario');



Route::get('/', 'inicioController@inicio');


//grupo de rutas las cuales solo podran ser accedidas por administradores
Route::group(['middleware' => ['admin']], function(){
    Route::get('admin',function(){
        return view('admininicio');
    });
});
