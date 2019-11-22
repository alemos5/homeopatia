@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(session('info'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="alert alert-success text-center">{{session('info')}}</div>
                        </div>
                    </div>
                </div>
            @endif

            {!! Form::open(['route' => 'users.store']) !!}
                @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-danger">
                            <div class="card-icon">
                                <i class="material-icons">account_box</i>
                            </div>
                            <h4 class="card-title">Nuevo Usuario</h4>
                        </div>
                        <div class="card-body">

                            @include('users.partials.formadd')

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('users.index') }}" class="btn btn-default">{{__('Volver')}}</a>
                </div>
                <div class="col-sm-6 text-right">
                    {{ Form::submit('Guardar', ['class' => 'btn btn-danger'])}}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection