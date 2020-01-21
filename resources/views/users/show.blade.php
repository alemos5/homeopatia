@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Usuarios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">{{ _i('Usuarios') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Detalle') }}</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            {{ _i('Usuario') }}# <b>{{str_pad($user->id_cliente, 6, '0', STR_PAD_LEFT)}}</b>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                        <p><strong>{{ _i('Code Cliente') }}:</strong> {{$user->code_cliente}}</p>
                        <p><strong>{{ _i('Nombre') }}:</strong> {{$user->nombre}}</p>
                        <p><strong>{{ _i('Email') }}:</strong> {{$user->email}}</p>

                        <h4 class="mt-4">{{ _i('Lista de Roles') }}</h4>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    @foreach($roles AS $item)
                                        <div class="form-check">
                                                {{ Form::checkbox('roles[]', $item->id, (in_array($item->id, $selected)? true : false), ['disabled' => 'disabled', 'id'=>$item->id]) }}
                                                <label class="form-check-label" for="{{$item->id}}">
                                                    {{ $item->name }} ({{$item->description ?: _i('Sin descripcion') }})
                                                </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                <hr>
                <a href="{{ URL::previous() }}" class="btn btn-outline-success float-right">{{_i('Regresar')}}</a>
            </div>
        </div>
    </div>

@endsection