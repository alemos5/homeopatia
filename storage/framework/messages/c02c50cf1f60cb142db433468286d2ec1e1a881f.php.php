<?php
 $amount = intval($pagodhl->usd);
 $amount = $amount*100;
 $fecha = date("d-m-Y", strtotime($pagodhl->fecha));
?>



<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<style>
    .divmontop{
       padding: 5px;
       border: solid 1px #eee;
    }
    .montop{
        font-size: 17px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<input type="hidden" name="amountcop"  value="<?php echo e($pagodhl->usd); ?>" id="amountcop">
<div class="card">
    <div class="card-body">
       <div class="row">
            <div class="col-md-4 divmontop">
                <p><b>Resumen de pago</b></p><hr>
                <p class="montop"><b>Monto a pagar:</b> <?php echo e($pagodhl->usd); ?> USD</p>
                <p class="montop"><b>Concepto:</b> Envio de paquetes via DHL</p>
                <p class="montop"><b>Fecha:</b> <?php echo e($fecha); ?></p>
            </div>
             <div class="col-md-8 ">
                <p><b>Guias</b></p><hr>
                    <table class="table" style="font-size: 14px;">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Código</th>
                          <th>Tracking</th>
                          <th>Descripción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $peso = 0 ?>
                        <?php $__currentLoopData = $guias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($orden->ware_reciept); ?></td>
                          <td><?php echo e($orden->tracking); ?></td>
                          <td><?php echo e($orden->descripcion); ?></td>
                           <?php $peso = $peso + $orden->peso ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
             
                  
            </div>
        </div>
            <br>

         <?php $__currentLoopData = $promo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <?php if( $prom->promocions->peso <= $peso ): ?>
               <div>

                <h5>Pagar con promociones, tus promociones disponibles para este pago:</h5> 
                  <?php $__currentLoopData = $promo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h4 class="card-title text-center"><?php echo e($prom->promocions->promocion->nombre); ?></h4>
                          <p class="card-text">Libras: <?php echo e($prom->promocions->peso); ?><br>Costo:<?php echo e($prom->promocions->precio); ?></p>
                          <form action="<?php echo e(route('pagoenviopromo')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="promo" value="<?php echo e($prom->id); ?>">
                            <input type="hidden" value="<?php echo e($pagodhl->usd); ?>"  name="monto">
                            <input name="transaccion" type="hidden" value="<?php echo e(session('transaccion')); ?>">
                            <button class="btn btn-success"> Pagar ahora</button>
                          </form>
                        </div>
                      </div>

                      <span></span>
                      <span></span>
                     
                  </div>
                  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <?php break; ?>
            <?php endif; ?>
                      
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        <div class="row align-items-center">
        <div class="col-md-4 align-self-center">
            <center>
            <img src="<?php echo e(asset('images/paypal.png')); ?>" alt="" width="70%">
                <?php if(session('error') || session('success')): ?>
                <p class="<?php echo e(session('error') ? 'error':'success'); ?>">
                 <?php echo e(session('error') ?? session('success')); ?>

                </p>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('create-payment')); ?>">
                 <?php echo csrf_field(); ?>
                 <div class="m-2">
                 <input type="hidden" value="<?php echo e($pagodhl->usd); ?>" name="amount" placeholder="Amount">
                  <?php if($errors->has('amount')): ?>
                  <span class="error"> <?php echo e($errors->first('amount')); ?> </span>
                  <?php endif; ?>
                 </div>
                 <form action=""></form>
                 <button type="submit" class="btn btn-success" > Pagar con paypal</button>
                </form>
            </center>
        </div>
        <div class="col-md-4">
            <center>
                <img src="<?php echo e(asset('images/epayco.png')); ?>" width="70%" alt="">
                <button class="btn btn-success" onclick="handler.open(data)">Pagar con epayco</button>
            </center>
        </div>
        <div class="col-md-4">
                <img src="<?php echo e(asset('images/stripelogo.png')); ?>" width="70%" alt="">
             <form style="margin-top:20px;" action="/pagostripe/<?php echo e($amount); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?php echo e(config('services.stripe.key')); ?>"
                        data-amount="<?php echo e($amount); ?>"
                        data-name="Pagar con Stripe"
                        data-description="pago DHL"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto">
                    </script>
                </form>
        </div>
    </div>
            
            
    </div>
</div>


     
   
<script src="https://js.stripe.com/v3/"></script>
   <script type="text/javascript" src="https://checkout.epayco.co/checkout.js">   </script>
   <script>
        var handler = ePayco.checkout.configure({
                    key: '45b960805ced5c27ce34b1600b4b9f54',
                    test: true
                })
                
                var data={
            //Parametros compra (obligatorio)
            name: "Envio Paquete EfectyLogistics",
            description: "Pago de paquete",
            invoice: "1234",
            currency: "usd",
            amount: document.getElementById('amountcop').value,
            tax_base: "0",
            tax: "0",
            country: "co",
            lang: "es",
  
            //Onpage="false" - Standard="true"
            external: "false",
  
  
            //Atributos opcionales
            extra1: "extra1",
            extra2: "extra2",
            extra3: "extra3",

            confirmation: "<?php echo e(URL::to('/checkoutfinishe')); ?>",
            response: "<?php echo e(URL::to('/checkoutfinishe')); ?>",
  
            //Atributos cliente
            name_billing: "Andres Perez",
            address_billing: "Carrera 19 numero 14 91",
            type_doc_billing: "cc",
            mobilephone_billing: "3050000000",
            number_doc_billing: "100000000"
            }
   </script>
   
<?php $__env->stopSection(); ?>






<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>