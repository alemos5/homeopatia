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
                         <h3>Pagos pendientes de facturas</h3>
                         <br>
                         <?php if($facturaOrdenes == '0'): ?>
                           <center><h4>No hay pagos pendientes</h4></center>
                         <?php else: ?>
                          <div class="table-responsive">
                            <table class="table color-table success-table">
                                <thead>
                                    <tr>
                                        <th>Factura</th>
                                        <th>Ordenes</th>
                                        <th>Pagar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php $__currentLoopData = $facturaOrdenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->codigo); ?></td>
                                            <td>
                                                <?php
                                                    $details = \App\Http\Controllers\HomeController::getDetailFactura($item->id_factura_orden);
                                                    if(isset($details)){
                                                        foreach ($details as $order){
                                                            if(isset($order)){
                                                                echo $order['ware_reciept']." / ".$order['descripcion']."<br>";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <center>
                                                    <a target="_blank" href="https://efectylogistic.com/logistico/facturaOrden/<?php echo e($item->id_factura_orden); ?>"> Pagar</a>
                                                </center>
                                            </td>
                                        </tr>
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