 

<!-- Header Area -->
    <header class="main_header_area">   
        <div class="searchForm">
            <form action="#" class="row">
                <div class="input-group">
                    <span class="input-group-addon"><i class="flaticon-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="flaticon-close"></i></span>
                </div>
            </form>
        </div>
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="<?php echo e(route('/')); ?>"><img src="<?php echo e(asset('front/images/logo-casillero-express.png')); ?>" alt="Logo Casillero Express USA"></a> 
            <!-- Small Divice Menu-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation"> 
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <!-- Right Nav bar -->
            <!-- Right Nav bar -->
            <ul class="right_nav">
                <li class="dropdown">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>" style="font-size: 12px"><i class="fas fa-user"></i> Ingresa</a> 
                </li>   
               <li><a href="#" class="theme_bt rastreo" data-toggle="modal" data-target="#favoritesModal" style="font-size: 12px"><i class="fas fa-search"></i></i> Rastrea</a></li>
                


            </ul> 
            <!-- Left Nav bar -->
            <div class="collapse navbar-collapse navbar_supported">
                <ul class="navbar-nav"> 
                    
                    <li>
                        <a class="nav-link dropdown-toggle <?php echo e((\Request::route()->getName() == 'somos') ? 'active' : ''); ?>" href="<?php echo e(action('SomosController@index')); ?>">Nosotros</a>
                    </li>
                    <li>
                        <a class="nav-link dropdown <?php echo e((\Request::route()->getName() == 'servicios') ? 'active' : ''); ?>" href="<?php echo e(route('servicios')); ?>">Servicios</a>
                    </li> 
                    <li>
                        <a class="nav-link dropdown-toggle <?php echo e((\Request::route()->getName() == 'calculadora') ? 'active' : ''); ?>" href="<?php echo e(route('calculadora')); ?>">Tarifas</a>
                    </li> 
                    <li>
                        <a class=" nav-link dropdown-toggle <?php echo e((\Request::route()->getName() == 'contacto') ? 'active' : ''); ?>" href="<?php echo e(route('contacto')); ?>">Contacto</a>
                    </li>  
                </ul>   
            </div>
        </nav>   
    </header>
    <!-- Header Area -->  

<?php echo $__env->make('front.includes.rastrear', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

