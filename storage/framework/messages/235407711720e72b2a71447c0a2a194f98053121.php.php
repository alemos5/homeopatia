<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', _i('Id')); ?>

    <p><?php echo $medicamento->id; ?></p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', _i('Nombre')); ?>

    <p><?php echo $medicamento->nombre; ?></p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('descripcion', _i('Descripcion')); ?>

    <p><?php echo $medicamento->descripcion; ?></p>
</div>

<!-- Image Field -->
<div class="form-group">
    <?php echo Form::label('image', _i('Imagen')); ?>

    <p><?php echo $medicamento->image; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', _i('Created At')); ?>

    <p><?php echo $medicamento->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', _i('Updated At')); ?>

    <p><?php echo $medicamento->updated_at; ?></p>
</div>

