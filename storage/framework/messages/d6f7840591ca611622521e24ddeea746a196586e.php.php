
<h2><?php echo e(_i('Impregnancia')); ?></h2>
<hr>
<div class="row">
    <div style="width: 100%; height:55px;" class="progress">
        <input type="hidden" id="simetriaEstudio" value="<?php echo $result['general']['pregnancia']; ?>">
        <?php
        $simetria = $result['general']['pregnancia'];
        $animal = $result['reino']["animal"];
        $mineral = $result['reino']["mineral"];
        $vegetal = $result['reino']["vegetal"];
?>
            <style>
                .bganimal{
                    background-color: #ff465f;
                    width: <?php echo $animal; ?>%;
                }
                .bgmineral{
                    background-color: #1e88e5;
                    width: <?php echo $mineral; ?>%;
                }
                .bgvegetal{
                    background-color: #35d238;
                    width: <?php echo $vegetal; ?>%;
                }
                .textanimal{
                    width: <?php echo $mineral; ?>%;
                    color: #ff465f;
                    font-weight: bold
                }
                .textmineral{
                    width: <?php echo $mineral; ?>%;
                    color: #1e88e5;
                    font-weight: bold
                }
                .textvegetal{
                    width: <?php echo $mineral; ?>%;
                    color: #35d238;
                    font-weight: bold
                }
            </style>
        <?php
            switch ($simetria) {
                case "1":
                    ?>
                        <div class="progress-bar bganimal" role="progressbar" aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                        <div class="progress-bar bgmineral" role="progressbar"  aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="textanimal" ><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                    </div>
                    <?php
                    break;
                case "2":
                    ?>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bganimal" role="progressbar"  aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textvegetal" ><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                    </div>
                    <?php
                    break;
                case "3":
                    ?>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bganimal" role="progressbar" aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                    </div>
                    <?php
                    break;
                case "4":
                    ?>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bganimal" role="progressbar"  aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                    </div>
                    <?php
                    break;
                case "5":
                    ?>
                    <div class="progress-bar bganimal" role="progressbar" aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bgvegetal" role="progressbar" aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textanimal" ><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                    </div>
                    <?php
                    break;
                case "6":
                    ?>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bgmineral" role="progressbar"  aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bganimal" role="progressbar" aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textvegetal" ><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                    </div>
                    <?php
                    break;
                case "7":
                    ?>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bganimal" role="progressbar"  aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textvegetal" ><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                    </div>
                    <?php
                    break;
                case "8":
                    ?>
                    <div class="progress-bar bgmineral" role="progressbar" aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bganimal" role="progressbar"  aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textanimal"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                    </div>
                    <?php
                    break;
                case "9":
                    ?>
                    <div class="progress-bar bganimal" role="progressbar" aria-valuenow="<?php echo $animal; ?>" aria-valuemin="0" aria-valuemax="100"><h5 class="font-weight-bold text-left text-white pl-3"><?php echo e(_i('Simetría')); ?>: <?php echo $simetria?></h5></div>
                    <div class="progress-bar bgmineral" role="progressbar"  aria-valuenow="<?php echo $mineral; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bgvegetal" role="progressbar"  aria-valuenow="<?php echo $vegetal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="textanimal" ><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></div>
                        <div class="textmineral"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></div>
                        <div class="textvegetal"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></div>
                    </div>
                    <?php
                    break;
            }
            ?>

