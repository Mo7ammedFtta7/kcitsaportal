@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Statuses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($statuses, ['route' => ['statuses.update', $statuses->id], 'method' => 'patch']) !!}

                        @include('statuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection