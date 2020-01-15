<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('nombre_modulo', 'Roles'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home-one')); ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('roles.index')); ?>">Roles</a></li>
    <li class="breadcrumb-item active">Detalle</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Roles# <b><?php echo e(str_pad($role->id, 6, '0', STR_PAD_LEFT)); ?></b>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <p><strong>Nombre:</strong> <?php echo e($role->name); ?></p>
                <p><strong>Slug:</strong> <?php echo e($role->slug); ?></p>
                <p><strong>Descripcion:</strong> <?php echo e($role->description); ?></p>

                <h4 class="mt-4">Permiso Especial</h4>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input name="special" type="radio" class="with-gap" id="all-access" value="all-access" <?php echo e(old('special', $role->special) == 'all-access' ? 'checked="checked"' : ''); ?> disabled>
                        <label for="all-access">Acceso Total</label>

                        <input name="special" type="radio" class="with-gap" id="no-access" value="no-access" <?php echo e(old('special', $role->special) == 'no-access' ? 'checked="checked"' : ''); ?> disabled>
                        <label for="no-access">Ningún Acceso</label>
                    </div>
                </div>

                <h4 class="mt'4">Lista de Permisos</h4>
                <div class="form-group">
                    <div class="col-sm-10">
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check">
                                <?php echo e(Form::checkbox('permissions[]', $item->id, (in_array($item->id, $selected)? true : false), ['disabled' => 'disabled', 'id'=>$item->id])); ?>

                                <label class="form-check-label" for="<?php echo e($item->id); ?>">
                                    <?php echo e($item->name); ?> (<?php echo e($item->description ?: 'Sin descripción'); ?>)
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