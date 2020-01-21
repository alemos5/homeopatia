<?php $__env->startSection('title', 'Cuentas bancarias'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item active">Cuentas bancarias</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Títular</th>
                    <th class="text-center">DNI</th>
                    <th class="text-center">Banco</th>
                    <th class="th-options">Opciones</th>
                </tr>
            </thead>
            <tbody id="accounts">
                <?php $__currentLoopData = $bankAccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                	<tr>
                        <td><?php echo e($account->name_titular); ?></td>
                        <td><?php echo e($account->dni); ?></td>
	                	<td><?php echo e($account->bank); ?></td>
	                	<td class="d-flex">
	                		
	                		<span class="m-1">
                                <a href="<?php echo e(route('bank-accounts.show', [$account->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver cuenta">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </span>

                            
                            <span class="m-1">
                                <a href="<?php echo e(route('bank-accounts.edit', [$account->id])); ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </span>

	                		
	                		<span class="m-1" data-target="#deleteModal<?php echo e($account->id); ?>" data-toggle="modal">
	                			<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar cuenta">
	                			    <i class="fa fa-ban" aria-hidden="true"></i>
	                			</a>
	                		</span>
	                		<?php echo $__env->make('admin.bank_accounts.delete-modal', ['account' => $account], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	                	</td>
                	</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>