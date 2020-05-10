<table style="" id="data-table" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th style="width: 33%">Cliente</th>
            <th style="width: 33%">Correo</th>
            <th style="width: 33%">Cantidad</th>
        </tr>
    </thead>
    <tbody>
    @foreach($creditos as $clientesCreditos)
        <?php $cliente = \App\Http\Controllers\UserController::getClient($clientesCreditos->cliente_id) ?>
        <tr>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $clientesCreditos->cantidad }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
