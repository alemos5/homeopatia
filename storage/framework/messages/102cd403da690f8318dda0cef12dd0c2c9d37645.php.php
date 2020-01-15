<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
        <li class="breadcrumb-item active">Perfil</li>
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
            <form class="form-horizontal form-material" action="<?php echo e(route('users.update-profile')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label class="col-md-12">Nombre</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->name); ?>">
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Apellido</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->surname); ?>">
                        <?php if($errors->has('surname')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('surname')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">País</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->country); ?>">
                        <?php if($errors->has('country')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('country')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Ciudad</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->city); ?>">
                        <?php if($errors->has('city')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('city')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Dirección</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->address); ?>">
                        <?php if($errors->has('address')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('address')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teléfono</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->phone); ?>">
                        <?php if($errors->has('phone')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control form-control-line" value="<?php echo e($user->email); ?>">
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Contraseña</label>
                    <div class="col-md-12">
                        <input type="password" class="form-control form-control-line">
                        <?php if($errors->has('surname')): ?>
                            <span class="invalid-feedback">
                                <strong><?php echo e($errors->first('surname')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Actualizar perfil</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>