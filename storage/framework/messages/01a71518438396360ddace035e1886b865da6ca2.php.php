<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', 'Obtenga su Abono'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('creditos.index')); ?>"><?php echo e(_i('Créditos')); ?></a></li>
    <li class="breadcrumb-item active"><?php echo e(_i('Obtenga su Abono')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <?php if(session('message')): ?>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="alert alert-danger text-center"><?php echo e(session('message')); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body pricing-body pl-4 pr-4">
                                <div class="alert alert-primary">
                                    <h3 class="text-center"><?php echo e(_i('¡Abono Promocional')); ?> <br> <?php echo e(_i('Primera Compra!')); ?></h3>
                                </div>
                                <h2 class="text-center"><?php echo e($promocion->creditos); ?></h2>
                                <p class="text-center"><?php echo e(_i('Créditos')); ?></p>
                                <div class="price-table-content text-center">
                                    <div class="price-row"><h4>US$ <?php echo e(number_format($promocion->costo,0,'','.')); ?></h4></div>
                                    <div class="price-row"><i class="fas fa-piggy-bank"></i> <?php echo e(_i('Ud. Ahorra')); ?> US$ <?php echo e(number_format($promocion->ahorro,0,'','.')); ?></div>
                                    <div class="price-row"> <?php echo e(_i('Precio por Cŕedito')); ?> US$ <?php echo e(number_format($promocion->precioxc,2,',','.')); ?></div>
                                    <div class="price-row">
                                        <a href="<?php echo e(route('payment', $promocion->id)); ?>" class="btn btn-warning">
                                            <?php echo e(_i('Comprar')); ?> <i class="fab fa-cc-paypal fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <?php echo e(_i('¿Busca precios especiales? Recuerde contactar a su representante local ')); ?><a href="#"><?php echo e(_i('AQUÍ')); ?></a> <?php echo e(_i('y obtenga promociones y descuentos para su país.')); ?>

                                </p>
                                <p>
                                    <?php echo e(_i('Si usted tiene archivos PDF de estudios de versiones anteriores del Algoritmo Candegabe y que desea tener en esta nueva versión sin gastar nuevamente un crédito, contáctenos a ')); ?><a href="mailto:info@algoritmocandegabe.com">info@algoritmocandegabe.com</a> <?php echo e(_i('informándonos la cantidad de archivos PDF que desea digitalizar.')); ?>

                                </p>
                                <p>
                                    <?php echo e(_i('El costo de digitalización es de US$ 2.- por PDF.')); ?>

                                </p>
                                <p>
                                    <?php echo e(_i('Recuerde que debe tener el archivo para enviarlo y que así podamos digitalizarlo.')); ?>

                                </p>
                                <hr>
                                <div class="row pricing-plan">
                                    <?php $__currentLoopData = $princings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $princing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-2 col-xs-12 col-sm-6 no-padding">
                                            <div class="pricing-box <?php if($princing->etiqueta): ?> featured-plan <?php endif; ?>">
                                                <div class="pricing-body <?php if(!$princing->etiqueta): ?> b-l <?php endif; ?>">
                                                    <div class="pricing-header">
                                                        <?php if($princing->etiqueta): ?>
                                                            <h4 class="price-lable text-white bg-warning"> <?php echo e(_i($princing->etiqueta)); ?></h4>
                                                        <?php endif; ?>
                                                        <h2 class="text-center"><?php echo e($princing->creditos); ?></h2>
                                                        <p class="uppercase"><?php echo e(_i('Crédito')); ?></p>
                                                    </div>
                                                    <div class="price-table-content">
                                                        <div class="price-row"><h4>US$ <?php echo e(number_format($princing->costo,0,'','.')); ?></h4></div>
                                                        <div class="price-row"><i class="fas fa-piggy-bank"></i> <?php echo e(_i('Ud. Ahorra')); ?> <h4><?php echo e(number_format($princing->ahorro,0,'','.')); ?></h4></div>
                                                        <div class="price-row"><?php echo e(_i('Precio por')); ?> <br><?php echo e(_i('Crédito')); ?> <h4>US$ <?php echo e(number_format($princing->precioxc,2,',','.')); ?></h4></div>
                                                        <div class="price-row">
                                                            <a href="<?php echo e(route('payment', $princing->id)); ?>" class="btn btn-warning">
                                                                <?php echo e(_i('Comprar')); ?> <i class="fab fa-cc-paypal fa-2x"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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