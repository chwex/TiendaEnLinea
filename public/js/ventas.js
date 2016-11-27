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
        var artMod = $.grep(prodAgregados, function(e) { return e.id == idArtRow })

        //si el articulo tiene existencia subir la cantidad a la seleccionada. sino, bajar la cantidad a la existencia disponible
        if(artMod[0].existencia >= parseInt($(this).val()))
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
            $(this).val(artMod[0].existencia);
            GenerarMensaje(3,'El artículo seleccionado no cuenta con existencia, favor de verificar');
        }
    });
});

function actualuzarCalculos(){
    importeTotal = 0;
    for(var index in prodAgregados) { 
        importeTotal += (Math.round(parseFloat(prodAgregados[index].cantidad) * parseFloat(prodAgregados[index].precio)));
    }

    //actualizar total
    $('#total').html('$'+formNum(total));
    
}

function initProd(){
    for(var index in prodAgregados) { 
        prodAgregados[index].cantidad = 1;
    }
}

function formNum(valor){
    return ((Math.round(((Math.round(valor*100)/5)*5)/5)*5)/100).toFixed(2);
}

