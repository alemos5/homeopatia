<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pricing Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pricing_id', 'Pricing Id:') !!}
    {!! Form::number('pricing_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::number('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Operacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operacion', 'Operacion:') !!}
    {!! Form::text('operacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Json Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('json', 'Json:') !!}
    {!! Form::textarea('json', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientesCreditos.index') }}" class="btn btn-default">Cancel</a>
</div>
