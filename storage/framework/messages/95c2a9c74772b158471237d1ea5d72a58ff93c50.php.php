<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th><?php echo e(_i('Id Usuario')); ?></th>
        <th><?php echo e(_i('Tipo')); ?></th>
        <th><?php echo e(_i('H Nombre')); ?></th>
        <th><?php echo e(_i('H Apellido')); ?></th>
        <th><?php echo e(_i('H Identifica')); ?></th>
        <th><?php echo e(_i('H Iniciales')); ?></th>
        <th><?php echo e(_i('H Dia')); ?></th>
        <th><?php echo e(_i('H Mes')); ?></th>
        <th><?php echo e(_i('H Anio')); ?></th>
        <th><?php echo e(_i('H Pais')); ?></th>
        <th><?php echo e(_i('A Especie')); ?></th>
        <th><?php echo e(_i('A Duenio')); ?></th>
        <th><?php echo e(_i('A Animal')); ?></th>
        <th><?php echo e(_i('A Iniciales')); ?></th>
        <th><?php echo e(_i('A Dia')); ?></th>
        <th><?php echo e(_i('A Mes')); ?></th>
        <th><?php echo e(_i('A Anio')); ?></th>
        <th><?php echo e(_i('Ip')); ?></th>
        <th><?php echo e(_i('User Agent')); ?></th>
        <th><?php echo e(_i('Fecha')); ?></th>
            <th style="width: auto">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $estudios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $estudios->id_usuario; ?></td>
            <td><?php echo $estudios->tipo; ?></td>
            <td><?php echo $estudios->h_nombre; ?></td>
            <td><?php echo $estudios->h_apellido; ?></td>
            <td><?php echo $estudios->h_identifica; ?></td>
            <td><?php echo $estudios->h_iniciales; ?></td>
            <td><?php echo $estudios->h_dia; ?></td>
            <td><?php echo $estudios->h_mes; ?></td>
            <td><?php echo $estudios->h_anio; ?></td>
            <td><?php echo $estudios->h_pais; ?></td>
            <td><?php echo $estudios->a_especie; ?></td>
            <td><?php echo $estudios->a_duenio; ?></td>
            <td><?php echo $estudios->a_animal; ?></td>
            <td><?php echo $estudios->a_iniciales; ?></td>
            <td><?php echo $estudios->a_dia; ?></td>
            <td><?php echo $estudios->a_mes; ?></td>
            <td><?php echo $estudios->a_anio; ?></td>
            <td><?php echo $estudios->ip; ?></td>
            <td><?php echo $estudios->user_agent; ?></td>
            <td><?php echo $estudios->fecha; ?></td>
            <td style="width: 10em !important;">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.show')): ?>
                    <a href="<?php echo e(route('estudios.show', $estudios->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.edit')): ?>
                    <a href="<?php echo e(route('estudios.edit', $estudios->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('estudios.destroy')): ?>
                    <?php echo Form::open(['route' => ['estudios.destroy', $estudios->id], 'method' => 'delete','class' => 'd-inline']); ?>

                    <button class="btn btn-outline-success btn-round btn-sm" onclick="return confirm(<?php echo e(_i('¿Realmente desea eliminar el elemento seleccionado?')); ?>)">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <?php echo Form::close(); ?>

                <?php endif; ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
