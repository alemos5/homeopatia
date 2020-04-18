<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css">
    <!-- Timeline CSS -->
    <link href="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/horizontal-timeline/css/horizontal-timeline.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/shadowbox-js-src.3.0.3/src/shadowbox.css')); ?>"/>
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

<?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', _i('Estudios')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('estudios.index')); ?>"><?php echo e(_i('Estudios')); ?></a></li>
    <li class="breadcrumb-item active"><?php echo e(_i('Detalle')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    //        var_dump($result['reino']["vegetal"]);
    ?>
    

    <div class="row">
        <input type="hidden" name="idioma" id="idioma" value="<?php echo e(LaravelGettext::getLocale()); ?>">
        <div class="col-sm-6">
            <?php echo $__env->make('estudios.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-sm-6">
            <?php echo $__env->make('estudios.show_barra', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <a href="#ex2" rel="modal:open" class="btn btn-outline-info btn-block btnDoc1" data-dinamica="<?=$result['general']['pregnancia']?>"><?php echo e(_i('Vea la Dinámica')); ?></a>
                </div>
                <div class="col-sm-6">
                    <a href="#ex2" rel="modal:open" class="btn btn-outline-info btn-block btnDoc2" data-interrogatorio="<?=$result['general']['pregnancia']?>"><?php echo e(_i('Interrogatorio Dirigido')); ?></a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    
                    <input type="hidden" id="url_origin" value="<?php echo e(url('estudioPDF', ['estudios'=>$estudios, 'clave'=>$result['general']['clave'], 'pregnancia'=>$result['general']['pregnancia'], 'vegetal'=>$result['reino']['vegetal'], 'mineral'=>$result['reino']['mineral'], 'animal'=>$result['reino']['animal']])); ?>">
                    <a id="print_report" class="btn btn-outline-info btn-block" target="_blank"
                       href="">
                        <?php echo e(_i('Imprimir Estudio')); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12">
            <?php echo $__env->make('estudios.show_analisis_combinado', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    <?php if($isAdmin==9): ?>

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

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendor/wrappixel/material-pro/4.2.1/assets/plugins/switchery/dist/switchery.min.js')); ?>" type="text/javascript"></script>

    <script src="<?php echo e(asset('js/cargarAnalisisC.js')); ?>"></script>
    <script src="<?php echo e(asset('js/cargarAnalisis.js')); ?>"></script>
    <script src="<?php echo e(asset('js/btnes_ordenacion_filtrado.js')); ?>"></script>
    <script src="<?php echo e(asset('js/guardar_nota.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buscarDescripcion.js')); ?>"></script>


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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>