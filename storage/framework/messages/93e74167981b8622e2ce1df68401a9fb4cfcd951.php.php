<!-- Tipo Field -->
<h2>Datos Personales</h2><hr>
<div class="row">
    <div class="col-sm-4"><b>Tipo de Estudio</b></div>
    <div class="col-sm-8"><?php echo $estudios->tipo; ?></div>
</div>
<?php if($estudios->tipo=='humano'): ?>
<div class="row">
    <div class="col-sm-4"><b>Nombre</b></div>
    <div class="col-sm-8"><?php echo $estudios->h_nombre; ?></div>
</div>
<div class="row">
    <div class="col-sm-4"><b>Apellido</b></div>
    <div class="col-sm-8"><?php echo $estudios->h_apellido; ?></div>
</div>
<div class="row">
    <div class="col-sm-4"><b>Apodo</b></div>
    <div class="col-sm-8"><?php echo $estudios->h_identifica; ?></div>
</div>
<div class="row">
    <div class="col-sm-4"><b>Iniciales</b></div>
    <div class="col-sm-8"><?php echo $estudios->h_iniciales; ?></div>
</div>
<div class="row">
    <div class="col-sm-4"><b>Fecha de Nacimiento</b></div>
    <div class="col-sm-8"><?php echo $estudios->h_dia; ?> - <?php echo $estudios->h_mes; ?> - <?php echo $estudios->h_anio; ?></div>
</div>
<div class="row">
    <div class="col-sm-4"><b>Pais de Nacimiento</b></div>
    <div class="col-sm-8"><?php if($estudios->pais): ?><?php echo e($estudios->pais->name); ?><?php endif; ?></div>
</div>

<?php else: ?>
    <div class="row">
        <div class="col-sm-4"><b>Especie</b></div>
        <div class="col-sm-8"><?php echo $estudios->a_especie; ?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Nombre del Dueño</b></div>
        <div class="col-sm-8"><?php echo $estudios->a_duenio; ?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Nombre del Animal</b></div>
        <div class="col-sm-8"><?php echo $estudios->a_animal; ?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Iniciales</b></div>
        <div class="col-sm-8"><?php echo $estudios->a_iniciales; ?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Fecha de Nacimiento</b></div>
        <div class="col-sm-8"><?php echo $estudios->a_dia; ?> - <?php echo $estudios->a_mes; ?> - <?php echo $estudios->a_anio; ?></div>
    </div>
<?php endif; ?>