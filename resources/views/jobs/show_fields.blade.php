<div class="row" >
<div class="col-md-4" >

<!-- Jopname Field -->
<div class="form-group">
    {!! Form::label('jopname', 'Job name:') !!}
    <p>{!! $jobs->jopname !!}</p>
</div>
<!-- Client Field -->
<div class="form-group">
    {!! Form::label('client', 'Client:') !!}
    <p>{!! $jobs->clients->name !!}</p>
</div>


<!-- Slots Field -->
<div class="form-group">
    {!! Form::label('slots', 'Slots:') !!}
    <p>{!! $jobs->slots !!}</p>
</div>

<!-- Duration Field -->
<div class="form-group">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{!! $jobs->duration !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $jobs->price !!}</p>
</div>



<!-- Reg End Date Field -->
<div class="form-group">
    {!! Form::label('reg_end_date', 'Reg End Date:') !!}
    <p>{!! $jobs->reg_end_date->format('Y-m-d') !!}</p>
</div>

<!-- Ins Start Date Field -->
<div class="form-group">
    {!! Form::label('ins_start_date', 'Ins Start Date:') !!}
    <p>{!! $jobs->ins_start_date->format('Y-m-d') !!}</p>
</div>


</div>
<div class="col-md-4" >
<!-- Unin Period Field -->
<div class="form-group">
    {!! Form::label('unin_period', 'Unin Period:') !!}
    <p>{!! $jobs->unin_period !!}</p>
</div>
<!-- Req Start Date Field -->
<div class="form-group">
    {!! Form::label('req_start_date', 'Req Start Date:') !!}
    <p>{!! $jobs->req_start_date->format('Y-m-d') !!}</p>
</div>

<!-- Ins End Date Field -->
<div class="form-group">
    {!! Form::label('ins_end_date', 'Ins End Date:') !!}
    <p>{!! $jobs->ins_end_date->format('Y-m-d') !!}</p>
</div>

<!-- Comp Start Date Field -->
<div class="form-group">
    {!! Form::label('comp_start_date', 'Comp Start Date:') !!}
    <p>{!! $jobs->comp_start_date->format('Y-m-d') !!}</p>
</div>

<!-- Comp End Date Field -->
<div class="form-group">
    {!! Form::label('comp_end_date', 'Comp End Date:') !!}
    <p>{!! $jobs->comp_end_date->format('Y-m-d') !!}</p>
</div>


<!-- Un Start Date Field -->
<div class="form-group">
    {!! Form::label('un_start_date', 'Un Start Date:') !!}
    <p>{!! $jobs->un_start_date->format('Y-m-d') !!}</p>
</div>


<!-- Un End Date Field -->
<div class="form-group">
    {!! Form::label('un_end_date', 'Un End Date:') !!}
    <p>{!! $jobs->un_end_date->format('Y-m-d') !!}</p>
</div>

</div>
<div class="col-md-4" >

<!-- Sticker Placements Field -->
<div class="form-group">
    {!! Form::label('sticker_placements', 'Sticker Placements:') !!}
    <p>{!! $jobs->sticker_placements !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $jobs->statuses->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jobs->created_at !!}</p>
</div>



<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jobs->updated_at !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <img src="/home/mohammed/nodes/imgs/{!! $jobs->img !!}" style="width: 70%;" alt="">
</div>
</div>
</div>

