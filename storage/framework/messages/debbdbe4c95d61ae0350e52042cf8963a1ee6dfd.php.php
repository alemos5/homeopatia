<h2>
    <?php echo e(_i('Análisis Combinado')); ?>

    <button class="btn btn-success" type="button" id="btnVerAnalisisC"><?php echo e(_i('Mostrar')); ?></button>
</h2>
<hr>


    
    
        
    
    
        
    
    
        
    
    
        
    
    
        
    


<div class="row" id="cuadroAnalisisC" style="display: none">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-sm ml-3 mt-3" id="data-table-analisis-combinado">
        <thead class="thead-light">
            <tr>
                <th>&nbsp;</th>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th style="text-align: center !important;"><?php echo e($AnalisisCombinado['remedio']); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 5px #CCC solid;">
            <th><?php echo e(_i('Suma')); ?></th>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th style="text-align: center !important;"><?php echo e($AnalisisCombinado['suma']); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr id="divRSM">
                <td>RSM</td>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="text-align: center !important;"><?php echo e($AnalisisCombinado['rsm']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr id="divImpregnancia">
                <td>Impregnancia</td>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="text-align: center !important;"><?php echo e($AnalisisCombinado['Impregnancia']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr id="divSecuencia">
                <td>Secuencia</td>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="text-align: center !important;"><?php echo e($AnalisisCombinado['Secuencia']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr id="divConsonantes">
                <td>Consonantes</td>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="text-align: center !important;"><?php echo e($AnalisisCombinado['Consonantes']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            <tr id="divClaves">
                <td>Claves</td>
                <?php $__currentLoopData = $AnalisisCombinados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalisisCombinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="text-align: center !important;"><?php echo e($AnalisisCombinado['Claves']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </tbody>
    </table>
    </div>
</div>