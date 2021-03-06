<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    {{--<link rel="icon" type="image/png" sizes="16x16" href="/vendor/wrappixel/material-pro/4.2.1/assets/images/favicon.png">--}}
    <title>Homeopatía</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/wrappixel/material-pro/4.2.1/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template CSS -->

    {{--Defaults to Material and Blue--}}

    {{-- ### Choose only the one you want ### --}}
    <link href="/css/material/style.css" rel="stylesheet">
{{--<link href="/css/dark/style.css" rel="stylesheet">--}}
{{--<link href="/css/minisidebar/style.css" rel="stylesheet">--}}
{{--<link href="/css/horizontal/style.css" rel="stylesheet">--}}
{{--<link href="/css/material-rtl/style.css" rel="stylesheet">--}}

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
            <h4 style="margin-bottom: 0px">{{ _i('Datos Personales') }}</h4>
            <hr>
        </td>
        <td>
            <h4 style="margin-bottom: 0px">{{ _i('Impregnancia') }}</h4>
            <hr>
        </td>
    </tr>
    <tr>
        <td>
            @if($estudios->tipo=='humano')
                <table width="100%" style="font-size: 12px">
{{--                    <tr>--}}
{{--                        <td><b>{{ _i('Tipo de Estudio') }}:</b></td>--}}
{{--                        <td>{!! $estudios->tipo !!}</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td><b>{{ _i('Nombre') }}:</b></td>
                        <td>{!! $estudios->h_nombre !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Apellido') }}:</b></td>
                        <td>{!! $estudios->h_apellido !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Apodo') }}:</b></td>
                        <td>{!! $estudios->h_identifica !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Iniciales') }}:</b></td>
                        <td>{!! $estudios->h_iniciales !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Fecha de Nacimiento') }}:</b></td>
                        <td>{!! $estudios->h_dia !!} - {!! $estudios->h_mes !!} - {!! $estudios->h_anio !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('País de Nacimiento') }}:</b></td>
                        <td>@if($estudios->pais){{ $estudios->pais->name }}@endif</td>
                    </tr>
                </table>
            @else
                <table width="100%" style="font-size: 12px">
                    <tr>
                        <td><b>{{ _i('Especie') }}</b></td>
                        <td>{!! $estudios->a_especie !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Nombre del Dueño') }}</b></td>
                        <td>{!! $estudios->a_duenio !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Nombre del Animal') }}</b></td>
                        <td>{!! $estudios->a_animal !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Iniciales') }}</b></td>
                        <td>{!! $estudios->a_iniciales !!}</td>
                    </tr>
                    <tr>
                        <td><b>{{ _i('Fecha de Nacimiento') }}</b></td>
                        <td>{!! $estudios->a_dia !!} - {!! $estudios->a_mes !!} - {!! $estudios->a_anio !!}</td>
                    </tr>
                </table>
            @endif
        </td>
        <td style="vertical-align: top">
            <table width="100%">

                <?php
                switch ($pregnancia) {
                    case "1":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                        </tr>
                        <?php
                    break;
                    case "2":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                        </tr>
                        <?php
                    break;
                    case "3":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                        </tr>
                        <?php
                    break;
                    case "4":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                        </tr>
                        <?php
                    break;
                    case "5":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                        </tr>
                        <?php
                    break;
                    case "6":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                        </tr>
                        <?php
                    break;
                    case "7":
                    ?>
                        <tr>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                        </tr>
                        <?php
                    break;
                    case "8":
                    ?>
                        <tr>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                        </tr>
                    <?php
                    break;
                    case "9":
                    ?>
                        <tr>
                            <td width="<?php echo $animal; ?>%" style="background-color: #ff142b; height: 30px; color: #FFF; padding-left: 10px; font-weight: bold">
                                {{ _i('Simetría') }}: <?=$pregnancia?>
                            </td>
                            <td width="<?php echo $mineral; ?>%" style="background-color: #396ac2; height: 30px; color: #ffffff"></td>
                            <td width="<?php echo $vegetal; ?>%" style="background-color: #72fe61; height: 30px"></td>

                        </tr>
                        <tr>
                            <td style="width: <?php echo $animal; ?>%; color: #ff465f; font-weight: bold; font-size: 12px"><?php echo $animal; ?>% <br>{{ _i('Animal') }}</td>
                            <td style="width: <?php echo $mineral; ?>%; color: #396AC2; font-weight: bold; font-size: 12px"><?php echo $mineral; ?>% <br>{{ _i('Mineral') }}</td>
                            <td style="width: <?php echo $vegetal; ?>%; color: #2da630; font-weight: bold; font-size: 12px"><?php echo $vegetal; ?>% <br>{{ _i('Vegetal') }}</td>
                        </tr>
                    <?php
                    break;
                }
                ?>
            </table>
        </td>
    </tr>
</table>

<h4 style="margin-bottom: 0px">{{ _i('Analisis') }}</h4>
<hr>
<table id="tablaMedicamentos" border="1" cellspacing="0" width="100%" style="font-size: 18px">
    <thead>
{{--    <tr>--}}
{{--        <th style="padding: 5px" class="bgGris">{{ _i('Medicamento') }}</th>--}}
{{--        <th class="bgGris">{{ _i('SAC') }}</th>--}}
{{--        <th class="bgGris">{{ _i('Reino') }}</th>--}}
{{--        <th class="bgGris">{{ _i('Claves') }}</th>--}}
{{--        <th class="bgGris">{{ _i('Notas') }}</th>--}}
{{--    </tr>--}}
        <tr style="padding: 5px" class="bgGris">
            <th style="width: 5%" class="text-center">{{ _i('Reino') }}</th>
            <th style="width: 30%" class="text-center">{{ _i('Medicamento') }}</th>
{{--            <th style="display:none;" class="text-center">{{ _i('Pregnancia') }}</th>--}}
            <th style="width: 10%" class="text-center">{{ _i('SAC') }}</th>
            <th style="width: 5%" class="text-center">{{ _i('Claves') }}</th>
            <th style="width: 20%" class="text-center">{{ _i('Notas') }}</th>
        </tr>
    </thead>
    <tbody>
        {!! $htmltabla !!}
    </tbody>
</table>


</body>

</html>
