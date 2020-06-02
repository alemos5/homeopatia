    @extends('templates.material.main')
@section('css')
    <style>

        .modal {
            max-width: 800px !important;
            height: auto !important;
        }

        .blocker {
            z-index: 99 !important;
        }

        .modal a.close-modal {
            top: 5px !important;
            right: 5px !important;
        }

        #cuadro td, #cuadro th{
            border-left: 1px solid;
            border-right: 1px solid;
        }
    </style>

@endsection
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', _i('Estudios'))
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('estudios.index')}}">{{ _i('Estudios') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Crear') }}</li>
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
                <a href="#ex3" rel="modal:open" class="btn btn-warning">{{ _i('Instrucciones de Uso') }}</a>
                <hr>
                <div class="row">


                    {!! Form::open(['route' => 'estudios.store', 'style'=>'width: 100%']) !!}

                        @include('estudios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@include('modal_instrucciones')

@section('js')
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

@endsection
