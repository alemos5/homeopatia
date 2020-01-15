<!-- Nombre Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control form-control-line']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('image', 'Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Actualizar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('medicamentos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
