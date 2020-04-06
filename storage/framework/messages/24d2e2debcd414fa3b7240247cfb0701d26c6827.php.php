<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h1>Finalizando el pago</h1><br><br>
        <div class="row align-items-center">
        <div class="col-md-12 align-self-center">
            <h1></h1>
            <center>
            
                <?php if(session('error') || session('success')): ?>
                <img src="<?php echo e(asset('images/paypal.png')); ?>" alt="">
                <p class="<?php echo e(session('error') ? 'error':'success'); ?>">
                 <?php echo e(session('error') ?? session('success')); ?>

                </p>
                <?php else: ?>
                <center>
                <img width="30%" src="<?php echo e(asset('images/stripelogo.png')); ?>" alt="">
                <h3>Pago realizado con exito</h3>
                </center>
                <?php endif; ?>
               
            </center>
        </div>
    </div>
            
            
    </div>
</div>


     
   <script>
       function goBack() {
  window.history.back();
}
   </script>
  

<?php $__env->stopSection(); ?>








<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>