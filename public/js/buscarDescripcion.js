$(document).on('click', '.btnDescripcion', function () {

    let idremedio = $(this).data('idremedio');
    let espera = `<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"></circle></svg>`;

    $('#tituloModal').html('');
    $('#descripcionRemedio').html(espera);
    $('#imagenRemedio').html(espera);

    const url = `/searchRemedio/${idremedio}`;
    $.getJSON(url, respuesta => {

        $('#tituloModal').html(respuesta.nombre_completo);
        let descripcion = respuesta.descripcion.replace(new RegExp('\n','g'), '<br>');
        $('#descripcionRemedio').html(descripcion);
        $('#imagenRemedio').html(`<img src="/images/fotos_remedios/${respuesta.imagen}" class="img-responsive radius imagenRemedio" alt="">`);

    });
});

$(document).on('click', '.btnDoc1', function () {
    let dinamica = $(this).data('dinamica');
    $('#tituloModal2').html('Dinámica');
    $('#iframeDoc').attr('src', '/html/orden-de-simetria-'+dinamica+'.html');

});

$(document).on('click', '.btnDoc2', function () {
    let interrogatorio = $(this).data('interrogatorio');
    $('#tituloModal2').html('Interrogatorio Dirigido');
    $('#iframeDoc').attr('src', '/html/interrogatorio-de-la-simetria-'+interrogatorio+'.html');

});