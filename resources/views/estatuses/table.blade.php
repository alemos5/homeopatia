<div class="table-responsive">
    <table class="table" id="estatuses-table">
        <thead>
            <tr>
                <th>Estatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estatuses as $estatus)
            <tr>
                <td>{{ $estatus->estatus }}</td>
                <td>
                    {!! Form::open(['route' => ['estatuses.destroy', $estatus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estatuses.show', [$estatus->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('estatuses.edit', [$estatus->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
