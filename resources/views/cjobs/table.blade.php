<table class="table table-responsive" id="cjobs-table">
    <thead>
        <tr>
            <th>User</th>
        <th>Job</th>
        <th>Vehicle</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cjobs as $cjobs)
        <tr>
            <td>{!! $cjobs->user !!}</td>
            <td>{!! $cjobs->job !!}</td>
            <td>{!! $cjobs->vehicle !!}</td>
            <td>{!! $cjobs->start_date !!}</td>
            <td>{!! $cjobs->end_date !!}</td>
            <td>{!! $cjobs->status !!}</td>
            <td>
                {!! Form::open(['route' => ['cjobs.destroy', $cjobs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cjobs.show', [$cjobs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cjobs.edit', [$cjobs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>