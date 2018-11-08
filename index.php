<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include_once 'php/header.php';?>

<body>

<!-- Navigation -->
<?php include_once 'php/navigation.php';?>
<!-- Page Content -->
<?php include_once 'php/apibm.php'; $apicall = ApiBM('server',false,'1106399')?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Server Information</h1>
            <p class="lead">All the server information you need, oh and its clickable so for people that are lazy, go click on the ip</p>
            <ul class="list-unstyled">
                <li><?php echo '<a style=\'color: inherit;\' href="https://www.battlemetrics.com/servers/'.$apicall['data']['relationships']['game']['data']['id'].'/'.$apicall['data']['id'].'" target="_blank">'.$apicall['data']['attributes']['name'].'</a>';?></li>
                <li><?php echo '<a style=\'color: inherit;\' href="steam://connect/'.$apicall['data']['attributes']['ip'].':'.$apicall['data']['attributes']['port'] . '">'.$apicall['data']['attributes']['ip'].':'.$apicall['data']['attributes']['port'].'</a>';?></li>
                <li><b>Map</b>: <?php echo $apicall['data']['attributes']['details']['map']?></li>
                <li><b>Rust Version:</b> <?php echo $apicall['data']['attributes']['details']['rust_build']?></li>
            </ul>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript -->
<?php include_once 'php/bottom.php';?>

</body>

</html>
