@section('styles')
    <link href="{{ asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
@endsection

<!-- Tipo Field -->
@if(!isset($estudios))
    <div class="row">
        <div class="form-group col-sm-12">
            <label for=""><b>{{ _i('Tipo') }}:</b></label>
            <select class="form-control" name="tipo" id="tipo" required
                    title="{{_i('Nombre/s:Los datos deben ser cargados en la planilla de consulta sin acentos o simbolos. Debe ingresarse el texto con las letras puras correspondientes (no agregar letras con ´, ¨, ^, \', `, ~, etc.).')}}">
                <option value="97" @if(@old("tipo")==97) selected @endif>{{ _i('Humano') }}</option>
                <option value="12" @if(@old("tipo")==12) selected @endif>{{ _i('Animal') }}</option>
            </select>
            {!! $errors->first('tipo', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>
    </div>
@endif
<div id="EAnimal">
    <div class="row">
        <!-- H Nombre Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Especie') }}:</b></label>
            {!! Form::text('a_especie', null, ['class' => 'form-control'. ( $errors->has('a_especie') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('a_especie', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>


        <!-- H Apellido Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Nombre del Dueño') }}:</b></label>
            {!! Form::text('a_duenio', null, ['class' => 'form-control'. ( $errors->has('a_duenio') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('a_duenio', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>


        <!-- H Identifica Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Nombre del Animal') }}:</b></label>
            {!! Form::text('a_animal', null, ['class' => 'form-control'. ( $errors->has('a_animal') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('a_animal', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>

    </div>

    <div class="row">

        <!-- H Iniciales Field -->
        <div class="form-group col-sm-6">
            <label for=""><b>{{ _i('Iniciales') }}:</b></label>
            {!! Form::text('a_iniciales', null, ['maxlength'=> '2', 'class' => 'form-control'. ( $errors->has('a_iniciales') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('a_iniciales', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>
        @if(!isset($estudios))
            <div class="form-group col-sm-6">
                <label for="fecha_animal"><b>{{ _i('Fecha de Nacimiento') }}:</b></label>
                <input type="text" name="fecha_animal" id="fecha_animal" class="form-control {{$errors->has('fecha_animal') ? ' is-invalid' : ''}}" value="{{ @old("fecha_animal", ($fecha)? $fecha : '') }}">
                {!! $errors->first('fecha_animal', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
            </div>
        @endif
    </div>

</div>
<div id="EHumano">
    <div class="row">
        <!-- H Nombre Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Nombre/s') }}:</b></label>
            {!! Form::text('h_nombre', null, ['class' => 'form-control'. ( $errors->has('h_nombre') ? ' is-invalid' : '' ), "title"=>_i("Nombre/s:Los datos deben ser cargados en la planilla de consulta sin acentos o simbolos. Debe ingresarse el texto con las letras puras correspondientes (no agregar letras con ´, ¨, ^, \', `, ~, etc.).")]) !!}
            {!! $errors->first('h_nombre', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>

        <!-- H Apellido Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Apellido/s') }}:</b></label>
            {!! Form::text('h_apellido', null, ["title"=>_i("Apellido/s::Los datos deben ser cargados en la planilla de consulta sin acentos o simbolos. Debe ingresarse el texto con las letras puras correspondientes (no agregar letras con ´, ¨, ^, \', `, ~, etc.)."), 'class' => 'form-control'. ( $errors->has('h_apellido') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('h_apellido', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>

        <!-- H Identifica Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Nombre por el cual se reconoce') }}:</b></label>
            {!! Form::text('h_identifica', null, ["title"=>_i("Apodo::en algunas ocasiones la persona se identifica, no con alguno de sus nombres propios, sino con un &quot;apodo&quot; que reemplaza en importancia a su propio nombre."),'class' => 'form-control'. ( $errors->has('h_identifica') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('h_identifica', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>
    </div>

    <div class="row">

        <!-- H Iniciales Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>{{ _i('Iniciales') }}:</b></label>
            {!! Form::text('h_iniciales', null, ["title"=>_i("Iniciales::Los datos deben ser cargados en la planilla de consulta sin acentos o simbolos. Debe ingresarse el texto con las letras puras correspondientes (no agregar letras con ´, ¨, ^, \', `, ~, etc.)"),'class' => 'form-control'. ( $errors->has('h_iniciales') ? ' is-invalid' : '' )]) !!}
            {!! $errors->first('h_iniciales', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>
    @if(!isset($estudios))
        <!-- H Pais Field -->
        <div class="form-group col-sm-4">
            <div class="form-group">
                <label for=""><b>{{ _i('País') }}:</b></label>
                <select class="form-control {{$errors->has('pais_id') ? ' is-invalid' : ''}}" name="pais_id" id="pais_id">
                    <option value="">{{ _i(':: Seleccione un País ::') }}</option>
                    <?php foreach ($paises as $pais) { ?>
                    <option value="{{$pais->id}}" @isset($estudios) @if($pais->id==$estudios->pais_id) selected="selected" @endif @endisset @if(@old("pais_id")==$pais->id) selected="selected" @endif>{{$pais->name}}</option>
                    <?php } ?>
                </select>
                {!! $errors->first('pais_id', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
            </div>
        </div>
        <!-- Fecha Field -->
        <div class="form-group col-sm-4">
            <label for="fecha_humano"><b>{{ _i('Fecha') }}:</b></label>
            <input type="text" name="fecha_humano" id="fecha_humano" class="form-control {{$errors->has('fecha_humano') ? ' is-invalid' : ''}}" value="{{ @old("fecha_humano", ($fecha)? $fecha : '') }}">
            {!! $errors->first('fecha_humano', '<span class="invalid-feedback"><strong>:message</strong></span>') !!}
        </div>
    @endif
    </div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <input type="hidden" id="ip" name="ip" value="127.0.0.1">
    <input type="hidden" id="user_agent" name="user_agent" value="Firefox">

    <button type="submit" class="btn btn-success" onclick="return confirm('{{_i('¿Esta Realmente seguro de crear este Estudio con estos Datos?')}}')">{{_i('Realizar Estudio')}}</button>
    <a href="{!! route('estudios.index') !!}" class="btn btn-success">{{ _i('Cancelar') }}</a>
</div>

@section('js')
    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/moment/moment.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script src="{{asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{asset('vendor/wrappixel/material-pro/4.2.1/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
@endsection
@section('scripts')
    <script>
        $('#fecha_animal').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY',
            maxDate: new Date(),
            lang: 'es',
            cancelText: 'Cancelar',
            okText: 'Siguiente',
            'default': 'now',
            time: false
        });
        $('#fecha_humano').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY',
            maxDate: new Date(),
            lang: 'es',
            cancelText: 'Cancelar',
            okText: 'Siguiente',
            'default': 'now',
            time: false
        });
        $(document).ready(function () {
            let estudioTipo = '{!! (isset($estudios->tipo))? $estudios->tipo : 0 !!}';

            if(estudioTipo!=0){
                if (estudioTipo == 'humano') {
                    $('#EHumano').css('display', 'block');
                    $('#EAnimal').css('display', 'none');
                } else if (estudioTipo == 'animal') {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'block');
                } else {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'none');
                }
            }else{
                if ($('#tipo').val() == '97') {
                    $('#EHumano').css('display', 'block');
                    $('#EAnimal').css('display', 'none');
                } else if ($('#tipo').val() == '12') {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'block');
                } else {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'none');
                }
            }

            $('#tipo').change(function () {

                if ($('#tipo').val() == '97') {
                    $('#EHumano').css('display', 'block');
                    $('#EAnimal').css('display', 'none');
                } else if ($('#tipo').val() == '12') {

                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'block');
                    document.getElementById("EAnimal").style.display = "block";
                } else {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'none');
                }
            });
        });
    </script>
@endsection
