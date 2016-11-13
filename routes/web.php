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

//Route::get('/home', 'HomeController@index');
Route::get('/guardarCategoria', '/categoriasController@guardar');   #}agregar categoria nueva
Route::get('/guardarProducto', '/productosController@guardar');    #agregar producto
Route::get('/home', 'HomeController@index');

<<<<<<< HEAD
Route::get('admin', function () { return view('admin_template'); });
Route::get('micarrito','VistasController@carrito');
Route::get('metodoe','VistasController@envio');
=======
Route::get('/registroUsuario','usuarioController@registroUsuario');



Route::get('/', 'inicioController@inicio');


//grupo de rutas las cuales solo podran ser accedidas por administradores
Route::group(['middleware' => ['admin']], function(){

    //aqui pondran las rutas que se usaran por los administradores ya sea el agregar categoria, agregar producto

    //esta ruta manda a llamar directamente la vista admin inicio, esta vista la pueden usar como ejemplo 
    //para el uso del dashboard
    Route::get('admin',function(){
        return view('admininicio');
    });
});
>>>>>>> 1e07b54210f79ed24c5ed7a3d229f823918a5b3c
