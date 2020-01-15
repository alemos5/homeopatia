<?php $__env->startSection('title', 'Detalles de Combo'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo e(route('giftcards.index')); ?>">GiftCards</a></li>
	    <li class="breadcrumb-item active">Detalles del combo</li>
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
    <div class="horizontal-form">
        <form action="#" class="form-horizontal">
            <h3>Datos de pago</h3>
            <div class="row">

            	<div class="col-4">
            		<div class="form-group">
            		    <label class="control-label">Monto: </label>
            		    <input type="text" class="form-control" value="<?php echo e($giftcard->amount); ?>" readonly>
            		</div>
            	</div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="control-label">Fecha de creación</label>
                        <input type="text" class="form-control" value="<?php echo e(date('d-m-Y', strtotime($giftcard->created_at))); ?>" readonly>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="control-label">Estatus</label>
                        <input type="text" class="form-control" readonly 
                            value="<?php switch($giftcard->status): case ('active'): ?> Activa <?php break; ?> <?php case ('deactivated'): ?> Desactivada <?php break; ?> <?php case ('refund_process'): ?> Proceso de reembolso <?php break; ?> <?php case ('refunded'): ?> Reembolsado <?php break; ?> <?php case ('pending'): ?> No pagada <?php break; ?> <?php endswitch; ?>">
                    </div>
                </div>
            </div>
              <h3>Datos de envio</h3>
            <div class="row">
              
            	<div class="col-4">
                    <div class="form-group">
                        <label class="control-label">Nombre: </label>
                        <input type="text" class="form-control" value="<?php echo e($direccion->nombre); ?>" readonly>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input type="text" class="form-control" value="<?php echo e($direccion->telefono); ?>" readonly>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="control-label">Dirección</label>
                        <input type="text" class="form-control" value="<?php echo e($direccion->direccion); ?>" readonly>
                    </div>
                </div>
            </div>
        </form>

        <?php if(Auth::user()->role == 'user' && $giftcard->status != 'refund_process'): ?>
            <?php if($giftcard->user->bankAccounts->count()): ?>
                <span data-target="#bankAccountsModal<?php echo e($giftcard->id); ?>" data-toggle="modal">
                      <a href="#" class="btn btn-primary btn-sm">
                            Reembolsar GiftCard
                      </a>
                </span>
                <?php echo $__env->make('admin.giftcards.bank-accounts-modal', ['user' => $giftcard->user], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?>
                <a href="<?php echo e(route('giftcards.refund', [$giftcard->id])); ?>" class="btn btn-primary btn-sm">
                      Reembolsar GiftCard
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>