<?php
//die("Llegaste a la vista");
//ini_set('memory_limit', '-1');
?>
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
    <form class="content-header">
        <h1 class="pull-left">
            {{ _i('Historial completo de estudios') }}
            @can('estudios.create')
                @if (Auth::user()->creditos->sum('cantidad')>0)
                    <a href="{{route('estudios.create')}}" class="btn btn-outline-success float-right"> <i class="fas fa-plus"></i> {{ _i('Crear') }}</a>
                @endif
            @endcan
        </h1>

        <h4 style="margin-top: 50px">{{_i('Filtro de búsquedas')}}</h4><hr>
        <form method="POST" action="{{route('estudios.index')}}">
            @csrf
        <div class="row">
            <div class="form-group col-sm-3">
                <label for=""><b>{{ _i('Cantidad') }}:</b></label>
                <select class="form-control" name="limit" id="limit">
                        <option value="200" <?php if($limit==200){ ?> selected <?php } ?>>200</option>
                        <option value="500" <?php if($limit==500){ ?> selected <?php } ?>>500</option>
                        <option value="1000" <?php if($limit==1000){ ?> selected <?php } ?>>1.000</option>
                        <option value="5000" <?php if($limit==5000){ ?> selected <?php } ?>>5.000</option>
                        <option value="10000" <?php if($limit==10000){ ?> selected <?php } ?>>10.000</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for=""><b>{{ _i('Nombre/s') }}:</b></label>
                <input class="form-control"  name="nombre" type="text" value="<?php if($nombre){ echo $nombre; } ?>">
            </div>
            <div class="form-group col-sm-3">
                <label for=""><b>{{ _i('Apellido/s') }}:</b></label>
                <input class="form-control"  name="apellido" type="text" value="<?php if($apellido){ echo $apellido; } ?>">
            </div>
            <div class="form-group col-sm-3">
                <label for=""><b>{{ _i('Nombre por el cual se reconoce') }}:</b></label>
                <input class="form-control"  name="apodo" type="text"  value="<?php if($apodo){ echo $apodo; } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <center>
                    <button type="submit" class="btn btn-outline-success float-right"> <i class="fas fa-search"></i> {{ _i('Buscar') }}</button>
                </center>
            </div>
        </div>
        </form>

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
        $(document).ready(function() {
            $('#data-table-2').DataTable({
                //"bPaginate": false,
                "bLengthChange": false,
                // "bFilter": true,
                // "bInfo": false,
                //"bAutoWidth": false,
                "searching": false,
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


