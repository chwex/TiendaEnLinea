@extends('layouts.inicio')


@section('contenido')
<div class="container-fluid">
	<div class="row">
  		<div class="col-md-12">
       		<h3>Detallado de Producto</h3>
    	</div>
    	<div class="col-md-8 col-xs-10">
    		<div class="panel panel-default">
     			@foreach($productos as $p)
            	<div class="panel-body">
			  		<div class="row">
			  			<div class="col-xs-12 col-sm-4 text-center">
							<img src="{{ asset("/Imagenes/Productos/$p->imagen")}}" alt="" class="center-block img-circle img-responsive">
						</div>
						<div class="col-xs-12 col-sm-8">
							<h2>{{$p -> nombreproducto}}</h2>
							
							<p><strong>Categoria: </strong> {{$p -> nombrecategoria }} </p>
							<p><strong>Existencia: </strong> {{$p -> inventario}} </p>
							<p><strong>Calificacion: </strong>
								@for($i=0; $i<$p->promedio;$i++)
									<span class="glyphicon glyphicon-star"></span>
								@endfor
								@for($i=$p->promedio; $i<5;$i++)
									<span class="glyphicon glyphicon-star-empty"></span>
								@endfor
							</p>
						</div>        
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong>${{$p->precio}} </strong></h2>
					</div>
					<div class="panel-body">
        				<div class="col-xs-12">
        					<div>
								<h3>Comentarios del producto:</h3>
									@foreach($comentarios as $c)
										<label>{{$c->name}} comento:</label>
										<textarea>{{$c-> mensaje}}</textarea>
									@endforeach
							</div>
        				</div> 
        			</div>
				@endforeach     
				</div>
			</div>
		</div>
	</div>
</div>
@stop
