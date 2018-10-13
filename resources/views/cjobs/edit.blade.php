@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cjobs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cjobs, ['route' => ['cjobs.update', $cjobs->id], 'method' => 'patch']) !!}

                        @include('cjobs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection