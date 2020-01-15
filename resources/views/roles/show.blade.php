@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', 'Roles')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
    <li class="breadcrumb-item active">Detalle</li>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Roles# <b>{{str_pad($role->id, 6, '0', STR_PAD_LEFT)}}</b>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <p><strong>Nombre:</strong> {{$role->name}}</p>
                <p><strong>Slug:</strong> {{$role->slug}}</p>
                <p><strong>Descripcion:</strong> {{$role->description}}</p>

                <h4 class="mt-4">Permiso Especial</h4>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input name="special" type="radio" class="with-gap" id="all-access" value="all-access" {{ old('special', $role->special) == 'all-access' ? 'checked="checked"' : '' }} disabled>
                        <label for="all-access">Acceso Total</label>

                        <input name="special" type="radio" class="with-gap" id="no-access" value="no-access" {{ old('special', $role->special) == 'no-access' ? 'checked="checked"' : '' }} disabled>
                        <label for="no-access">Ningún Acceso</label>
                    </div>
                </div>

                <h4 class="mt'4">Lista de Permisos</h4>
                <div class="form-group">
                    <div class="col-sm-10">
                        @foreach($permissions AS $item)
                            <div class="form-check">
                                {{ Form::checkbox('permissions[]', $item->id, (in_array($item->id, $selected)? true : false), ['disabled' => 'disabled', 'id'=>$item->id]) }}
                                <label class="form-check-label" for="{{$item->id}}">
                                    {{ $item->name }} ({{$item->description ?: 'Sin descripción' }})
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