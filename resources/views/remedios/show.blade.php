@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Remedios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('remedios.index')}}">{{ _i('Remedios') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Detalle') }}</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            {{ _i('Remedios') }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('remedios.show_fields')
                <a href="{!! route('remedios.index') !!}" class="btn btn-primary">{{ _i('Regresar') }}</a>
            </div>
        </div>
    </div>
@endsection
