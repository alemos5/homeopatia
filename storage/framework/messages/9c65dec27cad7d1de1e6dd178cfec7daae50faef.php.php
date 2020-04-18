<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">
    
    <title>Homeopatía</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template CSS -->

    

    
    <link href="/css/material/style.css" rel="stylesheet">





<!-- You can change the theme colors from here -->
    <link href="/css/colors/blue.css" id="theme" rel="stylesheet">

    <style>
        #tablaMedicamentos {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #f2f4f8;
        }

        th {
            font-weight: bold;
        }

        #tablaMedicamentos tr:nth-child(even) {
            background-color: #f2f4f8;
        }

        .bgGris{
            background-color: rgba(15, 15, 20, 0.67);
            color: #FFF;
        }

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
            width: <?php echo $animal; ?>%;
            color: #ff465f;
            font-weight: bold
        }
        .textmineral{
            width: <?php echo $mineral; ?>%;
            color: #1e88e5;
            font-weight: bold
        }
        .textvegetal{
            width: <?php echo $vegetal; ?>%;
            color: #35d238;
            font-weight: bold
        }
    </style>
</head>

<body>

<table width="100%">
    <tr>
        <td colspan="2">
            <img src="./images/logo_completo.png" height="60"/>
        </td>
    </tr>
    <tr>
        <td>
            <h4 style="margin-bottom: 0px"><?php echo e(_i('Datos Personales')); ?></h4>
            <hr>
        </td>
        <td>
            <h4 style="margin-bottom: 0px"><?php echo e(_i('Impregnancia')); ?></h4>
            <hr>
        </td>
    </tr>
    <tr>
        <td>
            <?php if($estudios->tipo=='humano'): ?>
                <table width="100%" style="font-size: 12px">




                    <tr>
                        <td><b><?php echo e(_i('Nombre')); ?>:</b></td>
                        <td><?php echo $estudios->h_nombre; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Apellido')); ?>:</b></td>
                        <td><?php echo $estudios->h_apellido; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Apodo')); ?>:</b></td>
                        <td><?php echo $estudios->h_identifica; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Iniciales')); ?>:</b></td>
                        <td><?php echo $estudios->h_iniciales; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Fecha de Nacimiento')); ?>:</b></td>
                        <td><?php echo $estudios->h_dia; ?> - <?php echo $estudios->h_mes; ?> - <?php echo $estudios->h_anio; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('País de Nacimiento')); ?>:</b></td>
                        <td><?php if($estudios->pais): ?><?php echo e($estudios->pais->name); ?><?php endif; ?></td>
                    </tr>
                </table>
            <?php else: ?>
                <table width="100%" style="font-size: 12px">
                    <tr>
                        <td><b><?php echo e(_i('Especie')); ?></b></td>
                        <td><?php echo $estudios->a_especie; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Nombre del Dueño')); ?></b></td>
                        <td><?php echo $estudios->a_duenio; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Nombre del Animal')); ?></b></td>
                        <td><?php echo $estudios->a_animal; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Iniciales')); ?></b></td>
                        <td><?php echo $estudios->a_iniciales; ?></td>
                    </tr>
                    <tr>
                        <td><b><?php echo e(_i('Fecha de Nacimiento')); ?></b></td>
                        <td><?php echo $estudios->a_dia; ?> - <?php echo $estudios->a_mes; ?> - <?php echo $estudios->a_anio; ?></td>
                    </tr>
                </table>
            <?php endif; ?>
        </td>
        <td style="vertical-align: top">
            <table width="100%">

                <?php
                switch ($pregnancia) {
                    case "1":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "2":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "3":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "4":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "5":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "6":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "7":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                        </tr>
                        <?php
                    break;
                    case "8":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                        </tr>
                    <?php
                    break;
                    case "9":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                <?php echo e(_i('Simetría')); ?>: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br><?php echo e(_i('Animal')); ?></td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br><?php echo e(_i('Mineral')); ?></td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br><?php echo e(_i('Vegetal')); ?></td>
                        </tr>
                    <?php
                    break;
                }
                ?>
            </table>
        </td>
    </tr>
</table>

<h4 style="margin-bottom: 0px"><?php echo e(_i('Analisis')); ?></h4>
<hr>
<table id="tablaMedicamentos" border="1" cellspacing="0" width="100%" style="font-size: 18px">
    <thead>







        <tr style="padding: 5px" class="bgGris">
            <th style="width: 5%" class="text-center"><?php echo e(_i('Reino')); ?></th>
            <th style="width: 30%" class="text-center"><?php echo e(_i('Medicamento')); ?></th>

            <th style="width: 10%" class="text-center"><?php echo e(_i('SAC')); ?></th>
            <th style="width: 5%" class="text-center"><?php echo e(_i('Claves')); ?></th>
            <th style="width: 20%" class="text-center"><?php echo e(_i('Notas')); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php echo $htmltabla; ?>

    </tbody>
</table>


</body>

</html>
