<!DOCTYPE html>
<html>
<head>
	<title>COMPROBANTE DE LA VENTA</title>
</head>
<body>

@foreach($prodventa as $pv)

<center>

<div class="row">
  <div class="col-md-4">
  
        <div class="thumbnail">



            <h2>CARACTERISTICAS DEL PRODUCTO</h2>
            <br>
            <h2>CLIENTE::: {{$pv->name}}</h2>
            </br>
            <h4>NOMBRE PRODUCTO:::   {{$pv->nombreproducto}}</h4>
            <h4>PRECIO PRODUCTO:::   {{$pv->precio}}</h4>
            <h4>CANTIDAD PRODUCTO::: {{$pv->cantidad}}</h4>
            <img src="{{ asset("/Imagenes/Productos/$pv->imagen")}}" class="img-responsive" alt="no encontrada">

            <div class="caption">
            <h2>INFORMACION DE LA VENTA</h2>
            <p>TOTAL VENTA::: {{$pv->total}}</p>
            <p>FOLIO::: {{$pv->folioventa}}</p>

                                <!--<p align="center">
                                    <a href="{{url('/pdfPokemon')}}/{{$p->id}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-file">PDF</span></a> 
                                    <a href="{{url('/darPoder')}}/{{$p->id}}" class="btn btn-danger" role="button">Poder <span class="badge">{{$p->caramelos}} 
                                    <img src="{{asset ("images/caramelo.png")}}" height="15"> </span> </a>
                                </p>-->
                                
                    </div>
        </div>
    </div>
</div>

</center>

@endforeach

</body>
</html>