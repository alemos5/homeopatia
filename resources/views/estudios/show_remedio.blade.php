<h2>{{ _i('Análisis desplegado') }}</h2>
<hr>
<div class="table-responsive">
    <table style="width: 100%; font-size: 14px;" id="data-table" class="table table-striped table-bordered dt-responsive nowrap">
        <thead>
        <tr>
            <th>{{ _i('ID') }}</th>
            <th>{{ _i('Reino') }}</th>
            <th>{{ _i('Medicamento') }}</th>
            <th>{{ _i('RSM') }}</th>
            <th>{{ _i('Consonantes') }}</th>
            <th>{{ _i('Clave') }}</th>
            <th>{{ _i('Secuencia') }}</th>
            <th>{{ _i('Recetado') }}</th>
        </tr>
        </thead> <?php  ?>
        <tbody>
        @foreach($remedios as $remedio)
            <tr>
                <td>
                    {{$remedio->id}}
                </td>
                <td>

                    <?php
                    $dataReino = \App\Http\Controllers\EstudiosController::getImgReino($remedio->pregnancia);
                    //                    var_dump($dataReino);
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            {{$dataReino['reino']}}
                        </div>
                        <div class="col-sm-6">
                            <img src="{{$dataReino['img']}}">
                        </div>
                    </div>


                </td>
                <td>
                    {{$remedio->nombre}}
                </td>
                <td>
                    <?php
                    echo \App\Http\Controllers\EstudiosController::getRsm(
                        $remedio->id,
                        $data['iniciales'],
                        $data['dia'],
                        $data['mes'],
                        $data['anio'],
                        $data['nombre'],
                        $data['apellido']
                    );
                    ?>
                </td>

                <td>

                    <?php
                    if ($remedio->puros == 1) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>

                </td>
                <td>

                    <?php
                    if ($remedio->tipoRemedioClave == 1) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>

                </td>
                <td>

                    <?php
                    $secuencia = \App\Http\Controllers\EstudiosController::getSecuencia($remedio->id, $data['apodo']);
                    if ($secuencia) {
                    ?><i class="fas fa-star"></i><?php
                    }
                    ?>

                </td>
                <td>

                    <input type="checkbox" value="{{$remedio->id}}" name="check_{{$remedio->id}}" id="check_{{$remedio->id}}" class="js-switch"/>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>