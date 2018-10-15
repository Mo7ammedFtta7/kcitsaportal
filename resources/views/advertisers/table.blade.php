<table class="table  datatable" id="advertisers-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Company</th>
        <th>Type</th>
        <th>Fleet Size</th>
        <th>Duration</th>
        <th>Budget</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($advertisers as $advertisers)
        <tr>
            <td>{!! $advertisers->name !!}</td>
            <td>{!! $advertisers->company !!}</td>
       
            <td>{!! $advertisers->type !!}</td>
            <td>{!! $advertisers->fleet_size !!}</td>
            <td>{!! $advertisers->duration !!}</td>
            <td>{!! $advertisers->budget !!}</td>
            <td class="td-actions text-right"> 
              {!! Form::open(['route' => ['advertisers.destroy', $advertisers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advertisers.show', [$advertisers->id]) !!}" class='btn btn-info'><i class="material-icons">details</i></a>
                    <a href="{!! route('advertisers.edit', [$advertisers->id]) !!}" class='btn btn-success'><i class="material-icons">edit</i></a>
                    {!! Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>