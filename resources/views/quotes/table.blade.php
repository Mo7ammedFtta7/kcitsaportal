<table class="table" id="quotes-table">
    <thead class=" text-primary">
        <tr>
            <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Type</th>
        <th>Fleet Size</th>
        <th>Duration</th>
        <th>Budget</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($quotes as $quotes)
        <tr>
            <td>{!! $quotes->name !!}</td>
            <td>{!! $quotes->company !!}</td>
            <td>{!! $quotes->phone !!}</td>
            <td>{!! $quotes->type !!}</td>
            <td>{!! $quotes->fleet_size !!}</td>
            <td>{!! $quotes->duration !!}</td>
            <td>{!! $quotes->budget !!}</td>
            <td class="td-actions text-right">
                    {!! Form::open(['route' => ['quotes.destroy', $quotes->id], 'method' => 'delete']) !!}

                    <a href="{!! route('quotes.show', [$quotes->id]) !!}" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                      <i class="material-icons">person</i>
                   
                     </a>
                    <a href="{!! route('quotes.edit', [$quotes->id]) !!}" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{!! route('quotes.edit', [$quotes->id]) !!}"  rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                      <i class="material-icons">close</i>
                    </a>
                    {!! Form::close() !!}
 
                </td>
                 

        </tr>
    @endforeach
    </tbody>
</table>