<?php $__env->startSection('title', 'Detalles de la orden'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	    	<a href="<?php echo e(route('home')); ?>">Inicio</a>
	    </li>
	    <li class="breadcrumb-item">
	    	<a href="<?php echo e(route('orders.index')); ?>">
	    		<?php echo e((Auth::user()->role === 'admin') ? 'Ordenes' : 'Mis ordenes'); ?>

	    	</a>
	    </li>
	    <li class="breadcrumb-item active">Detalles de la orden</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="title-order">
			<div class="float-right">
				<?php if($giftcard->status === 'refund_process'): ?>
					<a href="<?php echo e(route('transfers.show', [$order->giftcard->transfer->id])); ?>" class="btn btn-primary">Ver transferencia</a>
				<?php endif; ?>
				<?php if($giftcard->status === 'refund_process' && Auth::user()->role === 'admin'): ?>
					<a href="<?php echo e(route('transfers.refund', [$order->giftcard->transfer->id])); ?>" class="btn btn-success">Reembolsar GiftCard</a>
				<?php endif; ?>
			</div>
			<p>Pedido N°: <?php echo e($order->code); ?> - <?php echo e(($order->status === 'completed' ? 'Completado' : 'Entregado')); ?></p>
		</div>
		<div class="order-information card-order py-2 px-2 my-5">
			<p>Acerca del pedido</p>
			<?php if($order->giftcard->transfer): ?>
				<div class="row">
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Titular</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->name_titular); ?>" readonly>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Cédula</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->dni); ?>" readonly>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Banco</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->bank); ?>" readonly>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Número de cuenta</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->bank_account); ?>" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<div class="form-group">
						    <label class="control-label">Monto GiftCard</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->amount . ' US$'); ?>" readonly>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
						    <label class="control-label">Tasa</label>
						    <input type="text" class="form-control" value="<?php echo e(number_format($order->giftcard->transfer->rate, 2, ',', '.') . ' Bs'); ?>" readonly>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Número de cuenta</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->bank_account); ?>" readonly>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
						    <label class="control-label">Comisión</label>
						    <input type="text" class="form-control" value="<?php echo e($order->giftcard->transfer->fees); ?>" readonly>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						    <label class="control-label">Total reembolsable</label>
						    <input type="text" class="form-control" value="<?php echo e(number_format($order->giftcard->transfer->total_reimbursable, 2, ',', '.') . ' Bs'); ?>" readonly>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 px-2">
				
			</div>
			<div class="col-12 col-sm-6 px-2">
				<div class="order-payment card-order py-2 px-2">
					<p class="title">Método de pago</p>
					<p>
						<?php if($giftcard->payment_method === 'paypal'): ?>
							PayPal
						<?php elseif($giftcard->payment_method === 'tdc'): ?>
							Tarjeta de crédito
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
		<p class="subtitle my-3">Artículos pedidos</p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Nombre del producto</th>
					<th scope="col">No. Ref</th>
					<th scope="col">Precio</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Sub-total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>GiftCard</td>
					<td><?php echo e($giftcard->code); ?></td>
					<td><?php echo e($giftcard->amount); ?></td>
					<td>1</td>
					<td><?php echo e($giftcard->amount); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">Subtotal</td>
					<td><?php echo e($giftcard->amount); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">PayPal Fees</td>
					<td><?php echo e($giftcard->amount * 0.05); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">Total</td>
					<td><?php echo e($giftcard->amount * 1.05); ?></td>
				</tr>
			</tbody>
		</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>