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

//Rutas Admin
Route::get('admin', function () { return view('admin_template'); });

Route::group(['middleware' => ['admin']], function(){
    Route::get('admin',function(){
        return view('admininicio');
    });

    #Rutas para ver, agregar y mostrar las categorias al administrador
    Route::get('/registrarCategoria', 'categoriasController@registrarCategoria');
    Route::get('/registrarProducto','productosController@registrarProducto');
	Route::post('/guardarCategoria', 'categoriasController@guardarCategoria');
    Route::get('/registrarProducto', 'productosController@registrarProducto');
    Route::post('/guardarProducto', 'productosController@guardarProducto');
    Route::get('image-upload','ImageController@imageUpload');
    Route::post('image-upload','ImageController@imageUploadPost');
    Route::get('/mostrarCategoria', 'categoriasController@mostrarCategoria');

    //Route::get('/');
    Route::post('/guardarVoto','comentariosController@guardar');
    //Rutas carrito
 
});

//Rutas registro
Route::get('/registroUsuario','usuarioController@registroUsuario');
//Rutas inicio
Route::get('/home', 'HomeController@index');
Route::get('/', 'productosController@inicio');

//Rutas ventas
Route::get('metodoe','VistasController@envio');
//Rutas categorias

//Rutas productos
Route::get('/guardarProducto', 'productosController@guardar');
Route::get('/productoIndividual', 'productosController@detallesProducto');
Route::get('/mostrarProducto','productosController@mostrarProducto');
Route::get('/mostrare/{id}', 'categoriasController@mostrarProdVis');
Route::get('/productoVisitante','productosController@productoVisitante');
Route::get('/productos/{id}','productosController@productos');
Route::post('/generarVenta', 'ventasController@generarVenta');
Route::post('/removerProductoCarrito', 'carritousuarioController@removerProducto');
Route::post('/guardarComentario','comentariosController@guardar');
Route::get('/micarrito','carritousuarioController@obtenerCarrito');
Route::get('/agregarCarrito/{idproducto}', 'carritousuarioController@agregarCarrito');
