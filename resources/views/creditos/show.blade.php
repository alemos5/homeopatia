@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', 'Abonar Creditos')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">{{ _i('Usuarios') }}</a></li>
    <li class="breadcrumb-item active">Detalle del Creditos</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Clientes Creditos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
{{--                    @include('clientes_creditos.show_fields')--}}
{{--                    <a href="{{ route('clientesCreditos.index') }}" class="btn btn-default">Back</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
