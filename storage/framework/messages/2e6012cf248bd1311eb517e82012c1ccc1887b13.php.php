<!--MODAL ACTUALIZAR FOTO PERFIL-->
<div class="modal fade" id="ModalFotoPerfil">
    <div class="modal-dialog">
        <form action="<?php echo e(route('fotoPerfil')); ?>" method="post" name="formUpdateFoto" id="formUpdateFoto" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white">Cambiar Foto del Perfil</h4>
                </div>
                <div class="modal-body text-center">
                    <input type="file" class="form-control" name="fotoPerfil" id="fotoPerfil" required>
                    <div id="DivErrorFoto" class="text-center"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success btn-sm" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success btn-sm" name="btnFoto" id="btnGuardar">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>