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
            <th style="width: auto">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $cremedios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cremedios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $cremedios->idMatMed; ?></td>
            <td><?php echo $cremedios->id_cremedios; ?></td>
            <td><?php echo $cremedios->col_c; ?></td>
            <td><?php echo $cremedios->col_d; ?></td>
            <td><?php echo $cremedios->col_e; ?></td>
            <td><?php echo $cremedios->pregnancia; ?></td>
            <td><?php echo $cremedios->nombre; ?></td>
            <td><?php echo $cremedios->tipoClasico; ?></td>
            <td><?php echo $cremedios->tipoPolicresto; ?></td>
            <td><?php echo $cremedios->tipoAvanzado; ?></td>
            <td><?php echo $cremedios->tipoRemedioClave; ?></td>
            <td><?php echo $cremedios->puros; ?></td>
            <td><?php echo $cremedios->secuencia; ?></td>
            <td>
                <center>
                <?php echo Form::open(['route' => ['cremedios.destroy', $cremedios->id], 'method' => 'delete']); ?>

                <a href="">
                    <a href="<?php echo route('cremedios.show', [$cremedios->id]); ?>" >
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="<?php echo route('cremedios.edit', [$cremedios->id]); ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('¿Realmente desea eliminar el elemento seleccionado?')">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                </a>
                <?php echo Form::close(); ?>

                </center>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
