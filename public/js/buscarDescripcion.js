$(document).on('click', '.btnDescripcion', function () {

    let idremedio = $(this).data('idremedio');
    let espera = `<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"></circle></svg>`;

    $('#tituloModal').html('');
    $('#descripcionRemedio').html(espera);
    $('#imagenRemedio').html(espera);

    const url = `/searchRemedio/${idremedio}`;
    $.getJSON(url, respuesta => {

        $('#tituloModal').html(respuesta.nombre_completo);
        let idioma = $('#idioma').val();
        let descripcion = '';
        if(idioma=='es_ES') {
            descripcion = respuesta.descripcion.replace(new RegExp('\n', 'g'), '<br>');
        }else{
            descripcion = respuesta.descripcion_en.replace(new RegExp('\n', 'g'), '<br>');
        }
        $('#descripcionRemedio').html(descripcion);
        $('#imagenRemedio').html(`<img src="/images/fotos_remedios/${respuesta.imagen}" class="img-responsive radius imagenRemedio" alt="">`);

    });
});

$(document).on('click', '.btnDoc1', function () {
    let idioma = $('#idioma').val();
    let dinamica = $(this).data('dinamica');
    if(idioma=='es_ES') {
        $('#tituloModal2').html('Dinámica');
        $('#iframeDoc').attr('src', '/html/es/orden-de-simetria-' + dinamica + '.html');
    }else{
        $('#tituloModal2').html('Dynamic');
        $('#iframeDoc').attr('src', '/html/en/orden-de-simetria-' + dinamica + '.html');
    }

});

$(document).on('click', '.btnDoc2', function () {
    let idioma = $('#idioma').val();
    let interrogatorio = $(this).data('interrogatorio');
    if(idioma=='es_ES') {
        $('#iframeDoc').attr('src', '/html/es/interrogatorio-de-la-simetria-' + interrogatorio + '.html');
        $('#tituloModal2').html('Interrogatorio Dirigido');
    }else{
        $('#tituloModal2').html('Directed Interrogation');
        $('#iframeDoc').attr('src', '/html/en/interrogatorio-de-la-simetria-' + interrogatorio + '.html');
    }

});