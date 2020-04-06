<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
	    <li class="breadcrumb-item active">Usuarios</li>
	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">País</th>
                    <th class="text-center">Téléfono</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Rol</th>
                    <th class="th-options">Opciones</th>
                </tr>
            </thead>
            <tbody id="users">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                	<tr>
	                	<td><?php echo e($user->name); ?> <?php echo e($user->surname); ?></td>
	                	<td><?php echo e($user->country); ?>/<?php echo e($user->city); ?></td>
	                	<td><?php echo e($user->phone); ?></td>
	                	<td><?php echo e($user->email); ?></td>
	                	<th><?php echo e(($user->role == 'admin') ? 'Admin' : 'Usuario'); ?></th>
	                	<td class="d-flex"> 
	                		
	                		<span class="m-1">
	                			<a href="<?php echo e(route('users.show', [$user->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver giftcard">
	                				<i class="fa fa-eye" aria-hidden="true"></i>
	                			</a>
	                		</span>

							
	                		<span class="m-1">
	                			<a href="<?php echo e(route('users.change-password', [$user->id])); ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Ver giftcard">
	                				<i class="fa fa-key" aria-hidden="true"></i>
	                			</a>
	                		</span>

	                		
	                		<span class="m-1" data-target="#deleteModal<?php echo e($user->id); ?>" data-toggle="modal">
	                			<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar">
	                			    <i class="fa fa-trash" aria-hidden="true"></i>
	                			</a>
	                		</span>
	                		<?php echo $__env->make('admin.users.delete-modal', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	                	</td>
                	</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>