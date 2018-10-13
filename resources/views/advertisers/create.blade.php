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
                    {!! Form::open(['route' => 'advertisers.store']) !!}

                        @include('advertisers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
