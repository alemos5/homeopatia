@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Articulo Ens
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articuloEns, ['route' => ['articuloEns.update', $articuloEns->id], 'method' => 'patch']) !!}

                        @include('articulo_ens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection