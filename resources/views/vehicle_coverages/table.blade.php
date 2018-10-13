<table class="table table-responsive" id="vehicleCoverages-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Coverage</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicleCoverages as $vehicleCoverage)
        <tr>
            <td>{!! $vehicleCoverage->types->name !!}</td>
            <td>{!! $vehicleCoverage->coverages->name !!}</td>
            <td>
                {!! Form::open(['route' => ['vehicleCoverages.destroy', $vehicleCoverage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vehicleCoverages.show', [$vehicleCoverage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vehicleCoverages.edit', [$vehicleCoverage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>