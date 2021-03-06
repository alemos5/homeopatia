@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Usuarios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">{{ _i('Usuarios') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Editar ') }}</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            {{ _i('Usuario') }}# <b>{{str_pad($user->id_cliente, 6, '0', STR_PAD_LEFT)}}</b>
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @if(session('info'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="alert alert-success text-center">{{session('info')}}</div>
                    </div>
                </div>
            </div>
        @endif
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($user, ['route' => ['users.update', $user->id_cliente], 'method'=>'PUT', 'style'=>'width: 100%']) !!}
                    @include('users.partials.form')
                    <hr>
                    <a href="{{ URL::previous() }}" class="btn btn-outline-secondary float-right">{{_i('Regresar')}}</a>
                    {{ Form::submit(_i('Guardar'), ['class' => 'btn btn-outline-success float-right mr-1'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection