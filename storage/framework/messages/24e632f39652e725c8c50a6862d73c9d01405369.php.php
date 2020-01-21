<!-- Nombre Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('nombre', _i('Nombre:')); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control form-control-line']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('descripcion', _i('Descripción:')); ?>

    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('image', _i('Imagen:')); ?>

    <?php echo Form::file('image'); ?>

</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(_i('Actualizar'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('medicamentos.index'); ?>" class="btn btn-default"><?php echo e(_i('Cancelar')); ?></a>
</div>
