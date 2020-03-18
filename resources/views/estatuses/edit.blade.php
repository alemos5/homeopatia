@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estatus
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estatus, ['route' => ['estatuses.update', $estatus->id], 'method' => 'patch']) !!}

                        @include('estatuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection