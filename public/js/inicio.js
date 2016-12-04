function GenerarMensaje(nivel, mensaje) {
    $('#mensajeAlerta label').text();
    switch (nivel) {
        case 1:
            $('#mensajeAlerta').removeClass().addClass('alert alert-success');
            $('#mensajeAlerta strong').text('¡Exito!');
            $('#mensajeAlerta label').text(mensaje);
            break;

        case 2:
            $('#mensajeAlerta').removeClass().addClass('alert alert-warning');
            $('#mensajeAlerta strong').text('¡Error!');
            $('#mensajeAlerta label').text(mensaje);
            break;

        case 3:
            $('#mensajeAlerta').removeClass().addClass('alert alert-danger');
            $('#mensajeAlerta strong').text('¡Error!');
            $('#mensajeAlerta label').text(mensaje);
            break;
    }

    $('body').animate({ scrollTop: 0 }, 'slow');
    $('#mensajeAlerta').fadeTo(5000, .8).slideUp('7000', function () {
        $("#mensajeAlerta").fadeOut('slow');
    });
}