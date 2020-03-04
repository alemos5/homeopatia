function cargarAnalisis (orden1,orden2,orden3, filtro1, filtro2, filtro3, filtro4, filtro5) {


    let espera = `<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"></circle></svg>`;
    $('#cuadro tbody').html(espera);


    let remedios = $('#remedios').val();
    let data = $('#data').val();
    let predominante = $('#predominante').val();
    let estudio_id = $('#estudio_id').val();

    $.ajax({
        type:'POST',
        url:'/calcularAnalisis',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data:{
            estudio_id:estudio_id,
            remedios:remedios,
            data:data,
            predominante:predominante,
            orden1: orden1,
            orden2: orden2,
            orden3: orden3,
            filtro1: filtro1,
            filtro2: filtro2,
            filtro3: filtro3,
            filtro4: filtro4,
            filtro5: filtro5
        },
        success:function(filas){

            $('#cuadro tbody').html(filas);

            if ( $.fn.dataTable.isDataTable( '#cuadro' ) ) {
                $('#cuadro').DataTable();
            }else{
                $('#cuadro').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "order": [ 3, 'asc' ],
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Ver _MENU_",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "_START_ al _END_ de  _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": ">>",
                            "sNext": ">",
                            "sPrevious": "<"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
                    "pageLength": 100,
                    "bDestroy": true,
                    'rowCallback': function(row, data, index){
                        if(data[2] == 'Animal'){
                            console.log( 'anima'  );
                            $(row).css('background-color', 'rgba(255,70,95,0.35)');
                        }
                        if(data[2] == 'Mineral'){
                            console.log( 'anima'  );
                            $(row).css('background-color', 'rgba(30,136,229,0.35)');
                        }
                        if(data[2] == 'Vegetal'){
                            console.log( 'anima'  );
                            $(row).css('background-color', 'rgba(53,210,56,0.35)');
                        }
                    }
                });
            }
        }
    });

}
