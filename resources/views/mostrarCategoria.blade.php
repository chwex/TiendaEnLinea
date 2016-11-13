@extends('layouts.admindash')

@section('encabezadocontenido')
	<h1> 
		Encabezado de la Pagina
		<small>Descripcion Opcional</small>
	</h1>
@stop

@section('contenido')
<div class="container">
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categorias as $c)
		<tr>
			<td>{{$c->idcategoria}}</td>
			<td>{{$c->nombrecategoria}}</td>
		</tr>
		@endforeach
	</tbody>	
</table>
</div>

@stop
