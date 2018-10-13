@extends('layouts.app')

@section('content')
  
    <div class="content">
        @include('adminlte-templates::common.errors')

        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                        <div class="col-md-12">
                                  <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                      <div class="card-text">
                                         <h4 class="card-title">
                                               Create Job
                                            </h4>
                                      </div>
                                    </div>
                                    <div class="card-body ">
                    {!! Form::open(['route' => 'jobs.store']) !!}

                        @include('jobs.fields')

                    {!! Form::close() !!}
                
                              {{-- <div class="row">
                                <label class="col-sm-2 col-form-label">Required Text</label>
                                <div class="col-sm-7">
                                  <div class="form-group bmd-form-group has-danger">
                                    <input class="form-control" type="text" name="required" required="true" aria-required="true" aria-invalid="true">
                                  </div>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                  <code>required</code>
                                </label>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                  <div class="form-group bmd-form-group has-danger">
                                    <input class="form-control" type="text" name="email" email="true" required="true" aria-required="true">
                                  </div>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                  <code>email="true"</code>
                                </label>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-7">
                                  <div class="form-group bmd-form-group has-danger">
                                    <input class="form-control" type="text" name="number" number="true" required="true" aria-required="true">
                                  </div>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                  <code>number="true"</code>
                                </label>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label">Url</label>
                                <div class="col-sm-7">
                                  <div class="form-group bmd-form-group has-danger">
                                    <input class="form-control" type="text" name="url" url="true" required="true" aria-required="true">
                                  </div>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                  <code>url="true"</code>
                                </label>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label">Equal to</label>
                                <div class="col-sm-3">
                                  <div class="form-group bmd-form-group has-danger">
                                    <input class="form-control" id="idSource" type="text" placeholder="#idSource" required="true" aria-required="true">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group bmd-form-group">
                                    <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalto="#idSource" required="true" aria-required="true">
                                  </div>
                                </div>
                                <label class="col-sm-4 label-on-right">
                                  <code>equalTo="#idSource"</code>
                                </label>
                              </div> --}}
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

    
@endsection
