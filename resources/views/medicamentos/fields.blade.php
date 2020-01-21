<!-- Nombre Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre', _i('Nombre:')) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control form-control-line']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', _i('Descripción:')) !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image', _i('Imagen:')) !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(_i('Actualizar'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('medicamentos.index') !!}" class="btn btn-default">{{ _i('Cancelar') }}</a>
</div>
