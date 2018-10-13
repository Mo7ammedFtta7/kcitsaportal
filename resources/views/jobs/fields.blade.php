<div class="row">
    <div class="col-md-4">

<!-- Jopname Field -->
<div class="form-group  ">
    {!! Form::label('jopname', 'Job name:') !!}
    {!! Form::text('jopname', null, ['class' => 'form-control','required'=>'']) !!}
</div>

<!-- Client Field -->
<div class="form-group  ">
    {!! Form::label('client', 'Client:') !!}
    {!! Form::select('client',$clients, null, ['class' => 'form-control','data-size'=>'7' ,'data-style'=>'btn btn-primary btn-round']) !!}
</div>

<!-- Slots Field -->
<div class="form-group  ">
    {!! Form::label('slots', 'Slots:') !!}
    {!! Form::number('slots', null, ['class' => 'form-control','required'=>'']) !!}
</div>

<!-- Duration Field -->
<div class="form-group  ">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::number('duration', null, ['class' => 'form-control','required'=>'']) !!}
</div>

<!-- Price Field -->
<div class="form-group  ">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control','required'=>'']) !!}
</div>



<!-- Img Field -->
<div class="  ">
    {!! Form::label('img', 'Image:') !!}
    {!! Form::file('img', null, ['class' => 'form-control','required'=>'']) !!}
</div>
    </div>
    <div class="col-md-4">


<!-- Req Start Date Field -->
<div class="form-group  ">
        {!! Form::label('req_start_date', 'Req Start Date:') !!}
        {!! Form::date('req_start_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Reg End Date Field -->
    <div class="form-group  ">
        {!! Form::label('reg_end_date', 'Reg End Date:') !!}
        {!! Form::date('reg_end_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Ins Start Date Field -->
    <div class="form-group  ">
        {!! Form::label('ins_start_date', 'Ins Start Date:') !!}
        {!! Form::date('ins_start_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Ins End Date Field -->
    <div class="form-group  ">
        {!! Form::label('ins_end_date', 'Ins End Date:') !!}
        {!! Form::date('ins_end_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Comp Start Date Field -->
    <div class="form-group  ">
        {!! Form::label('comp_start_date', 'Comp Start Date:') !!}
        {!! Form::date('comp_start_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Comp End Date Field -->
    <div class="form-group  ">
        {!! Form::label('comp_end_date', 'Comp End Date:') !!}
        {!! Form::date('comp_end_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    </div>
   <div class="col-md-4">

<!-- Unin Period Field -->
<div class="form-group  ">
        {!! Form::label('unin_period', 'Unin Period:') !!}
        {!! Form::text('unin_period', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Un Start Date Field -->
    <div class="form-group  ">
        {!! Form::label('un_start_date', 'Un Start Date:') !!}
        {!! Form::date('un_start_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Un End Date Field -->
    <div class="form-group  ">
        {!! Form::label('un_end_date', 'Un End Date:') !!}
        {!! Form::date('un_end_date', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
    <!-- Sticker Placements Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('sticker_placements', 'Sticker Placements:') !!}
        {!! Form::textarea('sticker_placements', null, ['class' => 'form-control','required'=>'']) !!}
    </div>
    
        {!! Form::hidden('status', '1', ['class' => '']) !!}
    
    </div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
