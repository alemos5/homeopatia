<div class="table-responsive">
    <table class="table" id="articulos-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Alias</th>
        <th>Title Alias</th>
        <th>Introtext</th>
        <th>Fulltext</th>
        <th>State</th>
        <th>Sectionid</th>
        <th>Mask</th>
        <th>Catid</th>
        <th>Created By</th>
        <th>Created By Alias</th>
        <th>Modified By</th>
        <th>Checked Out</th>
        <th>Images</th>
        <th>Urls</th>
        <th>Attribs</th>
        <th>Version</th>
        <th>Parentid</th>
        <th>Ordering</th>
        <th>Metakey</th>
        <th>Metadesc</th>
        <th>Access</th>
        <th>Hits</th>
        <th>Metadata</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulos)
            <tr>
                <td>{{ $articulos->title }}</td>
            <td>{{ $articulos->alias }}</td>
            <td>{{ $articulos->title_alias }}</td>
            <td>{{ $articulos->introtext }}</td>
            <td>{{ $articulos->fulltext }}</td>
            <td>{{ $articulos->state }}</td>
            <td>{{ $articulos->sectionid }}</td>
            <td>{{ $articulos->mask }}</td>
            <td>{{ $articulos->catid }}</td>
            <td>{{ $articulos->created_by }}</td>
            <td>{{ $articulos->created_by_alias }}</td>
            <td>{{ $articulos->modified_by }}</td>
            <td>{{ $articulos->checked_out }}</td>
            <td>{{ $articulos->images }}</td>
            <td>{{ $articulos->urls }}</td>
            <td>{{ $articulos->attribs }}</td>
            <td>{{ $articulos->version }}</td>
            <td>{{ $articulos->parentid }}</td>
            <td>{{ $articulos->ordering }}</td>
            <td>{{ $articulos->metakey }}</td>
            <td>{{ $articulos->metadesc }}</td>
            <td>{{ $articulos->access }}</td>
            <td>{{ $articulos->hits }}</td>
            <td>{{ $articulos->metadata }}</td>
                <td>
                    {!! Form::open(['route' => ['articulos.destroy', $articulos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articulos.show', [$articulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('articulos.edit', [$articulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
