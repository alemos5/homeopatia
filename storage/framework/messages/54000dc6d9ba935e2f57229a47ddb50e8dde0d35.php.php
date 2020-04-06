<?php $__env->startSection('title', 'Reembolso de GiftCard'); ?>



<?php $__env->startSection('breadcrumb'); ?>

    <b>Tasa: <?php echo e(number_format($rate, 2, ',', '.')); ?></b>

	<ol class="breadcrumb">

	    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>

	    <li class="breadcrumb-item active">Reembolso de GiftCard</li>

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

        <form action="<?php echo e(route('transfers.store', [$giftcard->id])); ?>" class="form-horizontal row" method="post">

            <input type="hidden" class="form-control" name="fees" value="0" readonly required>

        	<?php echo e(csrf_field()); ?>


            <div class="col-md-7 col-xs-12">

                <div class="form-group">

                    <label for="control-label" class="control-label">Nombre de titular</label>

                    <input type="text" name="name_titular" class="form-control<?php echo e($errors->has('name_titular') ? ' is-invalid' : ''); ?>" value="<?php echo e(( ! empty($bankAccount->name_titular) ? $bankAccount->name_titular : Auth::user()->name . ' ' . Auth::user()->surname)); ?>" placeholder="Nombre de titular" required>

                    <?php if($errors->has('name_titular')): ?>

                        <span class="invalid-feedback">

                            <strong><?php echo e($errors->first('name_titular')); ?></strong>

                        </span>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label for="control-label"class="control-label">Cédula de intentidad</label>

                    <input type="text" name="dni" class="form-control<?php echo e($errors->has('dni') ? ' is-invalid' : ''); ?>" value="<?php echo e(( ! empty($bankAccount->dni) ? $bankAccount->dni : '')); ?>" placeholder="Cédula de identidad" required>

                    <?php if($errors->has('dni')): ?>

                        <span class="invalid-feedback">

                            <strong><?php echo e($errors->first('dni')); ?></strong>

                        </span>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label class="control-label">Entidad bancaria</label>

                    <input type="text" name="bank" class="form-control<?php echo e($errors->has('bank') ? ' is-invalid' : ''); ?>" value="<?php echo e(( ! empty($bankAccount->bank) ? $bankAccount->bank : '')); ?>" placeholder="Entidad bancaria" required>

                    <?php if($errors->has('bank')): ?>

                        <span class="invalid-feedback">

                            <strong><?php echo e($errors->first('bank')); ?></strong>

                        </span>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label class="control-label">Cuenta bancaria</label>

                    <input type="text" name="bank_account" class="form-control<?php echo e($errors->has('bank_account') ? ' is-invalid' : ''); ?>" value="<?php echo e(( ! empty($bankAccount->bank_account) ? $bankAccount->bank_account : '')); ?>" placeholder="Cuenta bancaria" required>

                    <?php if($errors->has('bank_account')): ?>

                        <span class="invalid-feedback">

                            <strong><?php echo e($errors->first('bank_account')); ?></strong>

                        </span>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label class="control-label">Correo eléctronico</label>

                    <input type="email" class="form-control" name="email" value="<?php echo e($giftcard->user->email); ?>" required>

                </div>

            </div>

            <div class="col-md-5 col-xs-12">

                <div class="form-group">

                    <label class="control-label">Monto GiftCard</label>

                    <input type="text" class="form-control" name="amount" value="<?php echo e('US$ ' . $giftcard->amount); ?>" readonly required>

                </div>

                <div class="form-group">

                    <label class="control-label">Tipo de cambio (Bs)</label>

                    <input type="text" class="form-control" name="rate" value="<?php echo e(number_format($rate, 2, ',', '.')); ?>" readonly required>

                </div>

                <div class="row">

<!--                     <div class="form-group col-12 col-sm-6">

                        <label class="control-label">Cargos de operación (US$)</label>

                        <input type="text" class="form-control" name="fees" value="<?php echo e($giftcard->amount * 0.05); ?>" readonly required>

                    </div> -->

                


                <div class="form-group col-12 col-sm-6">

                    <label class="control-label">Total reembolsable (Bs)</label>

                    <input type="text" class="form-control" name="total_reimbursable" value="<?php echo e(number_format(($giftcard->amount) * $rate, 2, ',', '.')); ?>" readonly required>

                </div>

                    <div class="form-group col-12 col-sm-6">

                        <label class="control-label">Fecha de depósito</label>

                        <input type="text" class="form-control" name="date" value="<?php echo e(date('d-m-Y', strtotime($now))); ?>" readonly required>

                    </div>

                </div>


                <div class="row">
                    
                <div class="form-group col-12 col-sm-6">

                    <label class="control-label">Código GiftCard</label>

                    <input type="text" class="form-control" name="giftcard_code" value="<?php echo e($giftcard->code); ?>" placeholder="Código GiftCard" readonly required>

                </div>

                </div>



            </div>



            <?php if(( empty($bankAccount->id))): ?>

                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10">

                        <div class="checkbox">

                            <label>

    							<input type="checkbox" name="remember"> Recordar cuenta

    						</label>

                        </div>

                    </div>

                </div>                

            <?php endif; ?> 

            

            <div class="form-group">

                <div class="col-sm-offset-2 col-sm-10">

                    <button type="submit" class="btn btn-success">Reembolsar</button>

                </div>

            </div>

        </form>

    </div>            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>