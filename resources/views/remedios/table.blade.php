<table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
    <tr>
        <th>{{ _i('Idmatmed') }}</th>
        <th>{{ _i('Id Cremedios') }}</th>
        <th>{{ _i('Col C') }}</th>
        <th>{{ _i('Col D') }}</th>
        <th>{{ _i('Col E') }}</th>
        <th>{{ _i('Pregnancia') }}</th>
        <th>{{ _i('Nombre') }}</th>
        <th>{{ _i('Tipoclasico') }}</th>
        <th>{{ _i('Tipopolicresto') }}</th>
        <th>{{ _i('Tipoavanzado') }}</th>
        <th>{{ _i('Tiporemedioclave') }}</th>
        <th>{{ _i('Puros') }}</th>
        <th>{{ _i('Secuencia') }}</th>
        <th>{{ _i('Acciones') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($remedios as $remedios)
        <tr>
            <td>{!! $remedios->idMatMed !!}</td>
            <td>{!! $remedios->id_cremedios !!}</td>
            <td>{!! $remedios->col_c !!}</td>
            <td>{!! $remedios->col_d !!}</td>
            <td>{!! $remedios->col_e !!}</td>
            <td>{!! $remedios->pregnancia !!}</td>
            <td>{!! $remedios->nombre !!}</td>
            <td>{!! $remedios->tipoClasico !!}</td>
            <td>{!! $remedios->tipoPolicresto !!}</td>
            <td>{!! $remedios->tipoAvanzado !!}</td>
            <td>{!! $remedios->tipoRemedioClave !!}</td>
            <td>{!! $remedios->puros !!}</td>
            <td>{!! $remedios->secuencia !!}</td>
            <td style="width: 10em !important;">
                @can('remedios.show')
                    <a href="{{route('remedios.show', $remedios->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                @endcan
                @can('remedios.edit')
                    <a href="{{route('remedios.edit', $remedios->id)}}" class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                @endcan
                @can('remedios.destroy')
                    {!! Form::open(['route' => ['remedios.destroy', $remedios->id], 'method' => 'delete','class' => 'd-inline']) !!}
                    <button class="btn btn-outline-success btn-round btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
