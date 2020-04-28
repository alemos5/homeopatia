<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
    <tr>
        <th>{{ _i('Tipo') }}</th>
        <th>{{ _i('Nombre/Especie') }}</th>
        <th>{{ _i('Apellido/Dueño') }}</th>
        <th>{{ _i('Identifica/Animal') }}</th>
        <th>{{ _i('Iniciales') }}</th>
        <th>{{ _i('Dia') }}</th>
        <th>{{ _i('Mes') }}</th>
        <th>{{ _i('Año') }}</th>
        <th>{{ _i('Pais') }}</th>
        <th style="width: auto">{{ _i('Acciones') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($estudios as $estudio)
        <tr>
            @if($estudio->tipo=='humano')
                <td>{!! strtoupper($estudio->tipo) !!}</td>
                <td>{!! $estudio->h_nombre !!}</td>
                <td>{!! $estudio->h_apellido !!}</td>
                <td>{!! $estudio->h_identifica !!}</td>
                <td>{!! $estudio->h_iniciales !!}</td>
                <td>{!! $estudio->h_dia !!}</td>
                <td>{!! $estudio->h_mes !!}</td>
                <td>{!! $estudio->h_anio !!}</td>
                <td>@isset($estudio->pais){!! $estudio->pais->name !!}@endisset</td>
            @else
                <td>{!! strtoupper($estudio->tipo) !!}</td>
                <td>{!! $estudio->a_especie !!}</td>
                <td>{!! $estudio->a_duenio !!}</td>
                <td>{!! $estudio->a_animal !!}</td>
                <td>{!! $estudio->a_iniciales !!}</td>
                <td>{!! $estudio->a_dia !!}</td>
                <td>{!! $estudio->a_mes !!}</td>
                <td>{!! $estudio->a_anio !!}</td>
                <td>&nbsp;</td>
            @endif
            <td style="width: 10em !important;">
                @can('estudios.show')
                    <a href="{{route('estudios.show', $estudio->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                @endcan
                @can('estudios.edit')
                    <a href="{{route('estudios.edit', $estudio->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                @endcan
                @can('estudios.destroy')
                    {!! Form::open(['route' => ['estudios.destroy', $estudio->id], 'method' => 'delete','class' => 'd-inline']) !!}
                    <button class="btn btn-outline-success btn-round btn-sm" onclick="return confirm('{{_i('¿Realmente desea eliminar el elemento seleccionado?')}}')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    {!! Form::close() !!}
                @endcan

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
