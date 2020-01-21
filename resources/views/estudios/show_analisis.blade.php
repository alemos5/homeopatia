<h2>{{ _i('Análisis') }}</h2>
<hr>

<div class="row">
    <div class="col-sm-2">{{ _i('Ordenar') }}:</div>
    <div class="col-sm-3">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnOrden1" type="button">{{ _i('Alfabeticamente') }}</button>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-outline-success btn-sm btn-round btn-block" id="btnOrden2" type="button">{{ _i('Por Análisis Combinado') }}</button>
    </div>
    <div class="col-sm-3">
        <button class="btn btn-outline-success btn-sm btn-round btn-block" id="btnOrden3" type="button">{{ _i('Por Reino') }}</button>
    </div>
</div>

<div class="row mt-4">
<div class="col-sm-2">{{ _i('Filtrar por') }}:</div>
    <div class="col-sm-2">
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnRMS1" type="button">{{ _i('RMS') }}</button>
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
        <button class="btn btn-success btn-sm btn-round btn-block" id="btnClave1" type="button">{{ _i('Clave') }}</button>
    </div>
</div>

<div class="row mt-4">

    <div class="col-sm-12">
        <table id="cuadro" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>{{ _i('Medicamento') }}</th>
                <th>#{{ _i('Análisis Combinado') }}#</th>
                <th>{{ _i('Reino') }}</th>
                <th>{{ _i('Remedios Clave') }}</th>
                <th>{{ _i('Notas') }}</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>