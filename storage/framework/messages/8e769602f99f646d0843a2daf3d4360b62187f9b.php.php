<?php if($giftcard->status === 'pending'): ?>
	<a href="<?php echo e(route('giftcards.payment-giftcard', [$giftcard->id])); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Realizar el pago">
		<i class="fa fa-upload" aria-hidden="true"></i>
	</a>
<?php endif; ?>