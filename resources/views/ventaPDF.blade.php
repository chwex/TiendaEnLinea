<!DOCTYPE html>
<html>
<head>
	<title>COMPROBANTE DE LA VENTA</title>
</head>
<body>
    
        <center>
            <h2>COMPROBANTE DE VENTA  CON   FOLIO: {{$venta[0]->folioventa}} </h2> 
            <h3>CLIENTE: {{$venta[0]->name}}</h3>
            <h3>__________________________________________________________________________________</h3>   
        </center>
        @foreach($prodventa as $pv)
                    <br>
                    <h3>CARACTERISTICAS DEL PRODUCTO</h3>
                    <p>NOMBRE PRODUCTO: {{$pv->nombreproducto}}</p>
                    <p>PRECIO PRODUCTO: {{$pv->precio}}</p>
                    <p>CANTIDAD PRODUCTO: {{$pv->cantidad}}</p>
        <center> 
        </center>    
                    <img src="{{ asset("/Imagenes/Productos/$pv->imagen")}}" style="height:350px; weight:350px;" class="img-responsive" alt="no encontrada">
        <center>            
             <h3>__________________________________________________________________________________</h3> 
        </center>    
                    <h3>INFORMACION DE LA VENTA</h3>    
                    <p>TOTAL VENTA: {{$venta[0]->total}}</p>
                    <p>FOLIO: {{$venta[0]->folioventa}}</p>

                    <div class="caption">
        @endforeach
</body>
</html>