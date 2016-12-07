@extends('layouts.admindash')


@section('contenido')

<style type="text/css">
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}

}
</style>
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
							<p>
								@for($i=0; $i<$p->promedio;$i++)
									<span class="price-text-color fa fa-star"></span>
								@endfor
								@for($i=$p->promedio; $i<5;$i++)
									<span class="fa fa-star"></span>
								@endfor
							</p>
						</div>        
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong>${{$p->precio}} </strong></h2>
					</div>

					 <!-- Contact form -->
					<div class="panel-body">
        				<div class="col-xs-12">
                            <table class="table table-hover">
                                <thead>
                                   <tr>
                                        <th>Nombre</th>
                                        <th>Comentario</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach($comentarios as $c)
                                        <tr>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->mensaje}}</td>
                                            <td><a href="{{url('/eliminarComentario')}}/{{$c->idcomentario}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a></td>
                                        </tr>
                                    @endforeach                                
                                </tbody> 
                            </table>                
        			    </div> 
        			</div>
				@endforeach     
				</div>
			</div>
		</div>
	</div>
</div>
@stop


