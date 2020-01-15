<!DOCTYPE html>
<html lang="<?php echo e(env('APP_LOCALE')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(env('APP_NAME')); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <?php echo $__env->make('admin.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <?php echo $__env->yieldContent('title'); ?>
                </div>
                <div class="d-flex">
                    <?php echo $__env->yieldContent('rate'); ?>
                </div>
                <div class="col-md-7 align-self-center">
                    <?php echo $__env->yieldContent('breadcrumb'); ?>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                © Todo los derechos reservados
                <a href="#">Giftcard reembolsable</a>
            </footer>
        </div>
    </div>
    
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</body>
</html>
