<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>



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

    <?php if(Auth::user()->customer_stripe): ?>

    <h4>Ya tienes tus pagos automaticos configurados.</h4>

    <form action="/cobro" method="POST">

        <?php echo e(csrf_field()); ?>


        <br>

        <button type="submit" class="btn btn-success">Cobrar</button>

    </form>

    <?php else: ?>

    <h3>Configuración pago automatico</h3>

    
     <p style="max-width: 800px; margin-top: 10px; margin-bottom: 20px"><i class="fa fa-credit-card"></i><b> Ten presente</b> qué con el objetivo de guardar tu información para futuros cobros automáticos, recibirás en tu próxima factura un cobro de 0.05$ por el proceso</p>
     
    <form action="/pago" method="POST">

    <form action="/pago" method="POST">

        <?php echo e(csrf_field()); ?>


        <script

            src="https://checkout.stripe.com/checkout.js" class="stripe-button"

            data-key="<?php echo e(config('services.stripe.key')); ?>"

            data-amount="0.50"

            data-name="Compra"

            data-description="configuración de pago"

            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"

            data-locale="auto">

        </script>

    </form>

    <?php endif; ?>



    <?php if($historial): ?>

        <h3>Historial de Facturación</h3>

        <div class="col-lg-6">

                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table color-table success-table">

                                <thead>

                                    <tr>

                                        <th>Monto</th>

                                        <th>Metodo</th>

                                        <th>Fecha</th>

                                        <th>Descripción</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    

                                        <?php $__currentLoopData = $historial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td><?php echo e($item->monto); ?>$</td>

                                            <td><?php echo e($item->metodo); ?></td>

                                            <td><?php echo e($item->fecha); ?></td>

                                            <td><?php echo e($item->descripcion); ?></td>

                                        </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                     

                                   

                                 

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

       

    <?php endif; ?>





  

</div>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

<script>

    

</script>

<?php $__env->stopSection(); ?>










<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>