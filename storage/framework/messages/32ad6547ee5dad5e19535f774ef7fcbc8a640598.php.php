<div class="user-profile" style="background: url(<?php echo e(asset('vendor/wrappixel/material-pro/4.2.1/assets/images/userbg.png')); ?>) no-repeat;">
    <!-- User profile image -->
    <div class="profile-img">
        <?php if(Auth::user()->avatar): ?>
            <img src="<?php echo e(Auth::user()->avatar); ?>" alt="user"/>
        <?php else: ?>
            <img src="/vendor/wrappixel/material-pro/4.2.1/assets/images/users/1.jpg" alt="user"/>
        <?php endif; ?>
    </div>
    <!-- User profile text-->
    <div class="profile-text">

        <a href="#" class="dropdown-toggle u-dropdown popopUserProfile" onclick="return false">
            <?php echo e(Auth::user()->nombre); ?>

        </a>

        <div class="dropdown-menu animated flipInY" id="popopUserProfile">

           

           
            <a href="/perfil" class="dropdown-item"><i class="fa fa-user"></i> <?php echo e(_i('Perfil')); ?></a>
            <a href="/logout" class="dropdown-item"><i class="fa fa-power-off"></i> <?php echo e(_i('Cerrar sesión')); ?></a>

        </div>
    </div>
</div>