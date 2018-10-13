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
                   {!! Form::model($advertisers, ['route' => ['advertisers.update', $advertisers->id], 'method' => 'patch']) !!}

                        @include('advertisers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection