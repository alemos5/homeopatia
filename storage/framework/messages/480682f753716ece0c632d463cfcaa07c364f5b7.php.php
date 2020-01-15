<!-- Modal -->
<div class="modal fade" id="bankAccountsModal<?php echo e($giftcard->id); ?>" tabindex="-1" role="dialog" aria-labelledby="bankAccountsModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cuentas bancarias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('giftcards.refund', [$giftcard->id])); ?>" method="get">
                    <select class="custom-select" name="account_id">
                        <option selected>Selecciona una cuenta</option>
                            <?php $__currentLoopData = $giftcard->user->bankAccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($account->id); ?>">
                                    <?php echo e($account->name_titular); ?> | <?php echo e($account->bank); ?> | <?php echo e($account->bank_account); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="modal-footer float-left">
                        <button type="submit" class="btn btn-primary btn-sm">Usar cuenta seleccionada</button>
                        <a href="<?php echo e(route('giftcards.refund', [$giftcard->id])); ?>" class="btn btn-primary btn-sm">Usar otra cuenta</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>