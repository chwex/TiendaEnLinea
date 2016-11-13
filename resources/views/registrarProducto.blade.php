@extends('layouts.admindash')

@section('encabezadocontenido')
	
	<h2>Crear Producto en Categoria: {{$categoria->nombre}}</h2>
		<small>Descripcion Opcional</small>

	</h1>
@stop

<!-- Seccion para registrar un producto en una Categoria X-->
@section('contenido')

	<form action="{{url('/guardarProducto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nomber" required>
		</div>	
		
<!--Parte incompleta para mostrar las categorias en combobox-->
		<div class="container">
			<div class="dropdown">
    			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Categorias
    			<span class="caret"></span></button>
    			 	@foreach($categorias as $c)
            			<li><a href="{{url('/listadoCategoria')}}/{{$c->id}}">{{$c->nombrecategoria}}</a></li>
            		@endforeach
			</div>
		</div>
	
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" required> 
		</div>
		<div class="form-group">
			<label for="Inventario">Inventario</label>
			<input type="text" class="form-control" name="inventario" required> 
		</div>
		<div class="form-group">
			<label for="precio">Precio</label>
			<input type="text" class="form-control" name="precio" required> 
		</div>
			<div class="form-group">
			<label for="imagen">Imagen</label>
			<input type="image" class="form-control" name="imagen" required> 
		</div>


		<input type="submit" class="btn btn-primary" value="Registrar">
		<a href="" class="btn btn-danger">Cancelar</a>
	</form>
@stop
