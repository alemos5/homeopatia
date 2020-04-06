<div class="table-responsive">
    <table class="table" id="estudiosRemedios-table">
        <thead>
            <tr>
                <th>Estudio Id</th>
        <th>Medicamento</th>
        <th>Medicamento Id</th>
        <th>Sac</th>
        <th>Reino</th>
        <th>Clave</th>
        <th>Nota</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $estudiosRemedios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiosRemedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($estudiosRemedios->estudio_id); ?></td>
            <td><?php echo e($estudiosRemedios->medicamento); ?></td>
            <td><?php echo e($estudiosRemedios->medicamento_id); ?></td>
            <td><?php echo e($estudiosRemedios->sac); ?></td>
            <td><?php echo e($estudiosRemedios->reino); ?></td>
            <td><?php echo e($estudiosRemedios->clave); ?></td>
            <td><?php echo e($estudiosRemedios->nota); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['estudiosRemedios.destroy', $estudiosRemedios->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('estudiosRemedios.show', [$estudiosRemedios->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('estudiosRemedios.edit', [$estudiosRemedios->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
