<?php $__env->startSection('rate'); ?>
	<?php echo $__env->make('admin.partials.form-rate', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
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
	<?php if(Auth::user()->role === 'user'): ?>
		<?php echo $__env->make('admin.partials.home-user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php else: ?>
		
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>