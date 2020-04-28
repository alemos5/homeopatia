<div class="table-responsive">
    <table class="table" id="clientesCreditos-table">
        <thead>
            <tr>
                <th>Cliente Id</th>
        <th>Pricing Id</th>
        <th>Cantidad</th>
        <th>Tipo</th>
        <th>Costo</th>
        <th>Fecha</th>
        <th>Operacion</th>
        <th>Json</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientesCreditos as $clientesCreditos)
            <tr>
                <td>{{ $clientesCreditos->cliente_id }}</td>
            <td>{{ $clientesCreditos->pricing_id }}</td>
            <td>{{ $clientesCreditos->cantidad }}</td>
            <td>{{ $clientesCreditos->tipo }}</td>
            <td>{{ $clientesCreditos->costo }}</td>
            <td>{{ $clientesCreditos->fecha }}</td>
            <td>{{ $clientesCreditos->operacion }}</td>
            <td>{{ $clientesCreditos->json }}</td>
                <td>
                    {!! Form::open(['route' => ['clientesCreditos.destroy', $clientesCreditos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientesCreditos.show', [$clientesCreditos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clientesCreditos.edit', [$clientesCreditos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
