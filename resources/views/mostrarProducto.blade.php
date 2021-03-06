@extends('layouts.admindash')

@section('encabezadocontenido')
    <a href="{{url('/registrarProducto')}}"> <input  value="Registrar el producto" class="btn btn-primary" name="registrar"></a>

@stop

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
<div class="container">
    <div class="row">
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                    @foreach ($productos as $p)
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img style="width: 100px; height: 100px;" src="{{ asset("/Imagenes/Productos/$p->imagen")}}" alt="" class="center-block img-circle img-responsive" >
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>{{$p->nombreproducto}}</h5>
                                            <h5 class="price-text-color">${{$p->precio}}</h5>
                                        </div>       
                                    </div>
                                    <div class="separator clear-left">
                                        
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="{{url('/mostrarDetalle')}}/{{$p->idproducto}}" class="hidden-sm">Más Detalles</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                  
                            </div>
                        </div>
                        @endforeach   
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>

@stop
