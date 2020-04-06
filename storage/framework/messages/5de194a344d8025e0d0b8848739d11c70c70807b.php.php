



<?php if($transfer->status !== 'refunded'): ?>
	<span class="m-1">
		<a href="<?php echo e(route('transfers.refund', [$transfer->id])); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Reembolsar transferencia">
		    <i class="fa fa-check" aria-hidden="true"></i>
		</a>
	</span>
<?php endif; ?>


<span class="m-1" data-target="#changeStatus<?php echo e($transfer->id); ?>" data-toggle="modal">
    <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Cambiar estatus">
        <i class="fa fa-refresh" aria-hidden="true"></i>
    </a>
</span>
<?php echo $__env->make('admin.transfers.change-status-modal', ['transfer' => $transfer], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>