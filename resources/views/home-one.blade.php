@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@section('css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"/>
    <link rel="stylesheet" href="{{asset('css/introjs.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <style>
        .ticket {
            width: 40%;

        }

        @media only screen and (max-width: 600px) {
            .ticket {
                width: 30%;
                padding: 15px;
            }
        }

        .dtp > .dtp-content > .dtp-date-view > header.dtp-header {
            background: #1e88e5;
            color: #fff;
            text-align: center;
            padding: 0.3em;
        }

        .dtp div.dtp-date, .dtp div.dtp-time {
            background: #1e88e5;
            text-align: center;
            color: #fff;
            padding: 10px;
        }

        .dtp .p10 > a {
            color: #fff;
            text-decoration: none;
        }

        .dtp table.dtp-picker-days tr > td > a.selected {
            background: #1e88e5;
            color: #fff;
        }

        #dtp_UpXtk {
            overflow-y: inherit;
            overflow-x: hidden;
        }

        .dropzone {
            border: none;
            background: none !important;
        }

        .dropzone-style {
            border: 1px dashed #ccc;
            border-radius: 10px;
        }

        .dz-message {
            height: 70px;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child:before {
            top: 15px;
            background-color: #26c6da;
        }

        .modal {
            max-width: 800px !important;
            height: auto !important;
        }

        .blocker {
            z-index: 99 !important;
        }

        .modal a.close-modal {
            top: 5px !important;
            right: 5px !important;
        }

    </style>
@endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('content')

    @if(session('claveCambiada'))
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="alert alert-success text-center">{{session('claveCambiada')}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
    @if ($password_admin)
        <div class="card">
            <div class="card-body">
                @include('users.change_password')
            </div>
        </div>
    @endif
    @if ($completeData)
        <div class="card">
            <div class="card-body">
                @include('users.complete_data')
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-6 col-xlg-6 col-md-6">
            <div class="card blog-widget">
                <div class="card-body text-center">
                    <div class="blog-image">
                        <i class="fas fa-user-md fa-3x"></i>
                    </div>
                    <h3>{{ _i('Estudios') }}</br>&nbsp;</h3>
                </div>
                <div class="card-footer text-center">
                    <a href="{{route('estudios.create')}}" class="btn btn-warning">{{ _i('Crear Nuevo Estudio') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xlg-6 col-md-6">
            <div class="card blog-widget">
                <div class="card-body text-center">
                    <div class="blog-image">
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    </div>
                    <h3>{{ _i('Instrucciones de') }} </br>{{ _i('Uso') }}</h3>
                </div>
                <div class="card-footer text-center">
                    <a href="#ex3" rel="modal:open" class="btn btn-warning">{{ _i('Mostrar') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
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
            </div>
        </div>
    </div>
@endsection

@include('modal_instrucciones')

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

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


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
