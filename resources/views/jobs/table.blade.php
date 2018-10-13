<table class="table"  id="jobs-table">
    <thead >
        <tr>
            <th>Job name</th>
        <th>Slots</th>
        <th>Duration</th>
        <th>Price</th>
        <th>Client</th>
        <th>Start_Date</th>
        <th>End_Date</th>
        <th>Status</th>
            <th  class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobs as $jobs)
        <tr>
            <td>{!! $jobs->jopname !!}</td>
            <td>{!! $jobs->slots !!}</td>
            <td>{!! $jobs->duration !!}</td>
            <td>{!! $jobs->price !!}</td>
            <td>{!! $jobs->clients->name !!}</td>
            <td>{!! $jobs->req_start_date->format('Y-m-d') !!}</td>
            <td>{!! $jobs->reg_end_date->format('Y-m-d') !!}</td>
            <td>{!! $jobs->statuses->name !!}</td>
            <td class="td-actions text-right">                {!! Form::open(['route' => ['jobs.destroy', $jobs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobs.show', [$jobs->id]) !!}" class='btn btn-info'><i class="material-icons">details</i></a>
                    <a href="{!! route('jobs.edit', [$jobs->id]) !!}" class='btn btn-success'><i class="material-icons">edit</i></a>
                    {!! Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
            
                    {{-- <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                      <i class="material-icons">details</i>
                    <div class="ripple-container"></div></button>
                    <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                      <i class="material-icons">close</i>
                    </button> --}}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>