<div class="row">
    <div class="col-md-12">
        <label for="cantidad" class="mb-0"><?php echo e(_i('Cantidad de Créditos')); ?></label>
        <input id="cantidad" name="cantidad" type="text" value="<?php echo e(@old("cantidad")); ?>" class="form-control <?php echo e($errors->has('cantidad') ? ' is-invalid' : ''); ?>" required autofocus>
        <?php if($errors->has('cantidad')): ?>
            <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('cantidad')); ?></strong>
                </span>
        <?php endif; ?>
    </div>
</div>
<input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo e($cliente_id); ?>">
