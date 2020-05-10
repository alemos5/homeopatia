<?php
//die("Llegaste a la vista");
//ini_set('memory_limit', '-1');
?>

<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('nombre_modulo', _i('Estudios')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
    <li class="breadcrumb-item active"><a href="<?php echo e(route('estudios.index')); ?>"><?php echo e(_i('Estudios')); ?></a></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
        <div class="text-center">

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
                    "sProcessing":     "<?php echo e(_i('Procesando')); ?>...",
                    "sLengthMenu":     "<?php echo e(_i('Ver')); ?> _MENU_",
                    "sZeroRecords":    "<?php echo e(_i('No se encontraron resultados')); ?>",
                    "sEmptyTable":     "<?php echo e(_i('Ningún dato disponible en esta tabla')); ?>",
                    "sInfo":           "_START_ <?php echo e(_i('al')); ?> _END_ <?php echo e(_i('de')); ?>  _TOTAL_ <?php echo e(_i('registros')); ?>",
                    "sInfoEmpty":      "<?php echo e(_i('Mostrando registros del 0 al 0 de un total de 0 registros')); ?>",
                    "sInfoFiltered":   "(<?php echo e(_i('filtrado de un total de')); ?> _MAX_ <?php echo e(_i('registros')); ?>)",
                    "sInfoPostFix":    "",
                    "sSearch":         "<?php echo e(_i('Buscar')); ?>:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "<?php echo e(_i('Cargando')); ?>...",
                    "oPaginate": {
                        "sFirst":    "<<",
                        "sLast":     ">>",
                        "sNext":     ">",
                        "sPrevious": "<"
                    },
                    "oAria": {
                        "sSortAscending":  ": <?php echo e(_i('Activar para ordenar la columna de manera ascendente')); ?>",
                        "sSortDescending": ": <?php echo e(_i('Activar para ordenar la columna de manera descendente')); ?>"
                    }
                },
                "pageLength": 10,
                "bDestroy": true
            });
        } );
    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>