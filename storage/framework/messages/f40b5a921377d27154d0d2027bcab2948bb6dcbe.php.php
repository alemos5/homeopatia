<?php $__env->startSection('title', 'Cuenta bancaria'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo e(route('bank-accounts.index')); ?>">Cuentas bancarias</a></li>
	    <li class="breadcrumb-item active">Cuenta bancaria</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="horizontal-form">
        <form action="<?php echo e(route('bank-accounts.update', [$bankAccount->id])); ?>" class="form-horizontal" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

          	<div class="form-group">
          	    <label class="control-label">Nombre del titular</label>
          	    <input type="text" class="form-control" name="name_titular" value="<?php echo e($bankAccount->name_titular); ?>">
          	</div>
          	<div class="form-group">
          	    <label class="control-label">Cédula de identidad</label>
          	    <input type="text" class="form-control" name="dni" value="<?php echo e($bankAccount->dni); ?>">
          	</div>
          	<div class="form-group">
          	    <label class="control-label">Entidad bancaria</label>
          	    <input type="text" class="form-control" name="bank" value="<?php echo e($bankAccount->bank); ?>">
          	</div>
          	<div class="form-group">
          	    <label class="control-label">Cuenta bancaria</label>
          	    <input type="text" class="form-control" name="bank_account" value="<?php echo e($bankAccount->bank_account); ?>">
          	</div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>