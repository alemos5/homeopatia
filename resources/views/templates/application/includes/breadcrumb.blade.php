<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">@yield('nombre_modulo', _i('Panel de Control'))</h3>
        <ol class="breadcrumb">

            @yield('breadcrumb', _i('Inicio'))
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <h2 class="text-primary font-bold text-right">{{ _i('CRÉDITOS') }}: <span class="text-muted">{{Auth::user()->creditos->sum('cantidad')}}</span></h2>
        </div>
        <div style="margin-top: -10px" class="d-flex justify-content-end">
             <h5 class="card-title text-grey">
                 <a href="{{route('creditos.pricing')}}">
                 {{ _i('Obtenga su Abono') }}
                 </a>
             </h5>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->