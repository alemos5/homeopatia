@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estudios Remedios
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'estudiosRemedios.store']) !!}

                        @include('estudios_remedios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
