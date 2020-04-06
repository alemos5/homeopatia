<?php $__env->startSection('title', 'Reembolsar transferencia'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo e(route('transfers.index')); ?>">Transferencias</a></li>
	    <li class="breadcrumb-item active">Reembolsar la transferencia</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="horizontal-form">
		<div class="row">
			<div class="col-6 row">
				<div class="col-6">
					<div class="form-group">
					    <label class="control-label">Nombre del titular</label>
					    <input type="text" class="form-control" value="<?php echo e($transfer->name_titular); ?>" readonly>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
					    <label class="control-label">Cédula de identidad</label>
					    <input type="text" class="form-control" value="<?php echo e($transfer->dni); ?>" readonly>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
					    <label class="control-label">Entidad bancaria</label>
					    <input type="text" class="form-control" value="<?php echo e($transfer->bank); ?>" readonly>
					</div>
				</div>
				<div class="col-6">
				    <div class="form-group">
				        <label class="control-label">Total reembolsable (Bs)</label>
				        <input type="text" class="form-control" name="total_reimbursable" value="<?php echo e(number_format($transfer->total_reimbursable, 2, ',', '.')); ?>" readonly>
				    </div>
				</div>
				<div class="col-6">
					<div class="form-group">
					    <label class="control-label">Número de cuenta</label>
					    <input type="text" class="form-control" value="<?php echo e($transfer->bank_account); ?>" readonly>
					</div>
				</div>
				<div class="col-6">
				    <div class="form-group">
				        <label class="control-label">Correo electrónico</label>
				        <input type="text" class="form-control" name="total_reimbursable" value="<?php echo e($transfer->user->email); ?>" readonly>
				    </div>
				</div>
			</div>
			<div class="col-6">
				<form action="<?php echo e(route('transfers.save-refund', [$transfer->id])); ?>" method="post" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('PUT')); ?>

					<div class="form-group">
						<label for="capture">Subir captura de pantalla</label>
						<input type="file" class="form-control-file<?php echo e($errors->has('capture') ? ' is-invalid' : ''); ?>" name="capture" accept="image/" required>
						<?php if($errors->has('capture')): ?>
						    <span class="invalid-feedback">
						        <strong><?php echo e($errors->first('capture')); ?></strong>
						    </span>
						<?php endif; ?>
					</div>

					<button type="submit" class="btn btn-primary">Reembolsar transferencia</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>