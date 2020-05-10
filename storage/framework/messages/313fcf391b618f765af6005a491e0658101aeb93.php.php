<!-- Cliente Id Field -->





<!-- Pricing Id Field -->





<!-- Cantidad Field -->
<div class="row">
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('cantidad', 'Cantidad:'); ?>

        <?php echo Form::number('cantidad', null, ['class' => 'form-control']); ?>

    </div>
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('fecha', 'Fecha:'); ?>

        <?php echo Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']); ?>

    </div>
</div>






<!-- Costo Field -->





<!-- Fecha Field -->


<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Operacion Field -->





<!-- Json Field -->





<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Actualizar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('creditos.index')); ?>" class="btn btn-default">Cancel</a>
</div>
