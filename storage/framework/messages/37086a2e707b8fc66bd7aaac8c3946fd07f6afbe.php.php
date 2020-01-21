<?php $__env->startSection('title', 'GiftCard de regalo'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo e(route('giftcards.index')); ?>">GiftCards</a></li>
	    <li class="breadcrumb-item active">Giftcard de regalo</li>
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
    <div class=form">
        <form action="<?php echo e(route('giftcards.save-referred')); ?>" class="form" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

    		<div class="form-group">
    		    <label class="control-label">Código de Giftcard: </label>
    		    <input type="text" class="form-control" name="referred_code" required>
    		</div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>