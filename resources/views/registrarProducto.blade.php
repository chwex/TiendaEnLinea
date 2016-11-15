@extends('layouts.admindash')

@section('encabezadocontenido')
	
		<small>Descripcion Opcional</small>

	</h1>
@stop

<!-- Seccion para registrar un producto en una Categoria X-->
@section('contenido')
		<form action="{{url('/guardarProducto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
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
	</form>
@stop
