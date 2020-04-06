<h2>
    {{ _i('Análisis Combinado') }}
    <button class="btn btn-success" type="button" id="btnVerAnalisisC">{{ _i('Mostrar') }}</button>
</h2>
<hr>

<div class="row mt-4">
    <div class="col-sm-2" align="center">{{ _i('Variables consideradas para el Análisis Combinado') }}:</div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnRMS1" type="button">{{ _i('RSM') }}</button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnImpregnancia1" type="button">{{ _i('Impregnancia') }}</button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnSecuencia1" type="button">{{ _i('Secuencia') }}</button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnConsonante1" type="button">{{ _i('Consonante') }}</button>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnClave1" type="button">{{ _i('Claves') }}</button>
    </div>
</div>

<div class="row" id="cuadroAnalisisC">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-sm ml-3 mt-3" id="data-table-analisis-combinado">
        <thead style="background-color: #818181; color: #FFF">
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
