<!-- Estudio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudio_id', 'Estudio Id:') !!}
    {!! Form::number('estudio_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Medicamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicamento', 'Medicamento:') !!}
    {!! Form::text('medicamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Medicamento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicamento_id', 'Medicamento Id:') !!}
    {!! Form::number('medicamento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sac', 'Sac:') !!}
    {!! Form::number('sac', null, ['class' => 'form-control']) !!}
</div>

<!-- Reino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reino', 'Reino:') !!}
    {!! Form::text('reino', null, ['class' => 'form-control']) !!}
</div>

<!-- Clave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::text('clave', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nota', 'Nota:') !!}
    {!! Form::textarea('nota', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estudiosRemedios.index') }}" class="btn btn-default">Cancel</a>
</div>
