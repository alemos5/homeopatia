<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>
<?php $transaccion = ''; ?>
<style>
.ticket{
    width: 40%;

}
    @media  only screen and (max-width: 600px) {
        .ticket{
            width: 30%;
            padding: 15px;
        }
    }
</style>
<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>


    
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">

        <div class="col-lg-12">
                  
                <div class="card">  
                    <div class="card-body">
                         <h3>Pagos pendientes DHL</h3>
                         <br>
                         <?php if($pagos == '0'): ?>
                           <center><h4>No hay pagos pendientes</h4></center>
                         <?php else: ?>
                          <div class="table-responsive">
                            <table class="table color-table success-table">
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th># Transacción</th>
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                        <th>Estatus</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                         <?php $__currentLoopData = $pagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->id_transaccion != $transaccion): ?>
                                            <tr>
                                                <td><?php echo e($item->id_orden); ?></td>
                                                <td><?php echo e($item->id_transaccion); ?></td>
                                                <td><?php echo e($item->usd); ?> USD</td>
                                                <td><?php echo e($item->fecha); ?></td>
                                                <td><div style="font-size:16px; padding: 5px;" class="label label-table label-danger"><?php echo e($item->estatus); ?></div></td>
                                                <td><a class="btn btn-success" href="<?php echo e(route('checkout',$item->id_transaccion)); ?>">Pagar</a></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php $transaccion = $item->id_transaccion; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                         <?php endif; ?>
                         
                       
                    </div>
                </div>
            </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    
</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>