@extends('templates.application.master')

@section('template-custom-js')

    <script src="/vendor/wrappixel/material-pro/4.2.1/material/js/custom.min.js"></script>

    <script>
        $(function () {
            $("#back-to-login").click(function () {
                $("#loginform").slideDown()
                $("#recoverform").fadeOut()
            })
        })
    </script>

@endsection

@section('layout-content')

    <div id="main-wrapper">
        <section id="wrapper" class="login-register login-sidebar" style="background-image:url(/vendor/wrappixel/material-pro/4.2.1/assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body" style="overflow-x: hidden; overflow-y:auto;">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            @include('templates.application.components.navbar-lang')
                        </div>
                    </div>
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <a href="javascript:void(0)" class="text-center db">
                            <img src="{{asset('images/logo-web-casillero.jpg')}}" alt="Home" style="height: 7em"/>
                            <br/>
                        </a>

                        <div class="form-group m-t-40">
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="email" type="email" placeholder="{{ _i('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" placeholder="{{ _i('Contraseña') }}" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> {{ _i('Ingresar') }}</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                {{--   <div class="checkbox checkbox-primary pull-left p-t-0">
                                      <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                      <label for="checkbox-signup"> {{ _i('Remember Me') }} </label>
                                  </div> --}}
                                <a href="javascript:void(0)" id="to-recover" class="text-dark">
                                    <i class="fa fa-lock m-r-5"></i>
                                    {{ _i('¿Olvidaste tu contraseña?') }}
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="{{route('login.facebook')}}" class="btn btn-facebook waves-effect btn-circle waves-light" data-toggle="tooltip" title="{{ _i('Ingresar con Facebook') }}">
                                        <i aria-hidden="true" class="fab fa-facebook"></i>
                                    </a>
                                    <a href="{{route('login.google')}}" class="btn btn-googleplus waves-effect btn-circle waves-light" data-toggle="tooltip" title="{{ _i('Ingresar con Google') }}">
                                        <i aria-hidden="true" class="fab fa-google-plus"></i>
                                    </a>
                                    {{--<a href="{{route('login.twitter')}}" class="btn btn-twitter waves-effect btn-circle waves-light" data-toggle="tooltip" title="Ingresar con Twitter">--}}
                                        {{--<i aria-hidden="true" class="fab fa-twitter"></i>--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="col-sm-12">
                                <p class="text-center">{{ _i('¿No tienes una cuenta?') }} <a href="{{ route('register') }}" class="text-primary m-l-5"><b></br>{{ _i('Registrate ahora') }}</b></a></p>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>{{ _i('Recuperar Contraseña') }}</h3>
                                <p class="text-muted">{{ _i('Ingresa tu correo y te enviaremos las instrucciones') }}</p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="emailRecover" type="email" placeholder="{{ _i('Email') }}" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                        type="submit"> {{ _i('Enviar enlace') }}</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="javascript:void(0)" id="back-to-login" class="text-dark pull-right">
                                    <i class="fa fa-backward m-r-5"></i>
                                    {{ _i('Volver al inicio') }}
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
