<div class="table-responsive">
    <table class="table" id="estatusBks-table">
        <thead>
            <tr>
                <th>Estatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estatusBks as $estatusBk)
            <tr>
                <td>{{ $estatusBk->estatus }}</td>
                <td>
                    {!! Form::open(['route' => ['estatusBks.destroy', $estatusBk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estatusBks.show', [$estatusBk->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('estatusBks.edit', [$estatusBk->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
