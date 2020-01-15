<?php $__env->startSection('content'); ?>
	<?php if(session('error')): ?>
	    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	        <strong><?php echo e(session('error')); ?></strong>
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	<?php endif; ?>
	<div class="container confirm-page my-4 px-5">
		<div class="py-5 px-5 form-content">
			<div class="third-part row">
				<div class="col col-5 d-none d-sm-block img-section">
					<img class="w-75 mb-0 mt-5" src="<?php echo e(asset('/images/giftcard/banner.svg')); ?>">
				</div>
				<div class="col px-sm-5">
					<h3 class="text-center">Información de pago</h3>
					<div class="text-center">
						<p class="mt-5">Serás redirigido a PayPal para finalizar la compra</p>
						<form action="<?php echo e(route('giftcards.confirm-buy', ['id' => substr(URL::full(), strpos(URL::full(), '=') + 1)])); ?>" method="post">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PUT')); ?>

					 		
							<button type="submit" class="btn btn-paypal">
								<strong>Confirmar con </strong>
								<img src="<?php echo e(asset('/images/giftcard/PayPal.png')); ?>">
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>