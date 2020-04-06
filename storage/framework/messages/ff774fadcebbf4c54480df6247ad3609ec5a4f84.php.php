<!-- Modal -->
<div class="modal fade" id="changeStatus<?php echo e($giftcard->id); ?>" tabindex="-1" role="dialog" aria-labelledby="changeStatus" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambio de estatus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('giftcards.change-status', [$giftcard->id])); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('put')); ?>

                    <div class="form-group">
                        <label for="status">Selecciona un nuevo estatus para la GiftCard de Adrian Vera por <?php echo e($giftcard->amount); ?></label>
                        <select class="form-control form-control-sm col-11" name="status" required>
                            <option disabled selected>Estatus</option>
                            <?php $__currentLoopData = array_diff(['active', 'deactivated', 'refund_process', 'refunded','send'], array($giftcard->status)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=<?php echo e($status); ?>>
                                    <?php switch($status):
                                        case ('active'): ?>
                                            Activa
                                            <?php break; ?>
                                        <?php case ('deactivated'): ?>
                                            Desactivada
                                            <?php break; ?>
                                        <?php case ('refund_process'): ?>
                                            Proceso de reembolso
                                            <?php break; ?>
                                        <?php case ('send'): ?>
                                            Enviado
                                            <?php break; ?>
                                        <?php case ('refunded'): ?>
                                            Reembolsado
                                            <?php break; ?>
                                    <?php endswitch; ?>      
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>