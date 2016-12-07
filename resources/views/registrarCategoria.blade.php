@extends('layouts.admindash')

@section('encabezadocontenido')

@stop

@section('contenido')
	<form action="{{url('/guardarCategoria')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>	
		<input type="submit" class="btn btn-primary" value="Registrar">	
		<a href="{{url('/mostrarCategoria')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop

