<table class="table table-responsive" id="coverages-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($coverages as $coverages)
        <tr>
            <td>{!! $coverages->name !!}</td>
            <td>
                {!! Form::open(['route' => ['coverages.destroy', $coverages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coverages.show', [$coverages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coverages.edit', [$coverages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>