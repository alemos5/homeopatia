@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">

@endsection
@section('nombre_modulo', _i('Estudios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item active"><a href="{{route('estudios.index')}}">{{ _i('Estudios') }}</a></li>
@endsection
@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            {{ _i('Estudios Médicos') }}
            @can('estudios.create')
                @if (Auth::user()->creditos->sum('cantidad')>0)
                    <a href="{{route('estudios.create')}}" class="btn btn-outline-success float-right"> <i class="fas fa-plus"></i> {{ _i('Crear') }}</a>
                @endif
            @endcan
        </h1>
        @can('estudios.create')
            @if (Auth::user()->creditos->sum('cantidad')==0)
                <div class="alert alert-danger">{{ _i('Debe abonar créditos a su cuenta para poder crear estudios médicos.') }}</div>
            @endif
        @endcan

    </section>
    <div class="content">

        @include('flash::message')

        <div class="box box-primary">
            <div class="box-body">
                    @include('estudios.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                "order": false,
                "language":{
                    "sProcessing":     "{{_i('Procesando')}}...",
                    "sLengthMenu":     "{{_i('Ver')}} _MENU_",
                    "sZeroRecords":    "{{_i('No se encontraron resultados')}}",
                    "sEmptyTable":     "{{_i('Ningún dato disponible en esta tabla')}}",
                    "sInfo":           "_START_ {{_i('al')}} _END_ {{_i('de')}}  _TOTAL_ {{_i('registros')}}",
                    "sInfoEmpty":      "{{_i('Mostrando registros del 0 al 0 de un total de 0 registros')}}",
                    "sInfoFiltered":   "({{_i('filtrado de un total de')}} _MAX_ {{_i('registros')}})",
                    "sInfoPostFix":    "",
                    "sSearch":         "{{_i('Buscar')}}:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "{{_i('Cargando')}}...",
                    "oPaginate": {
                        "sFirst":    "<<",
                        "sLast":     ">>",
                        "sNext":     ">",
                        "sPrevious": "<"
                    },
                    "oAria": {
                        "sSortAscending":  ": {{_i('Activar para ordenar la columna de manera ascendente')}}",
                        "sSortDescending": ": {{_i('Activar para ordenar la columna de manera descendente')}}"
                    }
                },
                "pageLength": 10,
                "bDestroy": true
            });
        } );
    </script>

@endsection


