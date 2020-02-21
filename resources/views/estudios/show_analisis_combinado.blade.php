<h2>
    {{ _i('Análisis Combinado') }}
    <button class="btn btn-success" type="button" id="btnVerAnalisisC">{{ _i('Mostrar') }}</button>
</h2>
<hr>

{{--<div class="row">--}}
    {{--<div class="col-sm-2">Filtrar:</div>--}}
    {{--<div class="col-sm-2">--}}
        {{--<button class="btn btn-success btn-sm btn-round btn-block" id="btnRMS1" type="button">RMS</button>--}}
    {{--</div>--}}
    {{--<div class="col-sm-2">--}}
        {{--<button class="btn btn-success btn-sm btn-round btn-block" id="btnImpregnancia1" type="button">Impregnancia</button>--}}
    {{--</div>--}}
    {{--<div class="col-sm-2">--}}
        {{--<button class="btn btn-success btn-sm btn-round btn-block" id="btnSecuencia1" type="button">Secuencia</button>--}}
    {{--</div>--}}
    {{--<div class="col-sm-2">--}}
        {{--<button class="btn btn-success btn-sm btn-round btn-block" id="btnConsonante1" type="button">Consonante</button>--}}
    {{--</div>--}}
    {{--<div class="col-sm-2">--}}
        {{--<button class="btn btn-success btn-sm btn-round btn-block" id="btnClave1" type="button">Clave</button>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="row" id="cuadroAnalisisC" style="display: none">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-sm ml-3 mt-3" id="data-table-analisis-combinado">
        <thead class="thead-light">
            <tr>
                <th>&nbsp;</th>
                @foreach($AnalisisCombinados AS $AnalisisCombinado)
                    <th style="text-align: center !important;">{{$AnalisisCombinado['remedio']}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    </div>
</div>