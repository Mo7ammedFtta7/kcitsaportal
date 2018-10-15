@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Advertisers
        </h1>
    </section>
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

                    {!! Form::open(['route' => 'advertisers.store']) !!}

                        @include('advertisers.fields')

                    {!! Form::close() !!}
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
