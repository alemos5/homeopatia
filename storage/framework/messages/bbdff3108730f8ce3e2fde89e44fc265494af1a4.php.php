<!-- Estudio Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estudio_id', 'Estudio Id:'); ?>

    <?php echo Form::number('estudio_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Medicamento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('medicamento', 'Medicamento:'); ?>

    <?php echo Form::text('medicamento', null, ['class' => 'form-control']); ?>

</div>

<!-- Medicamento Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('medicamento_id', 'Medicamento Id:'); ?>

    <?php echo Form::number('medicamento_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Sac Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sac', 'Sac:'); ?>

    <?php echo Form::number('sac', null, ['class' => 'form-control']); ?>

</div>

<!-- Reino Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('reino', 'Reino:'); ?>

    <?php echo Form::text('reino', null, ['class' => 'form-control']); ?>

</div>

<!-- Clave Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('clave', 'Clave:'); ?>

    <?php echo Form::text('clave', null, ['class' => 'form-control']); ?>

</div>

<!-- Nota Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('nota', 'Nota:'); ?>

    <?php echo Form::textarea('nota', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('estudiosRemedios.index')); ?>" class="btn btn-default">Cancel</a>
</div>
