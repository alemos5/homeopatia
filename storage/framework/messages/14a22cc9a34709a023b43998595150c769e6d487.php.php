<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/toast-master/css/jquery.toast.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('nombre_modulo', _i('Usuarios')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
<li class="breadcrumb-item active"><a href="<?php echo e(route('users.index')); ?>"><?php echo e(_i('Usuarios')); ?></a></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
        <?php echo e(_i('Usuarios')); ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.create')): ?>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-outline-success float-right"> <i class="fas fa-plus"></i> <?php echo e(_i('Crear')); ?></a>
            <?php endif; ?>
        </h1>
    </section>
    <div class="content">
        <?php if(session('info')): ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="alert alert-success text-center"><?php echo e(session('info')); ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped table-bordered nowrap" id="data-table">
                    <thead class="text-primary">
                    <tr>
                        <th width="10px"><?php echo e(_i('ID')); ?></th>
                        <th><?php echo e(_i('Code Cliente')); ?></th>
                        <th><?php echo e(_i('Nombre')); ?></th>
                        <th><?php echo e(_i('Email')); ?></th>
                        <th><?php echo e(_i('Teléfono')); ?></th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->id_cliente); ?></td>
                            <td><?php echo e($item->code_cliente); ?></td>
                            <td><?php echo e($item->nombre); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->telefono); ?></td>
                            <td class="td-actions text-right">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('creditos.create')): ?>
                                    <a href="<?php echo e(route('creditos.abonar', $item->id_cliente)); ?>" class="btn btn-outline-success btn-round btn-sm" title="<?php echo e(_i('Abonar Crédito')); ?>">
                                        <i class="fas fa-wallet"></i>
                                    </a>
                                <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.show')): ?>
                                    <a href="<?php echo e(route('users.show', $item->id_cliente)); ?>" class="btn btn-outline-success btn-round btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.edit')): ?>
                                    <a href="<?php echo e(route('users.edit', $item->id_cliente)); ?>" class="btn btn-outline-success btn-round btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.destroy')): ?>
                                    <?php echo Form::open(['route' => ['users.destroy', $item->id_cliente], 'method' => 'DELETE', 'id' => 'formDelete','class' => 'd-inline']); ?>

                                    <button class="btn btn-outline-success btn-round btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
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
        $(document).ready(function () {
            $('#data-table').DataTable({
                "order": [[0, "desc"]],
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
                "pageLength": 10,
                "bDestroy": true
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>