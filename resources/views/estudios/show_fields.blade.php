<!-- Tipo Field -->
<h2>{{ _i('Datos Personales') }}</h2><hr>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Tipo de Estudio') }}</b></div>
    <div class="col-sm-8">{!! $estudios->tipo !!}</div>
</div>
@if($estudios->tipo=='humano')
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Nombre') }}</b></div>
    <div class="col-sm-8">{!! $estudios->h_nombre !!}</div>
</div>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Apellido') }}</b></div>
    <div class="col-sm-8">{!! $estudios->h_apellido !!}</div>
</div>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Apodo') }}</b></div>
    <div class="col-sm-8">{!! $estudios->h_identifica !!}</div>
</div>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Iniciales') }}</b></div>
    <div class="col-sm-8">{!! $estudios->h_iniciales !!}</div>
</div>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('Fecha de Nacimiento') }}</b></div>
    <div class="col-sm-8">{!! $estudios->h_dia !!} - {!! $estudios->h_mes !!} - {!! $estudios->h_anio !!}</div>
</div>
<div class="row">
    <div class="col-sm-4"><b>{{ _i('País de Nacimiento') }}</b></div>
    <div class="col-sm-8">@if($estudios->pais){{ $estudios->pais->name }}@endif</div>
</div>

@else
    <div class="row">
        <div class="col-sm-4"><b>{{ _i('Especie') }}</b></div>
        <div class="col-sm-8">{!! $estudios->a_especie !!}</div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>{{ _i('Nombre del Dueño') }}</b></div>
        <div class="col-sm-8">{!! $estudios->a_duenio !!}</div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>{{ _i('Nombre del Animal') }}</b></div>
        <div class="col-sm-8">{!! $estudios->a_animal !!}</div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>{{ _i('Iniciales') }}</b></div>
        <div class="col-sm-8">{!! $estudios->a_iniciales !!}</div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>{{ _i('Fecha de Nacimiento') }}</b></div>
        <div class="col-sm-8">{!! $estudios->a_dia !!} - {!! $estudios->a_mes !!} - {!! $estudios->a_anio !!}</div>
    </div>
@endif