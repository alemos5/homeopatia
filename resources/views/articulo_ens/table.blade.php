<div class="table-responsive">
    <table class="table" id="articuloEns-table">
        <thead>
            <tr>
                <th>Language Id</th>
        <th>Reference Id</th>
        <th>Reference Table</th>
        <th>Reference Field</th>
        <th>Value</th>
        <th>Original Value</th>
        <th>Original Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articuloEns as $articuloEns)
            <tr>
                <td>{{ $articuloEns->language_id }}</td>
            <td>{{ $articuloEns->reference_id }}</td>
            <td>{{ $articuloEns->reference_table }}</td>
            <td>{{ $articuloEns->reference_field }}</td>
            <td>{{ $articuloEns->value }}</td>
            <td>{{ $articuloEns->original_value }}</td>
            <td>{{ $articuloEns->original_text }}</td>
                <td>
                    {!! Form::open(['route' => ['articuloEns.destroy', $articuloEns->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articuloEns.show', [$articuloEns->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('articuloEns.edit', [$articuloEns->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
