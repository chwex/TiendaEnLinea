@extends('inicio')

@section('encabezado')
	<h2>Crear producto a Categoria: {{$categoria->nombre}}</h2>
@stop

<!-- Seccion para registrar un producto en una Categoria X-->
@section('contenido')
	<form action="{{url('/guardarProducto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="codigo">Codigo</label>
			<input type="text" class="form-control" name="codigo" required>
		</div>	
		<!--div class="form-group">						POSEE ID DE LA CATEGORIA QUE PERTENECE
			<label for="categoria">categoria</label>
			<input type="text" class="form-control" name="categoria" required>    
		</div-->
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" required> 
		</div>

		<input type="submit" class="btn btn-primary" value="Registrar">
		<a href="" class="btn btn-danger">Cancelar</a>
	</form>
@stop
