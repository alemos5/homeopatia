@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Estudios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('estudios.index')}}">{{ _i('Estudios') }}</a></li>
<li class="breadcrumb-item active">{{ _i('Editar') }}</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
        {{ _i('Estudios') }}
        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($estudios, ['route' => ['estudios.update', $estudios->id], 'method' => 'patch', 'style'=>'width: 100%']) !!}

                    @include('estudios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
