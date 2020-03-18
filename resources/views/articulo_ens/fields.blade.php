<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', 'Language Id:') !!}
    {!! Form::number('language_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reference Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference_id', 'Reference Id:') !!}
    {!! Form::number('reference_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reference Table Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference_table', 'Reference Table:') !!}
    {!! Form::text('reference_table', null, ['class' => 'form-control']) !!}
</div>

<!-- Reference Field Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference_field', 'Reference Field:') !!}
    {!! Form::text('reference_field', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::textarea('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Original Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('original_value', 'Original Value:') !!}
    {!! Form::text('original_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Original Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('original_text', 'Original Text:') !!}
    {!! Form::textarea('original_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articuloEns.index') }}" class="btn btn-default">Cancel</a>
</div>
