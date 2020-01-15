<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $medicamento->id; ?></p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo $medicamento->nombre; ?></p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <p><?php echo $medicamento->descripcion; ?></p>
</div>

<!-- Image Field -->
<div class="form-group">
    <?php echo Form::label('image', 'Image:'); ?>

    <p><?php echo $medicamento->image; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $medicamento->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $medicamento->updated_at; ?></p>
</div>

