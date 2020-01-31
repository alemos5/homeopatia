<!-- Tipo Field -->
<h2>{{ _i('Datos Personales') }}</h2><hr>

<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Tipo de Estudio') }}</b></div>
            <div class="col-sm-6">{!! $estudios->tipo !!}</div>
        </div>

        @if($estudios->tipo=='humano')
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Nombre') }}</b></div>
                <div class="col-sm-6">{!! $estudios->h_nombre !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Apellido') }}</b></div>
                <div class="col-sm-6">{!! $estudios->h_apellido !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Apodo') }}</b></div>
                <div class="col-sm-6">{!! $estudios->h_identifica !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Iniciales') }}</b></div>
                <div class="col-sm-6">{!! $estudios->h_iniciales !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Fecha de Nacimiento') }}</b></div>
                <div class="col-sm-6">{!! $estudios->h_dia !!} - {!! $estudios->h_mes !!} - {!! $estudios->h_anio !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('País de Nacimiento') }}</b></div>
                <div class="col-sm-6">@if($estudios->pais){{ $estudios->pais->name }}@endif</div>
            </div>

        @else
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Especie') }}</b></div>
                <div class="col-sm-6">{!! $estudios->a_especie !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Nombre del Dueño') }}</b></div>
                <div class="col-sm-6">{!! $estudios->a_duenio !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Nombre del Animal') }}</b></div>
                <div class="col-sm-6">{!! $estudios->a_animal !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Iniciales') }}</b></div>
                <div class="col-sm-6">{!! $estudios->a_iniciales !!}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><b style="font-weight: 900">{{ _i('Fecha de Nacimiento') }}</b></div>
                <div class="col-sm-6">{!! $estudios->a_dia !!} - {!! $estudios->a_mes !!} - {!! $estudios->a_anio !!}</div>
            </div>
        @endif

            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{route('estudios.edit', $estudios->id)}}" class="btn btn-info btn-sm">{{ _i('Actualizar Datos') }}</a>
                </div>
            </div>

    </div>
</div>
