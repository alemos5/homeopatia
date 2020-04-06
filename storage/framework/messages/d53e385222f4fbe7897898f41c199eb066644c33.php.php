<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('css'); ?>
   <link href="<?php echo e(asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/horizontal-timeline/css/horizontal-timeline.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="row">
                  
                </div>
 <div class="card">
 	<div class="card-body">
        <div class="row">
        <div class="col-md-6">
            <div class="card card-outline-inverse">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Información del paquete</h4></div>
                <div class="card-body">
                    <h4 class="card-title">Compañia Courier</h4>
                    <p class="card-text"><?php echo e($prealertas->courier); ?></p>
                    <h4 class="card-title">Tienda</h4>
                    <p class="card-text"><?php echo e($prealertas->tienda); ?></p>
                    <h4 class="card-title">Valor del paquete</h4>
                    <p class="card-text"><?php echo e($prealertas->valor); ?></p>
                    <h4 class="card-title">Numero de orden</h4>
                    <p class="card-text"><?php echo e($prealertas->nu_orden); ?></p>
                    <h4 class="card-title">Tracking</h4>
                    <p class="card-text"><?php echo e($prealertas->tracking); ?></p>
                    <h4 class="card-title">Tipo de proceso</h4>
                    <p class="card-text"><?php echo e($prealertas->estatus); ?></p>
                    <h4 class="card-title">Dirección</h4>
                    <p class="card-text"><?php echo e($prealertas->direccion); ?></p>
                    <h4 class="card-title">Descripción</h4>
                    <p class="card-text"><?php echo e($prealertas->descripcion); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-outline-inverse">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Archivos</h4></div>
                <div class="card-body">
                    <?php $archivos = explode(";", $prealertas->doc)?>
                    <ul class="list-group">
                    <?php for($i = 0; $i <  count($archivos) ; $i++): ?>
                        <?php if($archivos[$i]){ ?>
                          <li class="list-group-item"> <a href="<?php echo e(asset('files/'.$archivos[$i])); ?>"  target="_blank"> <?php echo e($archivos[$i]); ?> <br></a></li>
                        <?php } ?>
                    <?php endfor; ?>
                    </ul>
                    
                </div>
                    
            </div>
        </div>
        </div>


            


	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script src="<?php echo e(asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/horizontal-timeline/js/horizontal-timeline.js')); ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>