@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', 'Menu')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{route('menus.index')}}">Menu</a></li>
    <li class="breadcrumb-item active">Detalle</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Menu# <b>{{str_pad($menu->id, 6, '0', STR_PAD_LEFT)}}</b>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <p><strong>Nombre del Menu:</strong> {{$menu->menu}}</p>
                <p><strong>Ruta:</strong> {{$menu->ruta}}</p>
                <p><strong>Padre:</strong> {{$menu->padre}}</p>
                <p><strong>Nivel:</strong> {{$menu->nivel}}</p>

                <hr>
                <a href="{{ URL::previous() }}" class="btn btn-outline-success float-right">{{_i('Regresar')}}</a>
            </div>
        </div>
    </div>

@endsection