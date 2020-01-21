<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title><?php echo e(env('APP_NAME')); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/bootstrap.min.css')); ?>" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/icons.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/owl.carousel.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/main.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/color.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/web/responsive.css')); ?>" type="text/css">
</head>
<body>
    <main>
        <header class="stck">
            <div class="container">
                <div class="mnu-sc">
                    <?php echo $__env->make('web.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </header><!-- Header -->
        <div class="rpnsv-hdr">
            <?php echo $__env->make('web.partials.responsive-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!-- Responsive Header -->

        <section id="buscador">

            <?php echo $__env->make('web.partials.buscador', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </section>
        <section id="home">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <footer>
            <?php echo $__env->make('web.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>
    </main>

    <!-- Vendor: Javascripts -->
    <script src="<?php echo e(asset('js/web/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/web/bootstrap.min.js')); ?>" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="<?php echo e(asset('js/web/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/web/jquery.counterup.js')); ?>"></script>
    <script src="<?php echo e(asset('js/web/scroll-up-bar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/web/jquery.poptrox.min.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4XGd9qpQIEkbfL6QpR6qk2jQ9S9_5Uww"></script>
    <script src="<?php echo e(asset('js/web/main.js')); ?>"></script>
</body>
</html>