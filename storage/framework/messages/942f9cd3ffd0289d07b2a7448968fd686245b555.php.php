<?php $__env->startSection('title', 'Reembolso de GiftCard'); ?>



<?php $__env->startSection('breadcrumb'); ?>


	<ol class="breadcrumb">

	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>

	    <li class="breadcrumb-item active">Datos de envio de combo</li>

	</ol>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <?php if(session('message')): ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <strong><?php echo e(session('message')); ?></strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

    <?php endif; ?>

    <div class="horizontal-form">

        <form action="<?php echo e(route('giftcards.direccion-agregar')); ?>" class="form-horizontal row" method="post">

            <input type="hidden" class="form-control" name="id" value="<?php echo e($giftcard->id); ?>" required>

        	<?php echo e(csrf_field()); ?>


            <div class="col-md-7 col-xs-12">

                <div class="form-group">

                    <label for="control-label" class="control-label">Nombre</label>

                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>

                </div>

                <div class="form-group">

                    <label for="control-label" class="control-label">Teléfono</label>

                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>

                </div>

                  <div class="form-group">

                    <label for="control-label" class="control-label">Dirección</label>

                    <input type="text" name="direccion" class="form-control" placeholder="Dirección" required>

                </div>


            </div>


            </div>

            <div class="form-group">

                <div class="col-sm-offset-2 col-sm-10">

                    <button type="submit" class="btn btn-success">Enviar</button>

                </div>

            </div>

        </form>

    </div>            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>