<h2>Análisis desplegado</h2>
<hr>
<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
    <tr>
        <th>ID</th>
        <th>Reino</th>
        <th>Medicamento</th>
        <th>RSM</th>
        <th>Consonantes</th>
        <th>Clave</th>
        <th>Secuencia</th>
        <th>Recetado</th>
    </tr>
    </thead> <?php  ?>
    <tbody>
    <?php $__currentLoopData = $remedios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remedio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($remedio->id); ?>

            </td>
            <td>
                
                    <?php
                    $dataReino = \App\Http\Controllers\EstudiosController::getImgReino($remedio->pregnancia);
                    //                    var_dump($dataReino);
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php echo e($dataReino['reino']); ?>

                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo e($dataReino['img']); ?>">
                        </div>
                    </div>

                
            </td>
            <td>
                <?php echo e($remedio->nombre); ?>

            </td>
            <td>
                <?php
                echo \App\Http\Controllers\EstudiosController::getRsm(
                    $remedio->id,
                    $data['iniciales'],
                    $data['dia'],
                    $data['mes'],
                    $data['anio'],
                    $data['nombre'],
                    $data['apellido']
                );
                ?>
            </td>

            <td>
                
                    <?php
                    if ($remedio->puros == 1) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>
                
            </td>
            <td>
                
                    <?php
                    if ($remedio->tipoRemedioClave == 1) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>
                
            </td>
            <td>
                
                    <?php
                    $secuencia = \App\Http\Controllers\EstudiosController::getSecuencia($remedio->id, $data['apodo']);
                    if ($secuencia) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>
                
            </td>
            <td>
                
                    <input type="checkbox" value="<?php echo e($remedio->id); ?>" name="check_<?php echo e($remedio->id); ?>" id="check_<?php echo e($remedio->id); ?>" class="js-switch"/>
                
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
