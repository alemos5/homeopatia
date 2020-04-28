<table style="" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th style="width: 20%">Cliente</th>
            <th style="width: 20%">Correo</th>
            <th style="width: 20%">Cantidad</th>
            <th style="width: 20%">Última fecha de registro</th>
            <th style="width: 20%">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($creditos as $clientesCreditos)
        <tr>
        <td>{{ $clientesCreditos->cliente->nombre }}</td>
        <td>{{ $clientesCreditos->cliente->email }}</td>
        <td>{{ $clientesCreditos->cantidad }}</td>
        <td>{{ $clientesCreditos->fecha }}</td>
        <td>
            <a href="{{route('clientesCreditos.edit', $clientesCreditos->id)}}" class="btn btn-outline-success btn-round btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
