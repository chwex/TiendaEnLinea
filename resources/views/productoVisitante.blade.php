@extends('layouts.inicio')


@section('contenido')
  <div class="container-fluid">
    <div class="row">
@foreach ($productos as $p)
      <div class="col-md-6 col-xs-12">

        <div class="panel">
            <div class="panel-body">
            
                <div class="row">
                
                    <div class="col-sm-5">
                        <a href="{{url('/productos')}}/{{$p->idproducto}}" ><img src="{{ asset("/Imagenes/Productos/$p->imagen") }}" class="img-responsive" alt="..."></a>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="title-store">
                            <strong><a href="{{url('/productos')}}/{{$p->idproducto}}">{{$p->nombreproducto}}</a></strong>
                        </h4>
                        <hr>
                        <p>{{$p->descripcion}}</p>
                        <p>
                            <a href="#" class="btn btn-default" disabled="" data-original-title="" title="">${{$p->precio}}</a>
                        </p>
                    </div>
                  
                </div>
            
            </div>
        </div>
    </div>
        @endforeach
      
    </div> <!-- / .row -->
  </div>
@stop