<table class="table table-responsive" id="customers-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
        <th>Img</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Identity No</th>
        <th>Gender</th>
        <th>Bank Name</th>
        <th>Account No</th>
        <th>Mobile No</th>
        <th>Home Address</th>
        <th>Work Address</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customers)
        <tr>
            <td>{!! $customers->name !!}</td>
            <td>{!! $customers->email !!}</td>
            <td>{!! $customers->img !!}</td>
            <td>{!! $customers->email_verified_at !!}</td>
            <td>{!! $customers->password !!}</td>
            <td>{!! $customers->remember_token !!}</td>
            <td>{!! $customers->identity_no !!}</td>
            <td>{!! $customers->gender !!}</td>
            <td>{!! $customers->bank_name !!}</td>
            <td>{!! $customers->account_no !!}</td>
            <td>{!! $customers->mobile_no !!}</td>
            <td>{!! $customers->home_address !!}</td>
            <td>{!! $customers->work_address !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>