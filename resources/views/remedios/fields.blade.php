<!-- Idmatmed Field -->
<div class="form-group col-sm-12">
    {!! Form::label('idMatMed',_i('Idmatmed')) !!}
    {!! Form::number('idMatMed', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cremedios Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_cremedios',_i('Id Cremedios')) !!}
    {!! Form::number('id_cremedios', null, ['class' => 'form-control']) !!}
</div>


<!-- Col C Field -->
<div class="form-group col-sm-12">
    {!! Form::label('col_c',_i('Col C')) !!}
    {!! Form::number('col_c', null, ['class' => 'form-control']) !!}
</div>


<!-- Col D Field -->
<div class="form-group col-sm-12">
    {!! Form::label('col_d', _i('Col D')) !!}
    {!! Form::number('col_d', null, ['class' => 'form-control']) !!}
</div>


<!-- Col E Field -->
<div class="form-group col-sm-12">
    {!! Form::label('col_e', _i('Col E:')) !!}
    {!! Form::number('col_e', null, ['class' => 'form-control']) !!}
</div>


<!-- Pregnancia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pregnancia', _i('Pregnancia:')) !!}
    {!! Form::number('pregnancia', null, ['class' => 'form-control']) !!}
</div>


<!-- Nombre Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre', _i('Nombre:')) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipoclasico Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipoClasico', _i('Tipoclasico:')) !!}
    {!! Form::number('tipoClasico', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipopolicresto Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipoPolicresto', _i('Tipopolicresto:')) !!}
    {!! Form::number('tipoPolicresto', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipoavanzado Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipoAvanzado', _i('Tipoavanzado:')) !!}
    {!! Form::number('tipoAvanzado', null, ['class' => 'form-control']) !!}
</div>


<!-- Tiporemedioclave Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipoRemedioClave', _i('Tiporemedioclave:')) !!}
    {!! Form::number('tipoRemedioClave', null, ['class' => 'form-control']) !!}
</div>


<!-- Puros Field -->
<div class="form-group col-sm-12">
    {!! Form::label('puros', _i('Puros:')) !!}
    {!! Form::number('puros', null, ['class' => 'form-control']) !!}
</div>


<!-- Secuencia Field -->
<div class="form-group col-sm-12">
    {!! Form::label('secuencia', _i('Secuencia:')) !!}
    {!! Form::text('secuencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('remedios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
