<?php $__env->startSection('title', 'Transferencias'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
        <li class="breadcrumb-item active">Transferencias</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive m-t-40">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Títular</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">GiftCard</th>
                    <th class="text-center">Banco</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">US$</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center th-options">Opciones</th>
                </tr>
            </thead>
            <tbody id="transfers">
                <?php $__currentLoopData = $transfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($transfer->name_titular); ?></td>
                        <td><?php echo e($transfer->user->name . ' ' . $transfer->user->surname); ?> </td>
                        <td><?php echo e($transfer->giftcard->code); ?></td>
                        <td><?php echo e($transfer->bank); ?></td>
                        <td><?php echo e(date('d-m-Y', strtotime($transfer->date))); ?></td>
                        <td><?php echo e($transfer->giftcard->amount); ?></td>
                        <td>
                            <?php switch($transfer->status):
                                case ('active'): ?>
                                    Activa
                                    <?php break; ?>
                                <?php case ('deactivated'): ?>
                                    Desactivada
                                    <?php break; ?>
                                <?php case ('refund_process'): ?>
                                    Proceso de reembolso
                                    <?php break; ?>
                                <?php case ('refunded'): ?>
                                    Reembolsado
                                    <?php break; ?>
                                <?php case ('pending'): ?>
                                    No pagada
                                    <?php break; ?>
                                <?php case ('cancel'): ?>
                                    Cancelada
                                    <?php break; ?>
                            <?php endswitch; ?>                          
                        </td>
                        <td class="d-flex">
                            
                            <span class="m-1">
                                <a href="<?php echo e(route('transfers.show', [$transfer->id])); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </span>

                            
                            <?php if($transfer->capture): ?>
                                <span class="m-1" data-target="#showCapture<?php echo e($transfer->id); ?>" data-toggle="modal">
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver captura">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <?php echo $__env->make('admin.transfers.show-capture-modal', ['transfer' => $transfer], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endif; ?>

                            <?php if(Auth::user()->role === 'admin'): ?>
                                <?php echo $__env->make('admin.transfers.options.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endif; ?>

                            
                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>