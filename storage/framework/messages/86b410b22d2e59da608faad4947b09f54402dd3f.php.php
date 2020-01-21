<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/introjs.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <style>
        .ticket {
            width: 40%;

        }

        @media  only screen and (max-width: 600px) {
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
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <?php if(session('claveCambiada')): ?>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="alert alert-success text-center"><?php echo e(session('claveCambiada')); ?></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endif; ?>
    <?php if($password_admin): ?>
        <div class="card">
            <div class="card-body">
                <?php echo $__env->make('users.change_password', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if($completeData): ?>
        <div class="card">
            <div class="card-body">
                <?php echo $__env->make('users.complete_data', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-4 col-xlg-4 col-md-4">
            <div class="card blog-widget">
                <div class="card-body text-center">
                    <div class="blog-image">
                        <i class="fas fa-user-md fa-3x"></i>
                    </div>
                    <h3><?php echo e(_i('Estudio Médico')); ?></br>&nbsp;</h3>
                </div>
                <div class="card-footer text-center">
                    <a href="<?php echo e(route('estudios.create')); ?>" class="btn btn-success"><?php echo e(_i('Crear Nuevo')); ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xlg-4 col-md-4">
            <div class="card blog-widget">
                <div class="card-body text-center">
                    <div class="blog-image">
                        <i class="fas fa-wallet fa-3x"></i>
                    </div>
                    <h3><?php echo e(_i('Abono Promocional')); ?></br> <?php echo e($promocion->creditos); ?> <?php echo e(_i('Créditos')); ?></h3>
                </div>
                <div class="card-footer text-center">
                    <a href="<?php echo e(route('payment', $promocion->id)); ?>" class="btn btn-warning">
                        <?php echo e(_i('Comprar por US$')); ?> <?php echo e(number_format($promocion->costo,2,',','.')); ?>

                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xlg-4 col-md-4">
            <div class="card blog-widget">
                <div class="card-body text-center">
                    <div class="blog-image">
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    </div>
                    <h3><?php echo e(_i('Instrucciones de')); ?> </br><?php echo e(_i('Uso')); ?></h3>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-success"><?php echo e(_i('Mostrar')); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <section class="content-header">
                <h1 class="pull-left">
                    <?php echo e(_i('Estudios Médicos')); ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.create')): ?>
                        <?php if(Auth::user()->creditos->sum('cantidad')>0): ?>
                            <a href="<?php echo e(route('estudios.create')); ?>" class="btn btn-outline-success float-right"> <i class="fas fa-plus"></i> <?php echo e(_i('Crear')); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </h1>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.create')): ?>
                    <?php if(Auth::user()->creditos->sum('cantidad')==0): ?>
                        <div class="alert alert-danger"><?php echo e(_i('Debe abonar créditos a su cuenta para poder crear estudios médicos.')); ?></div>
                    <?php endif; ?>
                <?php endif; ?>

            </section>
            <div class="content">

                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo $__env->make('estudios.table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Ver _MENU_",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "_START_ al _END_ de  _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     ">>",
                        "sNext":     ">",
                        "sPrevious": "<"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
                "pageLength": 10,
                "bDestroy": true
            });
        } );
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>