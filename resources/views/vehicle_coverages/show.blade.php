@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vehicle Coverage
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('vehicle_coverages.show_fields')
                    <a href="{!! route('vehicleCoverages.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
