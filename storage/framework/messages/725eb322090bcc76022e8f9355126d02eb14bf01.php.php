
<span class="m-1" data-target="#changeStatus<?php echo e($giftcard->id); ?>" data-toggle="modal">
	<a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Cambiar estatus">
	    <i class="fa fa-refresh" aria-hidden="true"></i>
	</a>
</span>
<?php echo $__env->make('admin.giftcards.change-status-modal', ['giftcard' => $giftcard], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<span class="m-1" data-target="#deleteModal<?php echo e($giftcard->id); ?>" data-toggle="modal">
	<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar">
	    <i class="fa fa-trash" aria-hidden="true"></i>
	</a>
</span>
<?php echo $__env->make('admin.giftcards.delete-modal', ['giftcard' => $giftcard], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>