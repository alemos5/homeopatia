<!-- Idmatmed Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('idMatMed', 'Idmatmed:'); ?>

    <?php echo Form::number('idMatMed', null, ['class' => 'form-control']); ?>

</div>


<!-- Id Cremedios Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('id_cremedios', 'Id Cremedios:'); ?>

    <?php echo Form::number('id_cremedios', null, ['class' => 'form-control']); ?>

</div>


<!-- Col C Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_c', 'Col C:'); ?>

    <?php echo Form::number('col_c', null, ['class' => 'form-control']); ?>

</div>


<!-- Col D Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_d', 'Col D:'); ?>

    <?php echo Form::number('col_d', null, ['class' => 'form-control']); ?>

</div>


<!-- Col E Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_e', 'Col E:'); ?>

    <?php echo Form::number('col_e', null, ['class' => 'form-control']); ?>

</div>


<!-- Pregnancia Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('pregnancia', 'Pregnancia:'); ?>

    <?php echo Form::number('pregnancia', null, ['class' => 'form-control']); ?>

</div>


<!-- Nombre Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipoclasico Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoClasico', 'Tipoclasico:'); ?>

    <?php echo Form::number('tipoClasico', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipopolicresto Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoPolicresto', 'Tipopolicresto:'); ?>

    <?php echo Form::number('tipoPolicresto', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipoavanzado Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoAvanzado', 'Tipoavanzado:'); ?>

    <?php echo Form::number('tipoAvanzado', null, ['class' => 'form-control']); ?>

</div>


<!-- Tiporemedioclave Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoRemedioClave', 'Tiporemedioclave:'); ?>

    <?php echo Form::number('tipoRemedioClave', null, ['class' => 'form-control']); ?>

</div>


<!-- Puros Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('puros', 'Puros:'); ?>

    <?php echo Form::number('puros', null, ['class' => 'form-control']); ?>

</div>


<!-- Secuencia Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('secuencia', 'Secuencia:'); ?>

    <?php echo Form::text('secuencia', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('cremedios.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
