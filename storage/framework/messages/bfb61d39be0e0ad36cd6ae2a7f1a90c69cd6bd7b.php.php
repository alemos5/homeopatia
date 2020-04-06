<h2>
    <?php echo e(_i('Análisis Combinado')); ?>

    <button class="btn btn-success" type="button" id="btnVerAnalisisC"><?php echo e(_i('Mostrar')); ?></button>
</h2>
<hr>

<div class="row mt-4">
    <div class="col-sm-2" align="center"><?php echo e(_i('Variables consideradas para el Análisis Combinado')); ?>:</div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnRMS1" type="button"><?php echo e(_i('RSM')); ?></button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnImpregnancia1" type="button"><?php echo e(_i('Impregnancia')); ?></button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnSecuencia1" type="button"><?php echo e(_i('Secuencia')); ?></button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnConsonante1" type="button"><?php echo e(_i('Consonante')); ?></button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnClave1" type="button"><?php echo e(_i('Claves')); ?></button>
    </div>
</div>

<div class="row" id="cuadroAnalisisC">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-sm ml-3 mt-3" id="data-table-analisis-combinado">
        <thead style="background-color: #818181; color: #FFF">
            <tr>
                <th>&nbsp;</th>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th style="text-align: center !important;"><?php echo e($AnalisisCombinado['remedio']); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    </div>
</div>
