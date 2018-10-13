@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Coverages
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($coverages, ['route' => ['coverages.update', $coverages->id], 'method' => 'patch']) !!}

                        @include('coverages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection