<div class="box box-primary">

        <div class="box-body">
            <div class="row">
                    <div class="col-md-12">
                              <div class="card ">
                                <div class="card-header card-header-rose card-header-text">
                                  <div class="card-text">
                                     <h4 class="card-title">
                                           Clients
                                        </h4>
                                  </div>
                                </div>
                                <div class="card-body ">
<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    {!! Form::text('icon', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
{{-- <div class="card-footer ml-auto mr-auto">
  <button type="submit" class="btn btn-rose">Validate Inputs<div class="ripple-container"></div></button>
</div> --}}
</div>
</div>
</div>
</div>
</div>
</div>

