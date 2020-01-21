<?php $__env->startSection('layout-content'); ?>

    <div id="main-wrapper">
        <section id="wrapper" class="login-register login-sidebar" style="background-image:url(/vendor/wrappixel/material-pro/4.2.1/assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body" style="overflow-x: hidden; overflow-y:auto;">


                    <a href="javascript:void(0)" class="text-center db">
                        <img src="<?php echo e(asset('images/logo-web-casillero.jpg')); ?>" alt="Home" style="height: 15em"/>
                    </a>

                    <hr>
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success text-center">
                            <?php echo e(_i('A fresh verification link has been sent to your email address.')); ?>

                        </div>
                    <?php else: ?>
                        <div class="alert alert-info text-center">
                            <?php echo e(_i('Verifique su dirección de correo.')); ?>

                        </div>
                    <?php endif; ?>

                    <p class="text-center">
                        <?php echo e(_i('Before proceeding, please check your email for a verification link.')); ?>

                        <?php echo e(_i('If you did not receive the email')); ?>, <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(_i('click here to request another')); ?></a>.
                    </p>

                    <hr>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p><?php echo e(_i('¿Ya posees una cuenta verificada?')); ?> <a href="<?php echo e(route('logout')); ?>" class="text-info m-l-5"><b><?php echo e(_i('Inicia sesión')); ?></b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.application.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>