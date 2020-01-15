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
  <h1>Generador guias pdf</h1>
  <div class="card">
    <div class="card-body">
   		<a href="storage/<?php echo e($code); ?>.pdf">Descargar guia PDF</a>
    </div>
</div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>