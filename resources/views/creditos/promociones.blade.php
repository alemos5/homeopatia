@extends('templates.material.main')
@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection
@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush
@section('nombre_modulo', 'Obtenga su Abono')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home-one')}}">{{ _i('Inicio') }}</a></li>
    <li class="breadcrumb-item"><a href="{{route('creditos.index')}}">{{ _i('Créditos') }}</a></li>
    <li class="breadcrumb-item active">{{ _i('Obtenga su Abono') }}</li>
@endsection
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            @if(session('message'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="alert alert-danger text-center">{{session('message')}}</div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body pricing-body pl-4 pr-4">
                                <div class="alert alert-primary">
                                    <h3 class="text-center">{{ _i('¡Abono Promocional') }} <br> {{ _i('Primera Compra!') }}</h3>
                                </div>
                                <h2 class="text-center">{{$promocion->creditos}}</h2>
                                <p class="text-center">{{ _i('Créditos') }}</p>
                                <div class="price-table-content text-center">
                                    <div class="price-row"><h4>US$ {{number_format($promocion->costo,0,'','.')}}</h4></div>
                                    <div class="price-row"><i class="fas fa-piggy-bank"></i> {{ _i('Ud. Ahorra') }} US$ {{number_format($promocion->ahorro,0,'','.')}}</div>
                                    <div class="price-row"> {{ _i('Precio por Cŕedito') }} US$ {{number_format($promocion->precioxc,2,',','.')}}</div>
                                    <div class="price-row">
                                        <a href="{{ route('payment', $promocion->id) }}" class="btn btn-warning">
                                            {{ _i('Comprar') }} <i class="fab fa-cc-paypal fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    {{ _i('¿Busca precios especiales? Recuerde contactar a su representante local ')}}<a href="#">{{ _i('AQUÍ') }}</a> {{ _i('y obtenga promociones y descuentos para su país.') }}
                                </p>
                                <p>
                                    {{ _i('Si usted tiene archivos PDF de estudios de versiones anteriores del Algoritmo Candegabe y que desea tener en esta nueva versión sin gastar nuevamente un crédito, contáctenos a ')}}<a href="mailto:info@algoritmocandegabe.com">info@algoritmocandegabe.com</a> {{ _i('informándonos la cantidad de archivos PDF que desea digitalizar.') }}
                                </p>
                                <p>
                                    {{ _i('El costo de digitalización es de US$ 2.- por PDF.') }}
                                </p>
                                <p>
                                    {{ _i('Recuerde que debe tener el archivo para enviarlo y que así podamos digitalizarlo.') }}
                                </p>
                                <hr>
                                <div class="row pricing-plan">
                                    @foreach ($princings as $princing)
                                        <div class="col-md-2 col-xs-12 col-sm-6 no-padding">
                                            <div class="pricing-box @if ($princing->etiqueta) featured-plan @endif">
                                                <div class="pricing-body @if (!$princing->etiqueta) b-l @endif">
                                                    <div class="pricing-header">
                                                        @if ($princing->etiqueta)
                                                            <h3 class="price-lable text-white bg-warning"> {{ _i($princing->etiqueta) }}</h3>
                                                        @endif
                                                        <h3 class="text-center">{{$princing->creditos}}</h3>
                                                        <p class="uppercase">{{ _i('Crédito') }}</p>
                                                    </div>
                                                    <div class="price-table-content">
                                                        <div class="price-row"><h5>US$ {{number_format($princing->costo,0,'','.')}}</h5></div>
                                                        <div class="price-row"><i class="fas fa-piggy-bank hidden-sm-down"></i> {{ _i('Ud. Ahorra') }} <h4>{{number_format($princing->ahorro,0,'','.')}}</h4></div>
                                                        <div class="price-row">{{ _i('Precio por') }} <br>{{ _i('Crédito') }} <h4>US$ {{number_format($princing->precioxc,2,',','.')}}</h4></div>
                                                        <div class="price-row">
                                                            <a href="{{ route('payment', $princing->id) }}" class="btn btn-warning">
                                                                {{ _i('Comprar') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
