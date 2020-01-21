<div class="table-responsive">
    <table id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
        <thead>
            <tr>
            <th><?php echo e(_i('Nombre')); ?></th>
            <th><?php echo e(_i('Descripción')); ?></th>
            <th><?php echo e(_i('Imagen')); ?></th>
            <th colspan="3"><?php echo e(_i('Acción')); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $medicamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $medicamento->nombre; ?></td>
                <td><?php echo $medicamento->descripcion; ?></td>
                <td><?php echo $medicamento->image; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['medicamentos.destroy', $medicamento->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('medicamentos.show', [$medicamento->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('medicamentos.edit', [$medicamento->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm("._i('Are you sure?').")"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
