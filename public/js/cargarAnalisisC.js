function cargarAnalisisC (filtro1, filtro2, filtro3, filtro4, filtro5) {

    let espera = `<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"></circle></svg>`;
    $('#data-table-analisis-combinado tbody').html(espera);


    let remedios = $('#remedios').val();
    let data = $('#data').val();
    let predominante = $('#predominante').val();
    let estudio_id = $('#estudio_id').val();

    $.ajax({
        type:'POST',
        url:'/calcularAnalisisC',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data:{
            remedios:remedios,
            data:data,
            predominante:predominante,
            filtro1: filtro1,
            filtro2: filtro2,
            filtro3: filtro3,
            filtro4: filtro4,
            filtro5: filtro5
        },
        success:function(filas){
            $('#data-table-analisis-combinado tbody').html(filas);
        }
    });

}