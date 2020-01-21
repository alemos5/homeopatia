<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', _i('Id')) !!}
    <p>{!! $medicamento->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', _i('Nombre')) !!}
    <p>{!! $medicamento->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', _i('Descripcion')) !!}
    <p>{!! $medicamento->descripcion !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', _i('Imagen')) !!}
    <p>{!! $medicamento->image !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', _i('Created At')) !!}
    <p>{!! $medicamento->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', _i('Updated At')) !!}
    <p>{!! $medicamento->updated_at !!}</p>
</div>

