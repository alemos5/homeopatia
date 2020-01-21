<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th>{{ _i('Id Usuario') }}</th>
        <th>{{ _i('Tipo') }}</th>
        <th>{{ _i('H Nombre') }}</th>
        <th>{{ _i('H Apellido') }}</th>
        <th>{{ _i('H Identifica') }}</th>
        <th>{{ _i('H Iniciales') }}</th>
        <th>{{ _i('H Dia') }}</th>
        <th>{{ _i('H Mes') }}</th>
        <th>{{ _i('H Anio') }}</th>
        <th>{{ _i('H Pais') }}</th>
        <th>{{ _i('A Especie') }}</th>
        <th>{{ _i('A Duenio') }}</th>
        <th>{{ _i('A Animal') }}</th>
        <th>{{ _i('A Iniciales') }}</th>
        <th>{{ _i('A Dia') }}</th>
        <th>{{ _i('A Mes') }}</th>
        <th>{{ _i('A Anio') }}</th>
        <th>{{ _i('Ip') }}</th>
        <th>{{ _i('User Agent') }}</th>
        <th>{{ _i('Fecha') }}</th>
            <th style="width: auto">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estudios as $estudios)
        <tr>
            <td>{!! $estudios->id_usuario !!}</td>
            <td>{!! $estudios->tipo !!}</td>
            <td>{!! $estudios->h_nombre !!}</td>
            <td>{!! $estudios->h_apellido !!}</td>
            <td>{!! $estudios->h_identifica !!}</td>
            <td>{!! $estudios->h_iniciales !!}</td>
            <td>{!! $estudios->h_dia !!}</td>
            <td>{!! $estudios->h_mes !!}</td>
            <td>{!! $estudios->h_anio !!}</td>
            <td>{!! $estudios->h_pais !!}</td>
            <td>{!! $estudios->a_especie !!}</td>
            <td>{!! $estudios->a_duenio !!}</td>
            <td>{!! $estudios->a_animal !!}</td>
            <td>{!! $estudios->a_iniciales !!}</td>
            <td>{!! $estudios->a_dia !!}</td>
            <td>{!! $estudios->a_mes !!}</td>
            <td>{!! $estudios->a_anio !!}</td>
            <td>{!! $estudios->ip !!}</td>
            <td>{!! $estudios->user_agent !!}</td>
            <td>{!! $estudios->fecha !!}</td>
            <td style="width: 10em !important;">
                @can('estudios.show')
                    <a href="{{route('estudios.show', $estudios->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                @endcan
                @can('estudios.edit')
                    <a href="{{route('estudios.edit', $estudios->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                @endcan
                @can('estudios.destroy')
                    {!! Form::open(['route' => ['estudios.destroy', $estudios->id], 'method' => 'delete','class' => 'd-inline']) !!}
                    <button class="btn btn-outline-success btn-round btn-sm" onclick="return confirm({{_i('¿Realmente desea eliminar el elemento seleccionado?')}})">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    {!! Form::close() !!}
                @endcan

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
