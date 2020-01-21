<?php $__env->startSection('title', 'GiftCards'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	    	<a href="<?php echo e(route('home')); ?>">Inicio</a>
	    </li>
	    <li class="breadcrumb-item active" aria-current="page">GiftCards</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Vendedor</th>
                    <th class="text-center">Monto (USD)</th>
                    <th class="text-center">Código</th>
                    <th class="text-center">Método de pago</th>
                    <th class="text-center">Fecha</th>
                    <th class="th-status">Estatus</th>
                    <th class="th-options">Opciones</th>
                </tr>
            </thead>
            <tbody id="giftcards">
                <?php $__currentLoopData = $giftcards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giftcard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                	<tr>
	                	<td><?php echo e($giftcard->user->name . ' ' . $giftcard->user->surname); ?> </td>
	                	<td><?php echo e($giftcard->amount); ?></td>
	                	<td><?php echo e($giftcard->code); ?></td>
	                	<td>
	                		<?php if($giftcard->payment_method == 'paypal'): ?>
	                			PayPal
	                		<?php else: ?>
								TDC
	                		<?php endif; ?>
	                	</td>
	                	<td><?php echo e(date('d-m-Y', strtotime($giftcard->created_at))); ?></td>
	                	<td class="td-status">
	                		<?php if(Auth::user()->role === 'user'): ?>
	                			<?php echo $__env->make('admin.giftcards.partials.status-user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	                		<?php else: ?>
		                		<?php echo $__env->make('admin.giftcards.partials.status-admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		                	<?php endif; ?>
	                	</td>
	                	<td class="d-flex">
							
							<span class="m-1">
								<?php if($giftcard->code[0]=='C'): ?>
								<a href="<?php echo e(route('giftcards.combo.show', [$giftcard->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detalles de la GiftCard">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</a>
								<?php else: ?>
								<a href="<?php echo e(route('giftcards.show', [$giftcard->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detalles de la GiftCard">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</a>
								<?php endif; ?>
							</span>
							
							

	                		<?php if(Auth::user()->role === 'admin'): ?>
								<?php echo $__env->make('admin.giftcards.options.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	                		<?php endif; ?>
	                	</td>
                	</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>