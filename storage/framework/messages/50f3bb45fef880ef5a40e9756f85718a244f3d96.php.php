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
        <form action="#" class="form-horizontal">
      	<div class="form-group">
      	    <label class="control-label">Nombre del titular</label>
      	    <input type="text" class="form-control" value="<?php echo e($bankAccount->name_titular); ?>" readonly>
      	</div>
      	<div class="form-group">
      	    <label class="control-label">Cédula de identidad</label>
      	    <input type="text" class="form-control" value="<?php echo e($bankAccount->dni); ?>" readonly>
      	</div>
      	<div class="form-group">
      	    <label class="control-label">Entidad bancaria</label>
      	    <input type="text" class="form-control" value="<?php echo e($bankAccount->bank); ?>" readonly>
      	</div>
      	<div class="form-group">
      	    <label class="control-label">Cuenta bancaria</label>
      	    <input type="text" class="form-control" value="<?php echo e($bankAccount->bank_account); ?>" readonly>
      	</div>
        </form>
    </div>            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>