<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <!-- Timeline CSS -->
    <link href="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/horizontal-timeline/css/horizontal-timeline.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.css')); ?>"/>
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

        #ModalDescripcion .modal-body {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
        }

        #ModalDescripcion .imagenRemedio {
            position: fixed !important;
            width: 14em !important;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', 'Estudios'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('estudios.index')); ?>">Estudios</a></li>
    <li class="breadcrumb-item active">Detalle</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    //        var_dump($result['reino']["vegetal"]);
    ?>
    

    <div class="row">
        <div class="col-sm-6">
            <?php echo $__env->make('estudios.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-sm-6">
            <?php echo $__env->make('estudios.show_barra', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-outline-info btn-block" id="btnDoc1" data-target="#ModalDocumento" data-toggle="modal">Vea la Dinámica</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-outline-info btn-block" id="btnDoc2" data-target="#ModalDocumento" data-toggle="modal">Interrogatorio Dirigido</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12">
            <?php echo $__env->make('estudios.show_analisis_combinado', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    <?php if($isAdmin): ?>

        <div class="row mt-4">
            <div class="col-sm-12">
                <?php echo $__env->make('estudios.show_remedio', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-sm-12">
            <input type="hidden" name="estudio_id" id="estudio_id" value="<?php echo e($estudios->id); ?>">
            <input type="hidden" name="remedios" id="remedios" value="<?php echo e(json_encode($remedios)); ?>">
            <input type="hidden" name="data" id="data" value="<?php echo e(json_encode($data)); ?>">
            <input type="hidden" name="predominante" id="predominante" value="<?php echo e(json_encode($predominante)); ?>">

            <?php echo $__env->make('estudios.show_analisis', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    <?php echo $__env->make('estudios.modal_descripcion', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('estudios.modal_documento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

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

    <script src="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/cargarAnalisis.js')); ?>"></script>
    <script src="<?php echo e(asset('js/btnes_ordenacion_filtrado.js')); ?>"></script>
    <script src="<?php echo e(asset('js/guardar_nota.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buscarDescripcion.js')); ?>"></script>

    <script>
        $(document).ready(function () {
            cargarAnalisis(1, 1, 1, 1, 1, 1);
            let mostrar = 1;
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>