@extends('layouts.admindash')

@section('encabezadocontenido')
<<<<<<< HEAD
		<h3>Crear Productos<h3>
=======
	
>>>>>>> a6b6c9ae1ad54fce5072c938a5208672d52d9a49
		<small>Descripcion Opcional</small>

	</h1>
@stop

<!-- Seccion para registrar un producto en una Categoria X-->
@section('contenido')
		<form action="{{url('/guardarProducto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
<<<<<<< HEAD
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nomber" required>
		</div>

<!--Parte incompleta para mostrar las categorias en combobox-->
		<div class="container">
			<div class="dropdown">
    			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Categorias
    			<span class="caret"></span></button>
    			 	@foreach($categorias as $c)
            			<li><a href="{{url('/listadoCategoria')}}/{{$c->categoriaid}}">{{$c->nombrecategoria}}</a></li>
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
=======
			<label for="nombre">Nombre del Producto</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		
		<div class="form-group">	
			<label for="categorias">Categorias</label>

			<select type="text" class="form-control" name="lstcategorias" required>
				@foreach ($categorias as $c)
				<option value="{{$c->categoriaid}}">{{$c->nombrecategoria}}</option> 
				@endforeach
			</select>
		</div>
			
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<input type="text" class="form-control" name="descripcion" required>
		</div>	
		<div class="form-group">
			<label for="inventario">Inventario</label>
			<input type="text" class="form-control" name="inventario" required>
		</div>	
		<div class="form-group">
			<label for="precio">Precio</label>
			<input type="text" class="form-control" name="precio" required>
		</div>	
		<input type="submit" class="btn btn-primary" value="Registrar">	
		<a href="{{url('/mostrarProducto')}}" class="btn btn-danger">Cancelar</a>
>>>>>>> a6b6c9ae1ad54fce5072c938a5208672d52d9a49
	</form>
@stop
