<table class="table table-responsive" id="advertisers-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Type</th>
        <th>Fleet Size</th>
        <th>Duration</th>
        <th>Budget</th>
        <th>Remarks</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($advertisers as $advertisers)
        <tr>
            <td>{!! $advertisers->name !!}</td>
            <td>{!! $advertisers->company !!}</td>
            <td>{!! $advertisers->phone !!}</td>
            <td>{!! $advertisers->email !!}</td>
            <td>{!! $advertisers->type !!}</td>
            <td>{!! $advertisers->fleet_size !!}</td>
            <td>{!! $advertisers->duration !!}</td>
            <td>{!! $advertisers->budget !!}</td>
            <td>{!! $advertisers->remarks !!}</td>
            <td>
                {!! Form::open(['route' => ['advertisers.destroy', $advertisers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advertisers.show', [$advertisers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('advertisers.edit', [$advertisers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>