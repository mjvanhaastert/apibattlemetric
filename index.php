<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include_once 'php/header.php';?>

<body>

<!-- Navigation -->
<?php include_once 'php/navigation.php';?>
<!-- Page Content -->
<?php include_once 'php/apibm.php'; $apicall = ApiBM('server',false,'1106399')?>
<div class="container" style="margin-top: 2%">
    <div class="row">
    <div class="col-lg-6">
    <ul class="list-unstyled">
        <h5><li data-toggle="tooltip" data-placement="left" title="Click me to go to the Battlemetric website"><?php echo '<a style=\'color: inherit;\' href="https://www.battlemetrics.com/servers/'.$apicall['data']['relationships']['game']['data']['id'].'/'.$apicall['data']['id'].'" target="_blank">'.$apicall['data']['attributes']['name'].'</a>';?></li></h5>
        <li><b>Map</b>: <?php echo $apicall['data']['attributes']['details']['map']?></li>
        <li><b>Players: </b><?php echo $apicall['data']['attributes']['players']." / ".$apicall['data']['attributes']['maxPlayers']?></li>
        <li><b>Rust Version: </b> <?php echo $apicall['data']['attributes']['details']['rust_build']?></li>
    </ul>
    </div>
    <div class="col-lg-6">
        <ul class="list-unstyled">
            <h5><li data-toggle="tooltip" data-placement="left" title="Start up rust and connect to this server"><?php echo '<a style=\'color: inherit;\' href="steam://connect/'.$apicall['data']['attributes']['ip'].':'.$apicall['data']['attributes']['port'] . '">'.$apicall['data']['attributes']['ip'].':'.$apicall['data']['attributes']['port'].'</a>';?></li></h5>
            <li><b>World seed/size: </b><?php echo $apicall['data']['attributes']['details']['rust_world_seed'].' / '.$apicall['data']['attributes']['details']['rust_world_size']?></li>
            <li><b>Objects : </b><?php echo $apicall['data']['attributes']['details']['rust_ent_cnt_i'] ?></li>
            <li><b>Fps/average: </b> <?php echo $apicall['data']['attributes']['details']['rust_fps'].' / '.$apicall['data']['attributes']['details']['rust_fps_avg']?></li>
            <li><b>Wipe Date: </b> <?php echo date("H:i A - d M Y",strtotime($apicall['data']['attributes']['details']['rust_last_wipe']))?></li>
        </ul>
    </div>
</div>
<div class="row">
    <table id="tablePlayers" class="table table-striped table-dark" style="width: 80%">
        <thead>
        <tr>
            <th scope="col">#:</th>
            <th scope="col">Player:</th>
            <th scope="col">Entered Server:</th>
            <th scope="col">Add:</th>
        </tr>
        </thead>
        <?php include_once 'php/apibm.php'; listPlayers('1106399');?>
    </table>
    <?php include_once 'php/modal.php'?>
</div>
    <!-- Bootstrap core JavaScript -->
    <?php include_once 'php/bottom.php';?>
</body>
</html>
