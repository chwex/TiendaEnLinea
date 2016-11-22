@extends('layouts.inicio')


@section('contenido')

<!--h1> <center> Producto: </center></h1-->

  <!--Referente a ProductoIndividual-->
    <!--meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"-->

    <!--Aqui termina e.e-->

<div class="container-fluid">
  <div class="row">
  	<div class="col-md-12">
       <h3>Detallado de Producto</h3>
    </div>
  </div>
  <div class="row">
      <div class="col-md-8 col-xs-10">
      <div class="panel panel-default">
            <div class="panel-body">
			  <div class="row">
			  <div class="col-xs-12 col-sm-4 text-center">
					<img src="C:\xampp\htdocs\TiendaEnLinea\public\Imagenes\Productos\brotherh.jgp" alt="" class="center-block img-circle img-responsive">
					<ul class="list-inline ratings text-center" title="Ratings">
					  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
					  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
					  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
					  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
					  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
					</ul>
				</div><!--/col--> 
				<div class="col-xs-12 col-sm-8">
					<h2>Brotherh</h2>
					<p><strong>Categoria: </strong> Aventura  </p>
					<p><strong>Clasificacion: </strong> T </p>
					<p><strong>Calificacion: </strong>
						<span class="label label-info tags">html5</span> 
						<span class="label label-info tags">css3</span>
						<span class="label label-info tags">jquery</span>
						<span class="label label-info tags">bootstrap3</span>
					</p>
				</div><!--/col-->          
				<div class="clearfix"></div>
				<div class="col-xs-12 col-sm-4">
					<h2><strong>$506.74 </strong></h2>                    
					<p><small>Precio</small></p>
					<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Comprar </button>
				</div><!--/col-->
				<div class="col-xs-12 col-sm-4">
					<h2><strong>24</strong></h2>                    
					<p><small>Existencias</small></p>
					<button class="btn btn-info btn-block"><span class="fa fa-user"></span> Me gusta </button>
				</div><!--/col-->
				<div class="col-xs-12 col-sm-4">
					<h2><strong>430</strong></h2>                    
					<p><small>Visitas</small></p>
					<button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span>  </button>  
				</div><!--/col-->
			  </div>
              </div>
          </div>
    </div> 
  </div>
</div>
	
		<!--script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script-->
@stop