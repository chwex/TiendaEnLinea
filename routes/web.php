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
Route::get('micarrito','VistasController@carrito');
Route::get('metodoe','VistasController@envio');

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
    #Rutas para ver, agregar y mostrar las categorias al administrador
    Route::get('/registrarCategoria', 'categoriasController@registrarCategoria');
    Route::get('/registrarProducto','productosController@registrarProducto');
	Route::post('/guardarCategoria', 'categoriasController@guardarCategoria');
	Route::get('/mostrarCategoria', 'categoriasController@mostrarCategoria');
    Route::get('/registrarProducto', 'productosController@registrarProducto');
    Route::post('/guardarProducto', 'productosController@guardarProducto');
    Route::get('image-upload','ImageController@imageUpload');
    Route::post('image-upload','ImageController@imageUploadPost');

	




});
