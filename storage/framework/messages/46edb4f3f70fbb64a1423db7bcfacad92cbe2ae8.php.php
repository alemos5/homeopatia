<div class="row">
    <div class="col-md-3">
        <div class="card bg-primary p-20">
            <div class="media widget-ten">
                <div class="media-body media-text-right">
                    <a href="<?php echo e(route('giftcards.buy')); ?>">
                    	<p class="m-b-0">Comprar GiftCard</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success p-20">
            <div class="media widget-ten">
                <div class="media-body media-text-right">
                    <a href="<?php echo e(route('giftcards.index')); ?>">
                    	<p class="m-b-0">Solicitar reembolso</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger p-20">
            <div class="media widget-ten">
                <div class="media-body media-text-right">
                    <a href="<?php echo e(route('transfers.index')); ?>">
                    	<p class="m-b-0">Transferencias</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>