<div class="table-responsive">
    <table class="table" id="estudiosRemedios-table">
        <thead>
            <tr>
                <th>Estudio Id</th>
        <th>Medicamento</th>
        <th>Medicamento Id</th>
        <th>Sac</th>
        <th>Reino</th>
        <th>Clave</th>
        <th>Nota</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estudiosRemedios as $estudiosRemedios)
            <tr>
                <td>{{ $estudiosRemedios->estudio_id }}</td>
            <td>{{ $estudiosRemedios->medicamento }}</td>
            <td>{{ $estudiosRemedios->medicamento_id }}</td>
            <td>{{ $estudiosRemedios->sac }}</td>
            <td>{{ $estudiosRemedios->reino }}</td>
            <td>{{ $estudiosRemedios->clave }}</td>
            <td>{{ $estudiosRemedios->nota }}</td>
                <td>
                    {!! Form::open(['route' => ['estudiosRemedios.destroy', $estudiosRemedios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estudiosRemedios.show', [$estudiosRemedios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('estudiosRemedios.edit', [$estudiosRemedios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
