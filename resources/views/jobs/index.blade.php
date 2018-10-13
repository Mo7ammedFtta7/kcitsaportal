@extends('layouts.app')

@section('content')
<section class="content-header">
      
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('jobs.create') !!}">Add New</a>
        </h1>
        {!! base_path() !!}

    </section>

<div class="clearfix"></div>

@include('flash::message')

<div class="clearfix"></div>

<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                              <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title ">Jobs</h4>
                          </div>
                <div class="card-body">
                  <div class="table-responsive">
                        @include('jobs.table')

                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>












   
@endsection

