<?php switch($giftcard->status):
	case ('active'): ?>
		Activada
		<?php break; ?>
    <?php case ('deactivated'): ?>
        Desactivada
        <?php break; ?>
    <?php case ('refund_process'): ?>
        Proceso de reembolso
        <?php break; ?>
    <?php case ('refunded'): ?>
        Reembolsado
        <?php break; ?>
    <?php case ('send'): ?>
        Enviado
        <?php break; ?>
    <?php case ('pending'): ?>
        No pagada
        <?php break; ?>
<?php endswitch; ?>