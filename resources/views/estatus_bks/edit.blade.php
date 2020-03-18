@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estatus Bk
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estatusBk, ['route' => ['estatusBks.update', $estatusBk->id], 'method' => 'patch']) !!}

                        @include('estatus_bks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection