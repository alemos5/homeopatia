<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cliente_id', 'Cliente Id:'); ?>

    <?php echo Form::number('cliente_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Pricing Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pricing_id', 'Pricing Id:'); ?>

    <?php echo Form::number('pricing_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <?php echo Form::number('cantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo', 'Tipo:'); ?>

    <?php echo Form::text('tipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('costo', 'Costo:'); ?>

    <?php echo Form::number('costo', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha', 'Fecha:'); ?>

    <?php echo Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Operacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('operacion', 'Operacion:'); ?>

    <?php echo Form::text('operacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Json Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('json', 'Json:'); ?>

    <?php echo Form::textarea('json', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('clientesCreditos.index')); ?>" class="btn btn-default">Cancel</a>
</div>
