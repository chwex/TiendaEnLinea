@extends('layouts.admindash')

@section('encabezadocontenido')
	<h3> Producto: </h3>
@stop

@section('contenido')
<style type="text/css">
	.btn-product{
	width: 100%;
}
</style>
<div class="container">
	<div class="row">
    	<div class="col-md-12">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					@foreach ($productos as $p)
						<h4 class="text-center"><span class="label label-info">{{$p->nombreproducto}}</span></h4>
						<img src="http://placehold.it/650x450&text=Galaxy S5" class="img-responsive">	
							<div class="caption">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<h3>{{$p->nombreproducto}}</h3>
									</div>
									<div class="col-md-6 col-xs-6 price">
										<h3><label>${{$p->precio}}</label></h3>
									</div>
								</div>
									<p>             {{$p->descripcion}}</p>
										<div class="row">
											<div class="col-md-6">
												<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
											</div>
											<div class="col-md-6">
												<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a>
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
