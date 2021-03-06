
<h2><?php echo e(_i('Análisis Principal')); ?></h2>
<hr>

<div class="row">
    <div class="col-sm-2"><?php echo e(_i('Ordenar')); ?>:</div>
    <div class="col-sm-4">
        <div class="switch">
            <label for="orden1">
                <?php echo e(_i('Por SAC')); ?>

                <input type="checkbox" name="orden1" id="orden1" value="1" class="ordenar">
                <span class="lever"></span>
            </label>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="switch">
            <label for="orden2">
                <?php echo e(_i('Alfabeticamente')); ?>

                <input type="checkbox" name="orden2" id="orden2" value="1" checked class="ordenar">
                <span class="lever"></span>
            </label>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="switch">
            <label for="orden3">
                <?php echo e(_i('Por Reino')); ?>

                <input type="checkbox" name="orden3" id="orden3" value="1" class="ordenar">
                <span class="lever"></span>
            </label>
        </div>
    </div>
</div>

<div class="row mt-4">

    <div class="col-sm-12">
        <div class="table-responsive">
            <table id="cuadro" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead style="background-color: #818181; color: #FFF">
                <tr>
                    <th class="text-center"><?php echo e(_i('Reino')); ?></th>
                    <th class="text-center"><?php echo e(_i('Medicamento')); ?></th>
                    <th style="display:none;" class="text-center"><?php echo e(_i('Pregnancia')); ?></th>
                    <th class="text-center"><?php echo e(_i('SAC')); ?></th>
                    <th class="text-center"><?php echo e(_i('Claves')); ?></th>
                    <th class="text-center" style="width: 20em"><?php echo e(_i('Notas')); ?></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

</div>

