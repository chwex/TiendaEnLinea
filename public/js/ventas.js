var importe = 0;
$( window ).load(function() {
  initProd();
  actualuzarCalculos();
});

$(document).ready(function(){
     $('.cantidades').on('change',  function(){
         //obtengo el id del producto ligado a la cantidad
        var idArtRow = $(this).closest('.row').children('.idrow').html();

        //obtengo el producto a modificar
        var artMod = $.grep(prodAgregados, function(e) { return e.idproducto == parseInt(idArtRow) })

        //si el articulo tiene existencia subir la cantidad a la seleccionada. sino, bajar la cantidad a la existencia disponible
        if(artMod[0].inventario >= parseInt($(this).val()))
        {
            //actualizar el 
            for(var index in prodAgregados) { 
                if(prodAgregados[index].id == artMod[0].id){
                    prodAgregados[index].cantidad = parseInt($(this).val(),10);
                } 
            }
            actualuzarCalculos();
        }
        else
        {
            $(this).val(artMod[0].inventario);
            GenerarMensaje(3,'El artículo seleccionado no cuenta con existencia, favor de verificar');
        }
    });

    $('#btnFinalizar').on('click',function(){
       if ($("input[type=radio]:checked").length > 0) {
           $.ajax({
            data:  {_token:$('#token').val(),folio:folioVenta,idCliente:clienteSeleccionado[0].id,total:formNum(total),articulos:articulosAgregados,idventa:ventaId},
            url:   'guardarVenta',
            type:  'post',
            success:  function (data) {
                if(data != false)
                    window.location='ventas';
                else
                    GenerarMensaje(3,'La existencia de los productos es insuficiente, favor de verificar.');
            },
            error: function (data) {
                console.log(JSON.stringify(data));
            }
        });
       }
       else
       {
           GenerarMensaje(3,'“Debe seleccionar un plazo para realizar el pago de su compra.');
       }
    });
});

function actualuzarCalculos(){
    total = 0;
    for(var index in prodAgregados) { 
        total += (Math.round(parseFloat(prodAgregados[index].cantidad) * parseFloat(prodAgregados[index].precio)));
    }

    //actualizar total
    $('#total').val(formNum(total));
    
}

function initProd(){
    for(var index in prodAgregados) { 
        prodAgregados[index].cantidad = 1;
    }
}

function formNum(valor){
    return ((Math.round(((Math.round(valor*100)/5)*5)/5)*5)/100).toFixed(2);
}