@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clientes Creditos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clientesCreditos, ['route' => ['clientesCreditos.update', $clientesCreditos->id], 'method' => 'patch']) !!}

                        @include('clientes_creditos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection