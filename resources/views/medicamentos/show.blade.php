@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Medicamentos'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('medicamentos.index')}}">{{ _i('Medicamentos') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Detalle') }}</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            {{ _i('Medicamento') }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('medicamentos.show_fields')
                <a href="{!! route('medicamentos.index') !!}" class="btn btn-default">{{ _i('Regresar') }}</a>
            </div>
        </div>
    </div>
@endsection
