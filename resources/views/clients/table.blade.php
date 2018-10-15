<table class="table " id="clients-table">
    <thead>
        <tr>
            <th>Icon</th>
        <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $clients)
        <tr>
            <td>{!! $clients->icon !!}</td>
            <td>{!! $clients->name !!}</td>
            <td class="td-actions text-right"> 
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                      <div class='btn-group'>
                          <a href="{!! route('clients.show', [$clients->id]) !!}" class='btn btn-info'><i class="material-icons">details</i></a>
                          <a href="{!! route('clients.edit', [$clients->id]) !!}" class='btn btn-success'><i class="material-icons">edit</i></a>
                          {!! Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                      </div>
                      {!! Form::close() !!}
                  </td>
        </tr>
    @endforeach
    </tbody>
</table>