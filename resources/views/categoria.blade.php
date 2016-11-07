@extends('inicio')

@section('encabezado')
	<h2>Registrar  Categoria</h2>
@stop

<!-- Seccion para registrar una categoria nueva-->
@section('contenido')
	<form action="{{url('/guardarCategoria')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>	
			<div class="form-group">
			<label for="cantidad">Cantidad de Articulos Existentes</label>
			<input type="text" class="form-control" name="cantidad" required>
		</div>
		<input type="submit" class="btn btn-primary" value="Registrar">
		<a href="" class="btn btn-danger">Cancelar</a>
	</form>
@stop

