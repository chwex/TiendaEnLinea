@extends('layouts.inicio')


@section('contenido')
<div class="container-fluid">
	<div class="row">
  		<div class="col-md-12">
       		<h3>Detallado de Producto</h3>
    	</div>
  	</div>
  	<div class="row">
    	<div class="col-md-8 col-xs-10">
    		<div class="panel panel-default">
     			@foreach($productos as $p)
            	<div class="panel-body">
			  		<div class="row">
			  			<div class="col-xs-12 col-sm-4 text-center">
							<img src="{{ asset("/Imagenes/Productos/$p->imagen")}}" alt="" class="center-block img-circle img-responsive">
								<ul class="list-inline ratings text-center" title="Ratings">
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								</ul>
						</div>
						<div class="col-xs-12 col-sm-8">
							<h2>{{$p -> nombreproducto}}</h2>
								@foreach($categorias as $c)
								<p><strong>Categoria: </strong> {{$c -> nombrecategoria}} </p>
								@endforeach
								<p><strong>Calificacion: </strong>
									<span class="label label-info tags">Mala</span> 
									<span class="label label-info tags">Regular</span>
									<span class="label label-info tags">Buena</span>
									<span class="label label-info tags">Excelente</span>
								</p>
								<p><strong>Existencia: </strong> {{$p -> inventario}} </p>
						</div><!--/col-->          
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong>${{$p->precio}} </strong></h2>                    
						<form action="{{ url('/agregarCarrito') }}">
							<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Agregar a carrito </button>
						</form>
					</div>

					 <!-- Contact form -->
					<div class="panel-body">
        				<div class="col-xs-12">
          					<form role="form" name="ajax-form" id="ajax-form" action="https://formsubmit.io/send/coderthemes@gmail.com" method="post" class="form-main">
            					<div class="form-group">
            					</br><hr style="color: #0056b2;" /></br>
              						<label for="email2">Email</label>
              							<input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
              							<div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
            					</div> <!-- /Form-email -->

            					<div class="form-group">
              						<label for="message2">Comentarios:</label>
              						<textarea class="form-control" id="message2" name="message" rows="5" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Escribir comentario...</textarea>
									<div class="error" id="err-message" style="display: none;"></div>
            					</div> 
            					<div class="row">            
              						<div class="col-xs-12">
                						<button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Enviar</button>
              						</div> 
            					</div> <!-- /row -->


          					</form> <!-- /form -->
        				</div> <!-- end col -->
        			</div>
				@endforeach     
				</div>
			</div>
		</div>
    </div>
</div>
@stop
