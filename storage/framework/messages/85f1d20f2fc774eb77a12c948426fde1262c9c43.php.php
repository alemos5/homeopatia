<?php $__env->startSection('title', 'Cambiar contraseña'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
        <li class="breadcrumb-item active">Cambiar contraseña</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('message')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="tab-pane" id="settings" role="tabpanel">
        <div class="card-body">
            <form class="form-horizontal form-material" action="<?php echo e(route('users.update-password', [$user->id])); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                <div class="form-group">
                    <label class="col-md-12">Contraseña</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" name="password">
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Actualizar contraseña</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>