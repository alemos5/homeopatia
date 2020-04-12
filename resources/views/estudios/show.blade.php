@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <!-- Timeline CSS -->
    <link href="{{asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/horizontal-timeline/css/horizontal-timeline.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shadowbox-js-src.3.0.3/src/shadowbox.css')}}"/>
    <style>
        table.dataTable thead .sorting:after {
            content: "\F0DC";
            margin-left: 10px;
            font-family: "Font Awesome 5 Free" !important;
            font-weight: 900;
            cursor: pointer;
            color: rgba(255, 255, 255, 1);
        }

        table {
            color: #000;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #26c6da;
            border-color: #26c6da;
        }

        .events li a {
            top: -35px;
        }

        .modal {
            max-width: 1350px !important;
            height: auto !important;
        }

        #ex1 #descripcionRemedio {
            max-height: calc(101vh - 210px);
            overflow-y: auto;
        }

        .blocker {
            z-index: 99 !important;
        }

        .modal a.close-modal {
            top: 5px !important;
            right: 5px !important;
        }

        #cuadro td, #cuadro th{
            border-left: 1px solid;
            border-right: 1px solid;
        }
    </style>

@endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Estudios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('estudios.index')}}">{{ _i('Estudios') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Detalle') }}</li>
@endsection
@section('content')
    <?php
    //        var_dump($result['reino']["vegetal"]);
    ?>
    {{--    <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>--}}

    <div class="row">
        <input type="hidden" name="idioma" id="idioma" value="{{LaravelGettext::getLocale()}}">
        <div class="col-sm-6">
            @include('estudios.show_fields')
        </div>
        <div class="col-sm-6">
            @include('estudios.show_barra')
            <div class="row mt-4">
                <div class="col-sm-6">
                    <a href="#ex2" rel="modal:open" class="btn btn-outline-info btn-block btnDoc1" data-dinamica="<?=$result['general']['pregnancia']?>">{{ _i('Vea la Dinámica') }}</a>
                </div>
                <div class="col-sm-6">
                    <a href="#ex2" rel="modal:open" class="btn btn-outline-info btn-block btnDoc2" data-interrogatorio="<?=$result['general']['pregnancia']?>">{{ _i('Interrogatorio Dirigido') }}</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    {{--href="{{route('estudios.estudioPDF', $estudios,$remedios,$result['general']['clave'],$result['general']['pregnancia'],$result['reino']['vegetal'],$result['reino']['mineral'],$result['reino']['animal']])}}">--}}
                    <input type="hidden" id="url_origin" value="{{url('estudioPDF', ['estudios'=>$estudios, 'clave'=>$result['general']['clave'], 'pregnancia'=>$result['general']['pregnancia'], 'vegetal'=>$result['reino']['vegetal'], 'mineral'=>$result['reino']['mineral'], 'animal'=>$result['reino']['animal']])}}">
                    <a id="print_report" class="btn btn-outline-info btn-block" target="_blank"
                       href="">
                        {{ _i('Imprimir Estudio') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12">
            @include('estudios.show_analisis_combinado')
        </div>
    </div>

    @if($isAdmin==9)

        <div class="row mt-4">
            <div class="col-sm-12">
                @include('estudios.show_remedio')
            </div>
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-sm-12">
            <input type="hidden" name="estudio_id" id="estudio_id" value="{{$estudios->id}}">
            <input type="hidden" name="remedios" id="remedios" value="{{json_encode($remedios)}}">
            <input type="hidden" name="data" id="data" value="{{json_encode($data)}}">
            <input type="hidden" name="predominante" id="predominante" value="{{json_encode($predominante)}}">

            @include('estudios.show_analisis')
        </div>
    </div>

    @include('estudios.modal_descripcion')
    @include('estudios.modal_documento')

@endsection

@section('js')

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('js/cargarAnalisisC.js') }}"></script>
    <script src="{{ asset('js/cargarAnalisis.js') }}"></script>
    <script src="{{ asset('js/btnes_ordenacion_filtrado.js') }}"></script>
    <script src="{{ asset('js/guardar_nota.js') }}"></script>
    <script src="{{ asset('js/buscarDescripcion.js') }}"></script>


    <script>
        $(document).ready(function () {
            cargarAnalisisC(1, 1, 1, 1, 1);
            cargarAnalisis(0, 1, 0, 1, 1, 1, 1, 1);
            let mostrar = 0;
            $('#btnVerAnalisisC').click(function () {
               if(mostrar){
                   mostrar = 0;
                   $('#btnVerAnalisisC').html('Ocultar');
                   $('#cuadroAnalisisC').css('display', 'block');
               }else{
                   $('#btnVerAnalisisC').html('Mostrar');
                   mostrar = 1;
                   $('#cuadroAnalisisC').css('display', 'none');
               }
            });
        });

    </script>
@endsection
