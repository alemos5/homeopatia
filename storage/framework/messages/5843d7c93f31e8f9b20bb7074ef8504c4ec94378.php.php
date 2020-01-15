<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', 'Credito Abonado'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('creditos.index')); ?>">Creditos</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('creditos.promociones')); ?>">Obtenga su Abono</a></li>
    <li class="breadcrumb-item active">Credito Abonado</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">

        <div class="box box-primary">

            <?php if(session('message')): ?>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="alert alert-success text-center"><?php echo e(session('message')); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body pricing-body pl-4 pr-4 text-center">
                                <i class="far fa-check-circle fa-5x text-success"></i>
                                <h2 class="text-center"><?php echo e($credito->cantidad); ?></h2>
                                <p class="text-center">
                                    <?php if($credito->cantidad>1): ?>
                                        Créditos Abonados
                                    <?php else: ?>
                                        Crédito Abonado
                                    <?php endif; ?>
                                </p>
                                <div class="price-table-content text-center">
                                    <div class="price-row"><h4>US$ <?php echo e(number_format($credito->costo,0,'','.')); ?></h4></div>
                                    <div class="price-row">Operación: <h5><?php echo e($credito->operacion); ?></h5></div>
                                    <div class="price-row">
                                        <?php if(Auth::user()->creditos->sum('cantidad')>0): ?>
                                            <a href="<?php echo e(route('estudios.create')); ?>" class="btn btn-success">
                                                Crear un Nuevo Estudio Médico
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                            
                                
                            
                        
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                        
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>