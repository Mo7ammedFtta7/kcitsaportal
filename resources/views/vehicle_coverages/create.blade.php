@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vehicle Coverage
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vehicleCoverages.store']) !!}

                        @include('vehicle_coverages.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
