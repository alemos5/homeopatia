<?php $__env->startSection('jquery'); ?>  <?php $__env->stopSection(); ?>


<?php $__env->startPush('before-scripts'); ?>
    <script src="<?php echo e(mix('/js/home-one.js')); ?>"></script>


    
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->rol == 'admin'): ?>
    <iframe style="width:100%; height: 100vh; border:none;" src="https://chat.efectylogistic.com/administrator"></iframe>
<?php else: ?>
<iframe style="width:100%; height: 100vh; border:none;" src="https://chat.efectylogistic.com/client?email=<?php echo e(Auth::user()->email); ?>"></iframe>
<?php endif; ?>
        

<?php $__env->stopSection(); ?>







<?php echo $__env->make('templates.material.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>