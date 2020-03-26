<?php $__env->startSection('css'); ?>
    <style>

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

        #cuadro td, #cuadro th{
            border-left: 1px solid;
            border-right: 1px solid;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', _i('Estudios')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('estudios.index')); ?>"><?php echo e(_i('Estudios')); ?></a></li>
    <li class="breadcrumb-item active"><?php echo e(_i('Crear')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            <?php echo e(_i('Estudios')); ?>

        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">

            <div class="box-body">
                <a href="#ex3" rel="modal:open" class="btn btn-warning"><?php echo e(_i('Instrucciones de Uso')); ?></a>
                <hr>
                <div class="row">


                    <?php echo Form::open(['route' => 'estudios.store', 'style'=>'width: 100%']); ?>


                        <?php echo $__env->make('estudios.fields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modal_instrucciones', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('js'); ?>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>