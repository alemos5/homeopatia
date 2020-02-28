$(document).ready(function () {

    let varOrden1=0;
    let varOrden2=1;
    let varOrden3=0;
    let filtro1=1;
    let filtro2=1;
    let filtro3=1;
    let filtro4=1;
    let filtro5=1;


    $('.ordenar').on( 'change', function() {

        if( $('#orden1').is(':checked') ) {
            varOrden1 = 1;
        } else {
            varOrden1 = 0;
        }
        if( $('#orden2').is(':checked') ) {
            varOrden2 = 1;
        } else {
            varOrden2 = 0;
        }
        if( $('#orden3').is(':checked') ) {
            varOrden3 = 1;
        } else {
            varOrden3 = 0;
        }

        cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
    });

    // Filtros
    $('#btnRMS1').click(function () {
        if(filtro1==1) {
            $(this).blur();
            $(this).removeClass('btn-success');
            $(this).addClass('btn-outline-success');
            filtro1 = 0;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }else {
            $('#divRSM').css('display','table-row');
            $(this).removeClass('btn-outline-success');
            $(this).addClass('btn-success');
            filtro1 = 1;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }
    });
    $('#btnImpregnancia1').click(function () {
        if(filtro2==1) {
            $(this).blur();
            $(this).removeClass('btn-success');
            $(this).addClass('btn-outline-success');
            filtro2 = 0;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }else {
            $('#divImpregnancia').css('display','table-row');
            $(this).removeClass('btn-outline-success');
            $(this).addClass('btn-success');
            filtro2 = 1;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }
    });

    $('#btnSecuencia1').click(function () {
        if(filtro3==1) {
            $(this).blur();
            $(this).removeClass('btn-success');
            $(this).addClass('btn-outline-success');
            filtro3 = 0;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }else {
            $('#divSecuencia').css('display','table-row');
            $(this).removeClass('btn-outline-success');
            $(this).addClass('btn-success');
            filtro3 = 1;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }
    });

    $('#btnConsonante1').click(function () {
        if(filtro4==1) {
            $(this).blur();
            $(this).removeClass('btn-success');
            $(this).addClass('btn-outline-success');
            filtro4 = 0;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }else {
            $('#divConsonantes').css('display','table-row');
            $(this).removeClass('btn-outline-success');
            $(this).addClass('btn-success');
            filtro4 = 1;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }
    });

    $('#btnClave1').click(function () {
        if(filtro5==1) {
            $('#divClaves').css('display','none');
            $(this).blur();
            $(this).removeClass('btn-success');
            $(this).addClass('btn-outline-success');
            filtro5 = 0;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }else {
            $('#divClaves').css('display','table-row');
            $(this).removeClass('btn-outline-success');
            $(this).addClass('btn-success');
            filtro5 = 1;
            cargarAnalisisC(filtro1,filtro2,filtro3,filtro4,filtro5);
            cargarAnalisis(varOrden1,varOrden2,varOrden3,filtro1,filtro2,filtro3,filtro4,filtro5);
        }
    });

});