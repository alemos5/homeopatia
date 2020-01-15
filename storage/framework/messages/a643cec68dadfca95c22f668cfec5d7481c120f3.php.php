<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
    <tr>
        <th>Idmatmed</th>
        <th>Id Cremedios</th>
        <th>Col C</th>
        <th>Col D</th>
        <th>Col E</th>
        <th>Pregnancia</th>
        <th>Nombre</th>
        <th>Tipoclasico</th>
        <th>Tipopolicresto</th>
        <th>Tipoavanzado</th>
        <th>Tiporemedioclave</th>
        <th>Puros</th>
        <th>Secuencia</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $remedios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $remedios->idMatMed; ?></td>
            <td><?php echo $remedios->id_cremedios; ?></td>
            <td><?php echo $remedios->col_c; ?></td>
            <td><?php echo $remedios->col_d; ?></td>
            <td><?php echo $remedios->col_e; ?></td>
            <td><?php echo $remedios->pregnancia; ?></td>
            <td><?php echo $remedios->nombre; ?></td>
            <td><?php echo $remedios->tipoClasico; ?></td>
            <td><?php echo $remedios->tipoPolicresto; ?></td>
            <td><?php echo $remedios->tipoAvanzado; ?></td>
            <td><?php echo $remedios->tipoRemedioClave; ?></td>
            <td><?php echo $remedios->puros; ?></td>
            <td><?php echo $remedios->secuencia; ?></td>
            <td style="width: 10em !important;">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('remedios.show')): ?>
                    <a href="<?php echo e(route('remedios.show', $remedios->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('remedios.edit')): ?>
                    <a href="<?php echo e(route('remedios.edit', $remedios->id)); ?>" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('remedios.destroy')): ?>
                    <?php echo Form::open(['route' => ['remedios.destroy', $remedios->id], 'method' => 'delete','class' => 'd-inline']); ?>

                    <button class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <?php echo Form::close(); ?>

                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
