<table style="" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th style="width: 20%">Cliente</th>
            <th style="width: 20%">Correo</th>
            <th style="width: 20%">Cantidad</th>
            <th style="width: 20%">Última fecha de registro</th>
            <th style="width: 20%">Acción</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $creditos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientesCreditos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($clientesCreditos->cliente->nombre); ?></td>
        <td><?php echo e($clientesCreditos->cliente->email); ?></td>
        <td><?php echo e($clientesCreditos->cantidad); ?></td>
        <td><?php echo e($clientesCreditos->fecha); ?></td>
        <td>
            <a href="<?php echo e(route('clientesCreditos.edit', $clientesCreditos->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
