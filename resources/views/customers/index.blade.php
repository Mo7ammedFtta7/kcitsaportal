@extends('layouts.app')

@section('content')

@section('content')
  

    
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
                            <h4 class="card-title ">Customers</h4>
                          </div>
                <div class="card-body">
                  <div class="table-responsive">
                        @include('customers.table')

                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>











@endsection

