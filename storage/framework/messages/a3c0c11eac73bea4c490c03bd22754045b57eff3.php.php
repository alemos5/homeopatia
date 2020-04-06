<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', _i('Usuarios')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>"><?php echo e(_i('Inicio')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>"><?php echo e(_i('Usuarios')); ?></a></li>
    <li class="breadcrumb-item active"><?php echo e(_i('Detalle')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            <?php echo e(_i('Usuario')); ?># <b><?php echo e(str_pad($user->id_cliente, 6, '0', STR_PAD_LEFT)); ?></b>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                        <p><strong><?php echo e(_i('Code Cliente')); ?>:</strong> <?php echo e($user->code_cliente); ?></p>
                        <p><strong><?php echo e(_i('Nombre')); ?>:</strong> <?php echo e($user->nombre); ?></p>
                        <p><strong><?php echo e(_i('Email')); ?>:</strong> <?php echo e($user->email); ?></p>

                        <h4 class="mt-4"><?php echo e(_i('Lista de Roles')); ?></h4>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-check">
                                                <?php echo e(Form::checkbox('roles[]', $item->id, (in_array($item->id, $selected)? true : false), ['disabled' => 'disabled', 'id'=>$item->id])); ?>

                                                <label class="form-check-label" for="<?php echo e($item->id); ?>">
                                                    <?php echo e($item->name); ?> (<?php echo e($item->description ?: _i('Sin descripcion')); ?>)
                                                </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                <hr>
                <a href="<?php echo e(URL::previous()); ?>" class="btn btn-outline-success float-right"><?php echo e(_i('Regresar')); ?></a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>