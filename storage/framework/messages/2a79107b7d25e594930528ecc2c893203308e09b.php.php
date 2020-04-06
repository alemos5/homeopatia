<?php $__env->startSection('title', 'Usuario'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
        <li class="breadcrumb-item active">Usuario</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="tab-pane" id="settings" role="tabpanel">
        <div class="card-body">
            <div class="form-horizontal form-material">
                <div class="form-group">
                    <label class="col-md-12">Nombre</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->name); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Apellido</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->surname); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">País</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->country); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Ciudad</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->city); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Dirección</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->address); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teléfono</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->phone); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->email); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>