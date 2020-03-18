<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_alias', 'Title Alias:') !!}
    {!! Form::text('title_alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Introtext Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('introtext', 'Introtext:') !!}
    {!! Form::textarea('introtext', null, ['class' => 'form-control']) !!}
</div>

<!-- Fulltext Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('fulltext', 'Fulltext:') !!}
    {!! Form::textarea('fulltext', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('state', 0) !!}
        {!! Form::checkbox('state', '1', null) !!}
    </label>
</div>


<!-- Sectionid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sectionid', 'Sectionid:') !!}
    {!! Form::number('sectionid', null, ['class' => 'form-control']) !!}
</div>

<!-- Mask Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mask', 'Mask:') !!}
    {!! Form::number('mask', null, ['class' => 'form-control']) !!}
</div>

<!-- Catid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catid', 'Catid:') !!}
    {!! Form::number('catid', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by_alias', 'Created By Alias:') !!}
    {!! Form::text('created_by_alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Modified By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modified_by', 'Modified By:') !!}
    {!! Form::number('modified_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Checked Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('checked_out', 'Checked Out:') !!}
    {!! Form::number('checked_out', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::textarea('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Urls Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('urls', 'Urls:') !!}
    {!! Form::textarea('urls', null, ['class' => 'form-control']) !!}
</div>

<!-- Attribs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('attribs', 'Attribs:') !!}
    {!! Form::textarea('attribs', null, ['class' => 'form-control']) !!}
</div>

<!-- Version Field -->
<div class="form-group col-sm-6">
    {!! Form::label('version', 'Version:') !!}
    {!! Form::number('version', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentid', 'Parentid:') !!}
    {!! Form::number('parentid', null, ['class' => 'form-control']) !!}
</div>

<!-- Ordering Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordering', 'Ordering:') !!}
    {!! Form::number('ordering', null, ['class' => 'form-control']) !!}
</div>

<!-- Metakey Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('metakey', 'Metakey:') !!}
    {!! Form::textarea('metakey', null, ['class' => 'form-control']) !!}
</div>

<!-- Metadesc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('metadesc', 'Metadesc:') !!}
    {!! Form::textarea('metadesc', null, ['class' => 'form-control']) !!}
</div>

<!-- Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('access', 'Access:') !!}
    {!! Form::number('access', null, ['class' => 'form-control']) !!}
</div>

<!-- Hits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hits', 'Hits:') !!}
    {!! Form::number('hits', null, ['class' => 'form-control']) !!}
</div>

<!-- Metadata Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('metadata', 'Metadata:') !!}
    {!! Form::textarea('metadata', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articulos.index') }}" class="btn btn-default">Cancel</a>
</div>
