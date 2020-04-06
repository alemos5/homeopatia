<!DOCTYPE html>
<html lang="es">
<head>

    <?php echo $__env->make('front.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body>
   

<?php echo $__env->make('front.includes.menu-front', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
 

<?php echo $__env->make('front.parts-front.somos-front', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('front.parts-front.contactenos-home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    

<?php echo $__env->make('front.includes.footer-top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('front.includes.bottom-footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

</body>
</html>