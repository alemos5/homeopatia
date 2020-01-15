<!-- Tipo Field -->
<?php if(!isset($estudios)): ?>
    <div class="row">
        <div class="form-group col-sm-12">
            <label for=""><b>Tipo:</b></label>
            <select class="form-control" name="tipo" id="tipo" required>
                <option value="" disabled selected>Seleccione un Tipo</option>
                <option value="12" <?php if(@old("tipo")==12): ?> selected <?php endif; ?>>Animal</option>
                <option value="97" <?php if(@old("tipo")==97): ?> selected <?php endif; ?>>Humano</option>
            </select>
            <?php echo $errors->first('tipo', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
    </div>
<?php endif; ?>

<div id="EHumano">
    <div class="row">
        <!-- H Nombre Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Nombre:</b></label>
            <?php echo Form::text('h_nombre', null, ['class' => 'form-control'. ( $errors->has('h_nombre') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('h_nombre', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>

        <!-- H Apellido Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Apellido:</b></label>
            <?php echo Form::text('h_apellido', null, ['class' => 'form-control'. ( $errors->has('h_apellido') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('h_apellido', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>

        <!-- H Identifica Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Apodo:</b></label>
            <?php echo Form::text('h_identifica', null, ['class' => 'form-control'. ( $errors->has('h_identifica') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('h_identifica', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
    </div>

    <div class="row">

        <!-- H Iniciales Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Iniciales:</b></label>
            <?php echo Form::text('h_iniciales', null, ['class' => 'form-control'. ( $errors->has('h_iniciales') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('h_iniciales', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
    <?php if(!isset($estudios)): ?>
        <!-- H Pais Field -->
        <div class="form-group col-sm-4">
            <div class="form-group">
                <label for=""><b>País:</b></label>
                <select class="form-control <?php echo e($errors->has('pais_id') ? ' is-invalid' : ''); ?>" name="pais_id" id="pais_id">
                    <option value="">Seleccione un País</option>
                    <?php foreach ($paises as $pais) { ?>
                    <option value="<?php echo e($pais->id); ?>" <?php if(isset($estudios)): ?> <?php if($pais->id==$estudios->pais_id): ?> selected="selected" <?php endif; ?> <?php endif; ?> <?php if(@old("pais_id")==$pais->id): ?> selected="selected" <?php endif; ?>><?php echo e($pais->name); ?></option>
                    <?php } ?>
                </select>
                <?php echo $errors->first('pais_id', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

            </div>
        </div>
        <!-- Fecha Field -->
        <div class="form-group col-sm-4">
            <label for="fecha_humano"><b>Fecha:</b></label>
            <input class="form-control <?php echo e($errors->has('fecha_humano') ? ' is-invalid' : ''); ?>" id="fecha_humano" name="fecha_humano" type="date" value="<?php echo e(($fecha)? $fecha : ''); ?>">
            <?php echo $errors->first('fecha_humano', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
    <?php endif; ?>
    </div>
</div>

<div id="EAnimal">
    <div class="row">
        <!-- H Nombre Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Especie:</b></label>
            <?php echo Form::text('a_especie', null, ['class' => 'form-control'. ( $errors->has('a_especie') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('a_especie', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>


        <!-- H Apellido Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Nombre del Dueño:</b></label>
            <?php echo Form::text('a_duenio', null, ['class' => 'form-control'. ( $errors->has('a_duenio') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('a_duenio', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>


        <!-- H Identifica Field -->
        <div class="form-group col-sm-4">
            <label for=""><b>Nombre del Animal:</b></label>
            <?php echo Form::text('a_animal', null, ['class' => 'form-control'. ( $errors->has('a_animal') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('a_animal', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>

    </div>

    <div class="row">

        <!-- H Iniciales Field -->
        <div class="form-group col-sm-6">
            <label for=""><b>Iniciales:</b></label>
            <?php echo Form::text('a_iniciales', null, ['maxlength'=> '2', 'class' => 'form-control'. ( $errors->has('a_iniciales') ? ' is-invalid' : '' )]); ?>

            <?php echo $errors->first('a_iniciales', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
        <?php if(!isset($estudios)): ?>
        <div class="form-group col-sm-6">
            <label for="fecha_animal"><b>Fecha de Nacimiento:</b></label>
            <input class="form-control <?php echo e($errors->has('fecha_animal') ? ' is-invalid' : ''); ?>" id="fecha_animal" name="fecha_animal" type="date" value="<?php echo e(($fecha)? $fecha : ''); ?>">
            <?php echo $errors->first('fecha_animal', '<span class="invalid-feedback"><strong>:message</strong></span>'); ?>

        </div>
        <?php endif; ?>
    </div>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <input type="hidden" id="ip" name="ip" value="127.0.0.1">
    <input type="hidden" id="user_agent" name="user_agent" value="Firefox">

    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('estudios.index'); ?>" class="btn btn-success">Cancelar</a>
</div>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function () {
            let estudioTipo = '<?php echo (isset($estudios->tipo))? $estudios->tipo : 0; ?>';

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
                } else {
                    $('#EHumano').css('display', 'none');
                    $('#EAnimal').css('display', 'none');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>