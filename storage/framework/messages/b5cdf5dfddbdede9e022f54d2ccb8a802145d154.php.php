<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="row">
				<?php if(!empty($results)): ?>
					<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(substr($item->price, 0, 1) == "$"): ?>
							<script>
						    	
						  	</script>
						<?php endif; ?>
						<?php 
							$porcentaje = rand(10,35);
							$antesp = $porcentaje/100;
							$antesp = $antesp+1;
						?>  

						<div class="col-md-3">
							<div class="card" style="margin-top: 20px;">
								<div class="card-header">
									<h2 style="color:#e47911;"><?php echo e($porcentaje); ?>% OFF</h2>
								</div>
								<div class="card-body">
									<h5 class="card-title" style="color: #0066c0;">
										<?php echo e(substr($item->title,0,32)); ?>... 
									</h5>
									<?php 
						              $pfiltro = str_replace ('$','',$item->price);
						              $antes = number_format($pfiltro*$antesp,2, '.', ',');
						            ?>
						            <?php if($antes>0): ?> 
						               <?php $strike = "Antes : USD".$antes; ?>
						            <?php else: ?>
						            	<?php $strike = '' ?>
						            <?php endif; ?>
						            <?php if(isset($item->prime)): ?> 
						            <?php  $prime = ''; ?>
						            <?php else: ?>
						            <?php  $prime = ''; ?>
						            <?php endif; ?>
						            <?php if(empty($item->image)): ?>
						            <?php $imgs = ""; ?>
						            <?php endif; ?>
									<center><img style="max-height: 180px; margin: 0 auto" src="<?php echo e($item->image); ?>" class="img-responsive" alt="" title="" /></center>
								</div>
								<div class="card-footer" style="font-weight: 400 !important;">
									<?php echo e($strike); ?> <br>
						            <?php echo e('US'.$item->price.$prime); ?>

								</div>
							</div>
						</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
			<div style="margin-top: 20px;margin-bottom: 20px;">
				<nav aria-label="...">
				  <ul class="pagination">
				  	<?php if($page-1 < 1): ?>
				    <li class="page-item disabled">
				      	<a class="page-link" href="/results/<?php echo e($page-1); ?>?busqueda=<?php echo e($busqueda); ?>">Anterior</a>
				    </li>
				    <?php else: ?>
				    <li class="page-item">
				      	<a class="page-link" href="/results/<?php echo e($page-1); ?>?busqueda=<?php echo e($busqueda); ?>">Anterior</a>
				    </li>
				    <?php endif; ?>
				    <li class="page-item disabled"><a href="#" class="page-link">Pagina <?php echo e($results[0]->paginaActual); ?> de <?php echo e($results[0]->ultimaPagina); ?></a></li>
				    <li class="page-item">
				      <a class="page-link" href="/results/<?php echo e($page+1); ?>?busqueda=<?php echo e($busqueda); ?>">Siguiente</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>