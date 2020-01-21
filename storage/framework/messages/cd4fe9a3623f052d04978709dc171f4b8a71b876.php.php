<!-- Idmatmed Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('idMatMed',_i('Idmatmed')); ?>

    <?php echo Form::number('idMatMed', null, ['class' => 'form-control']); ?>

</div>


<!-- Id Cremedios Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('id_cremedios',_i('Id Cremedios')); ?>

    <?php echo Form::number('id_cremedios', null, ['class' => 'form-control']); ?>

</div>


<!-- Col C Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_c',_i('Col C')); ?>

    <?php echo Form::number('col_c', null, ['class' => 'form-control']); ?>

</div>


<!-- Col D Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_d', _i('Col D')); ?>

    <?php echo Form::number('col_d', null, ['class' => 'form-control']); ?>

</div>


<!-- Col E Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('col_e', _i('Col E:')); ?>

    <?php echo Form::number('col_e', null, ['class' => 'form-control']); ?>

</div>


<!-- Pregnancia Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('pregnancia', _i('Pregnancia:')); ?>

    <?php echo Form::number('pregnancia', null, ['class' => 'form-control']); ?>

</div>


<!-- Nombre Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('nombre', _i('Nombre:')); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipoclasico Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoClasico', _i('Tipoclasico:')); ?>

    <?php echo Form::number('tipoClasico', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipopolicresto Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoPolicresto', _i('Tipopolicresto:')); ?>

    <?php echo Form::number('tipoPolicresto', null, ['class' => 'form-control']); ?>

</div>


<!-- Tipoavanzado Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoAvanzado', _i('Tipoavanzado:')); ?>

    <?php echo Form::number('tipoAvanzado', null, ['class' => 'form-control']); ?>

</div>


<!-- Tiporemedioclave Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipoRemedioClave', _i('Tiporemedioclave:')); ?>

    <?php echo Form::number('tipoRemedioClave', null, ['class' => 'form-control']); ?>

</div>


<!-- Puros Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('puros', _i('Puros:')); ?>

    <?php echo Form::number('puros', null, ['class' => 'form-control']); ?>

</div>


<!-- Secuencia Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('secuencia', _i('Secuencia:')); ?>

    <?php echo Form::text('secuencia', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('remedios.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
