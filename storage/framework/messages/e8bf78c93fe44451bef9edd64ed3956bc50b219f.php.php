<table style="width: 100%; font-size: 14px;" id="data-table-2" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
    <tr>
        <th><?php echo e(_i('Tipo')); ?></th>
        <th><?php echo e(_i('Nombre/Especie')); ?></th>
        <th><?php echo e(_i('Apellido/Dueño')); ?></th>
        <th><?php echo e(_i('Identifica/Animal')); ?></th>
        <th><?php echo e(_i('Iniciales')); ?></th>
        <th><?php echo e(_i('Dia')); ?></th>
        <th><?php echo e(_i('Mes')); ?></th>
        <th><?php echo e(_i('Año')); ?></th>
        <th><?php echo e(_i('Pais')); ?></th>
        <th style="width: auto"><?php echo e(_i('Acciones')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $estudios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <?php if($estudio->tipo=='humano'): ?>
                <td><?php echo strtoupper($estudio->tipo); ?></td>
                <td><?php echo $estudio->h_nombre; ?></td>
                <td><?php echo $estudio->h_apellido; ?></td>
                <td><?php echo $estudio->h_identifica; ?></td>
                <td><?php echo $estudio->h_iniciales; ?></td>
                <td><?php echo $estudio->h_dia; ?></td>
                <td><?php echo $estudio->h_mes; ?></td>
                <td><?php echo $estudio->h_anio; ?></td>
                <td><?php if(isset($estudio->pais)): ?><?php echo $estudio->pais->name; ?><?php endif; ?></td>
            <?php else: ?>
                <td><?php echo strtoupper($estudio->tipo); ?></td>
                <td><?php echo $estudio->a_especie; ?></td>
                <td><?php echo $estudio->a_duenio; ?></td>
                <td><?php echo $estudio->a_animal; ?></td>
                <td><?php echo $estudio->a_iniciales; ?></td>
                <td><?php echo $estudio->a_dia; ?></td>
                <td><?php echo $estudio->a_mes; ?></td>
                <td><?php echo $estudio->a_anio; ?></td>
                <td>&nbsp;</td>
            <?php endif; ?>
            <td style="width: 10em !important;">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.show')): ?>
                    <a href="<?php echo e(route('estudios.show', $estudio->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.edit')): ?>
                    <a href="<?php echo e(route('estudios.edit', $estudio->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.destroy')): ?>
                    <?php echo Form::open(['route' => ['estudios.destroy', $estudio->id], 'method' => 'delete','class' => 'd-inline']); ?>

                    <button class="btn btn-outline-success btn-round btn-sm" onclick="return confirm('<?php echo e(_i('¿Realmente desea eliminar el elemento seleccionado?')); ?>')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <?php echo Form::close(); ?>

                <?php endif; ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

