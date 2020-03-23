<h2><?php echo e(_i('Impregnancia')); ?></h2>
<hr>
<div class="row">
    <div style="width: 100%; height:55px;" class="progress">
        <?php if($result['reino']["animal"]>$result['reino']["vegetal"]){
                if($result['reino']["animal"]>$result['reino']["mineral"]){ ?>
                    <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%;" aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?=$result['general']['pregnancia']?></h5></div>
                    <?php if($result['reino']["vegetal"]>$result['reino']["mineral"]){ ?>
                        <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                            <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                            <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        </div>
                    <?php }else{ ?>
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <div class="row">
                            <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                            <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                            <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        </div>
                    <?php } ?>
                <?php }else{ ?>
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?=$result['general']['pregnancia']?></h5></div>
                    <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%;" aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                    </div>
                <?php }
            }else{
                if($result['reino']["vegetal"]>$result['reino']["mineral"]){ ?>
                    <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?=$result['general']['pregnancia']?></h5></div>
                    <?php if($result['reino']["animal"]>$result['reino']["mineral"]){ ?>
                            <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%;" aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="row">
                                <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                                <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                                <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                            </div>
                    <?php }else{?>
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%;" aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                            <div class="row">
                                <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                                <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                                <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                            </div>
                    <?php } ?>
                <?php }else{?>
                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?=$result['general']['pregnancia']?></h5></div>
                        <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%;" aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold"><?php echo $result['reino']["mineral"]; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                            <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold"><?php echo $result['reino']["animal"]; ?>% <br><?php echo e(_i('Animal')); ?></div>
                            <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold"><?php echo $result['reino']["vegetal"]; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        </div>
                <?php } ?>
            <?php } ?>
