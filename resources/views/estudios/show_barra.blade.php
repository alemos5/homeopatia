<h2>{{ _i('Impregnancia Simetría') }}</h2><hr>
<div class="row">
    {{--                <div class="col-sm-12">--}}
    <div style="width: 100%; height:55px;" class="progress">
        <div class="progress-bar" role="progressbar" style="background-color: #ff465f;width: <?php echo $result['reino']["animal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["animal"]; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $result['reino']["animal"]; ?>%</div>
        <div class="progress-bar" role="progressbar" style="background-color: #35d238 ;width: <?php echo $result['reino']["vegetal"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["vegetal"]; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $result['reino']["vegetal"]; ?>%</div>
        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-size: 30px; " aria-valuenow="<?php echo $result['reino']["mineral"]; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $result['reino']["mineral"]; ?>%</div>
    </div>
    {{--                </div>--}}
</div>
<div class="row">
    {{--                <div style="width: 100%" class="col-sm-12">--}}
    <div style="width: <?php echo $result['reino']["animal"]; ?>%; color: #ff465f; font-weight: bold">
        <?php echo $result['reino']["animal"]; ?>% {{ _i('Animal') }}
    </div>
    <div style="width: <?php echo $result['reino']["vegetal"]; ?>%; color: #35d238; font-weight: bold">
        <?php echo $result['reino']["vegetal"]; ?>% {{ _i('Vegetal') }}
    </div>
    <div class="text-info" style="width: <?php echo $result['reino']["mineral"]; ?>%; font-weight: bold">
        <?php echo $result['reino']["mineral"]; ?>% {{ _i('Mineral') }}
    </div>
    {{--                </div>--}}
</div>
