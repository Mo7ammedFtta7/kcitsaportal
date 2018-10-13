<table class="table table-responsive" id="requests-table">
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
    @foreach($requests as $requests)
        <tr>
            <td>{!! $requests->user !!}</td>
            <td>{!! $requests->job !!}</td>
            <td>{!! $requests->vehicle !!}</td>
            <td>{!! $requests->start_date !!}</td>
            <td>{!! $requests->end_date !!}</td>
            <td>{!! $requests->status !!}</td>
            <td>
                {!! Form::open(['route' => ['requests.destroy', $requests->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requests.show', [$requests->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requests.edit', [$requests->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>