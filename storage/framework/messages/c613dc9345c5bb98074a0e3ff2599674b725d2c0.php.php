<div class="table-responsive">
    <table class="table" id="clientesCreditos-table">
        <thead>
            <tr>
                <th>Cliente Id</th>
        <th>Pricing Id</th>
        <th>Cantidad</th>
        <th>Tipo</th>
        <th>Costo</th>
        <th>Fecha</th>
        <th>Operacion</th>
        <th>Json</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $clientesCreditos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientesCreditos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($clientesCreditos->cliente_id); ?></td>
            <td><?php echo e($clientesCreditos->pricing_id); ?></td>
            <td><?php echo e($clientesCreditos->cantidad); ?></td>
            <td><?php echo e($clientesCreditos->tipo); ?></td>
            <td><?php echo e($clientesCreditos->costo); ?></td>
            <td><?php echo e($clientesCreditos->fecha); ?></td>
            <td><?php echo e($clientesCreditos->operacion); ?></td>
            <td><?php echo e($clientesCreditos->json); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['clientesCreditos.destroy', $clientesCreditos->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('clientesCreditos.show', [$clientesCreditos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('clientesCreditos.edit', [$clientesCreditos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
