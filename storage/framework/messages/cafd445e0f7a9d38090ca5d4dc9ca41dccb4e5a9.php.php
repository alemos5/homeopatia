<?php if($giftcard->status !== 'refund_process' && $giftcard->status === 'active'): ?>
	<?php if($giftcard->user->bankAccounts->count()): ?>
		<span data-target="#bankAccountsModal<?php echo e($giftcard->id); ?>" data-toggle="modal">
			<a href="#" class="btn btn-primary btn-sm">
				Reembolsar GiftCard
			</a>
		</span>
		<?php echo $__env->make('admin.giftcards.bank-accounts-modal', ['user' => $giftcard->user], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php elseif($giftcard->code[0] == 'C'): ?>
		<a href="<?php echo e(route('giftcards.direccion-agregar', [$giftcard->id])); ?>" class="btn btn-primary btn-sm">
			Datos de envio
		</a>
	<?php else: ?>
		<a href="<?php echo e(route('giftcards.refund', [$giftcard->id])); ?>" class="btn btn-primary btn-sm">
			Reembolsar GiftCard
		</a>
	<?php endif; ?>
<?php else: ?>
	<?php switch($giftcard->status):
        case ('deactivated'): ?>
            Desactivada
            <?php break; ?>
        <?php case ('refund_process'): ?>
            Proceso de reembolso
            <?php break; ?>
        <?php case ('refunded'): ?>
            Reembolsado
            <?php break; ?>
        <?php case ('send'): ?>
        Enviado
        <?php break; ?>
        <?php case ('pending'): ?>
            No pagada
            <?php break; ?>
	<?php endswitch; ?>
<?php endif; ?>