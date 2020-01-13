$(document).on('click', '.btnGuardarNota', function () {

    let remedioId = $(this).data('remedioid');
    let estudioId = $('#estudio_id').val();
    let nota = $(`#nota${remedioId}`).val();

    $(`#msg${remedioId}`).html('');

    $.ajax({
        type:'POST',
        url:'/guardarNota',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data:{
            estudio_id: estudioId,
            remedio_id: remedioId,
            nota: nota
        },
        success:function(){

            $(`#msg${remedioId}`).html('<i class="fas fa-check-circle fa-2x text-success"></i>');

        }
    });
});