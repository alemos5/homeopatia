<center>
<div class="collapse show" id="rate1">
	 <span style="font-size: 18px;">Tasa de Cambio para reembolso: <?php echo e(number_format($rate, 2, ',', '.')); ?> | </span>
	<?php if(Auth::user()->role == 'admin'): ?>
	<a class="btn btn-secondary btn-sm" data-toggle="collapse" href="#rate" role="button" aria-expanded="false" aria-controls="collapseExample">Cambiar</a><br>
	<?php endif; ?>
</div>

<?php if(Auth::user()->role == 'admin'): ?>
	<div class="collapse" id="rate">
		<form action="<?php echo e(route('rate.change')); ?>" method="post" class="form-inline">
			<?php echo e(csrf_field()); ?>

			<div class="form-group mx-sm-3 mb-2">
				<label for="tasa" class="sr-only">Nueva tasa</label>
				<input type="number" class="form-control input-sm" name="rate" id="tasa" value="<?php echo e($rate); ?>" placeholder="Nueva tasa">
			</div>
			<button type="submit" class="btn btn-primary btn-sm mb-2">Cambiar</button> <a class="btn btn-warning btn-sm mb-2" data-toggle="collapse" href="#rate" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-close"></span></a>
		</form>
	</div>
<?php endif; ?>
</center>