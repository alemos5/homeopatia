<!--/*************************************************************
**      MODAL Documento                                     **
**************************************************************/-->
<div id="ex2" class="modal">
    <h2 class="modal-title" id="tituloModal2"></h2>
    <hr>
    <div class="row">
        <iframe id="iframeDoc" src="" frameborder="0" width="100%" height="600"></iframe>
    </div>
    <hr>
    <a href="#" rel="modal:close" class="btn btn-success waves-effect float-right">{{ _i('Cerrar') }}</a>
</div>
<!--************************************************************--><!--/*************************************************************
**      MODAL Documento                                     **
**************************************************************/-->
<div id="ModalDocument" class="modal">
    <h2 class="modal-title" id="tituloModal2"></h2>
    <hr>
    <div class="row">
        <?php
        $html = \App\Models\Articulos::where('id', '=', '77')->first();
//        echo json_encode($html->introtext);
//        die();
        echo _i($html->introtext);


        ?>



    </div>
    <hr>
    <a href="#" rel="modal:close" class="btn btn-success waves-effect float-right">{{ _i('Cerrar') }}</a>
</div>
<!--************************************************************-->
