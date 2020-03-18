@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Articulos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articulos, ['route' => ['articulos.update', $articulos->id], 'method' => 'patch']) !!}

                        @include('articulos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection