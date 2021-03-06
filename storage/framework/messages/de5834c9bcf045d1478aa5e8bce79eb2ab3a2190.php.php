<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Escritorio">
    <a class="nav-link <?php echo e(Request::is('home') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('home')); ?>">
        <i class="fa fa-tachometer icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Escritorio</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Giftcards">
    <a class="nav-link <?php echo e(Request::is('giftcards') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('giftcards.index')); ?>">
        <i class="fa fa-gift icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Giftcards</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Combos">
    <a class="nav-link <?php echo e(Request::is('giftcards/combos') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('giftcards.combos')); ?>">
        <i class="fa fa-archive icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Combos</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transferencias">
    <a class="nav-link <?php echo e(Request::is('transfers') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('transfers.index')); ?>">
        <i class="fa fa-exchange icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Transferencias</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cuentas bancarias">
    <a class="nav-link <?php echo e(Request::is('bank-accounts') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('bank-accounts.index')); ?>">
        <i class="fa fa-university icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Cuentas bancarias</span>
    </a>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comprar GiftCard">
    <a class="nav-link" href="<?php echo e(route('giftcards.buy')); ?>">
        <i class="fa fa-shopping-cart icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Comprar GiftCard</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Añadir GiftCard">
    <a class="nav-link" href="<?php echo e(route('giftcards.referred-giftcard')); ?>">
        <i class="fa fa-plus-circle icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Añadir GiftCard</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis pedidos">
    <a class="nav-link <?php echo e(Request::is('orders') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('orders.index')); ?>">
        <i class="fa fa-shopping-bag icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Mis pedidos</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Perfil">
    <a class="nav-link <?php echo e(Request::is('users/profile') ? 'nav-link-active' : ''); ?>" href="<?php echo e(route('users.profile')); ?>">
        <i class="fa fa-cogs icon-menu" aria-hidden="true"></i>
        <span class="nav-link-text">Perfil</span>
    </a>
</li>