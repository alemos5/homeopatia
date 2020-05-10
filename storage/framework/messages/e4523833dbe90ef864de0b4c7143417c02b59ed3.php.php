<table style="" id="data-table" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th style="width: 33%">Cliente</th>
            <th style="width: 33%">Correo</th>
            <th style="width: 33%">Cantidad</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $creditos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientesCreditos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $cliente = \App\Http\Controllers\UserController::getClient($clientesCreditos->cliente_id) ?>
        <tr>
        <td><?php echo e($cliente->nombre); ?></td>
        <td><?php echo e($cliente->email); ?></td>
        <td><?php echo e($clientesCreditos->cantidad); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
