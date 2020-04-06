<?php $__env->startSection('title', 'Mis ordenes'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item active">Mis ordenes</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Pedido</th>
                    <?php if(Auth::user()->role == 'admin'): ?>
                        <th class="text-center">Usuario</th>
                    <?php endif; ?>
                    <th class="text-center">Código de GiftCard</th>
                    <th class="text-center">Total de pedido</th>
                    <th class="text-center">ID transacción</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center">Fecha</th>
                    <th class="th-options">Opciones</th>
                </tr>
            </thead>
            <tbody id="orders">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                	<tr>
                        <td><?php echo e($order->code); ?></td>
                        <?php if(Auth::user()->role == 'admin'): ?>
                            <td><?php echo e($order->user->name . ' ' . $order->user->surname); ?></td>
                        <?php endif; ?>
                        <td>
                        <?php if($order->giftcard): ?> 
                        <?php echo e($order->giftcard->code); ?>

                        <?php endif; ?> 
                        </td>
	                	<td><?php echo e($order->total_order); ?></td>
                        <td><?php echo e($order->transaction_id); ?></td>
	                	<td>
                            <?php if($order->status === 'completed'): ?>
                                Completado
                            <?php else: ?>
                                Entregado
                            <?php endif; ?>
                        </td>
                        <td><?php echo e(date('d-m-Y', strtotime($order->created_at))); ?></td>
	                	<td class="d-flex">
	                		
	                		<span class="m-1">
                                <a href="<?php echo e(route('orders.show', [$order->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver pedido">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </span>

	                		<?php if(Auth::user()->role === 'admin'): ?>
                                
                                <span class="m-1" data-target="#deliverModal<?php echo e($order->id); ?>" data-toggle="modal">
                                    <a href="#" class="btn btn-<?php echo e(($order->status == 'delivered') ? 'danger' : 'primary'); ?> btn-sm" data-toggle="tooltip" data-placement="top" title="Marcar como <?php echo e(($order->status == 'delivered') ? 'cancelado' : 'entregado'); ?>">
                                        <i class="fa fa-<?php echo e(($order->status == 'delivered') ? 'times' : 'check'); ?>" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <?php echo $__env->make('admin.orders.deliver-modal', ['order' => $order], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endif; ?>
    
                            <?php if(Auth::user()->role == 'admin'): ?>
                                
                                <span class="m-1" data-target="#deleteModal<?php echo e($order->id); ?>" data-toggle="modal">
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar pedido">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <?php echo $__env->make('admin.orders.delete-modal', ['order' => $order], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endif; ?>
	                	</td>
                	</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>