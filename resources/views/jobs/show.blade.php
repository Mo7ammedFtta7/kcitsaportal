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
                                        Job details
                                        </h4>
                                  </div>
                                </div>
                                <div class="card-body ">
                    @include('jobs.show_fields')
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
