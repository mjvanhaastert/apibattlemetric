<?php
////$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session,identifier';
////$jsondata = file_get_contents($json_string);
////$obj = json_decode($jsondata,true);
////
////$serverName = $obj["data"]["attributes"]["name"];
////$serverIp = $obj["data"]["attributes"]["ip"];
////$serverPort = $obj["data"]["attributes"]["port"];
//////$serverPlayers = $obj["data"]["attributes"]["players"];
////$serverMaxPlayers = $obj["data"]["attributes"]["maxPlayers"];
////$serverDetails = $obj["data"]["attributes"]["details"];
////$serverRustBuild = $obj["data"]["attributes"]["details"]["rust_build"];
////$serverRustEntCnt = $obj["data"]["attributes"]["details"]["rust_ent_cnt_i"];
////$serverRustWorldSeed = $obj["data"]["attributes"]["details"]["rust_world_seed"];
////$serverRustWorldSize = $obj["data"]["attributes"]["details"]["rust_world_size"];
////$serverRustLastSeedChange = $obj["data"]["attributes"]["details"]["rust_last_seed_change"];
////$serverRustLastWipe = $obj["data"]["attributes"]["details"]["rust_last_wipe"];
////$playerName = $obj["included"]["1"]["attributes"]["name"];
////$playerId = $obj["included"][0]["attributes"]["relationships"]["player"]["data"]["id"];
////$ServerPlayerStartDate = $serverPlayerStart = date($obj["included"]["attributes"]["start"]);
////$serverPlayerStop = $obj["included"]["attributes"]["stop"];
////$old_date = date('l, F d y h:i:s');
////$date("d/m/Y H:i A",strtotime($serverPlayerStart));
//
//$apiPlayer = '/players';
//$apiPlayerSearch = 'players?filter[search]';
//$apiServer = '/servers';
//$apiServerInclude= '/include?include=session';
//
//$serverName = $obj->data->attributes->name;
//$serverIp = $obj->data->attributes->ip;
//$serverPort = $obj->data->attributes->port;
//$serverPlayers = $obj->data->attributes->players;
//$serverMaxPlayers = $obj->data->attributes->maxPlayers;
//$serverDetails = $obj->data->attributes->details;
//$serverRustBuild = $obj->data->attributes->details->rust_build;
//$serverRustEntCnt = $obj->data->attributes->details->rust_ent_cnt_i;
//$serverRustWorldSeed = $obj->data->attributes->details->rust_world_seed;
//$serverRustWorldSize = $obj->data->attributes->details->rust_world_size;
//$serverRustLastSeedChange = $obj->data->attributes->details->rust_last_seed_change;
//$serverRustLastWipe = $obj->data->attributes->details->rust_last_wipe;
//
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!--    <link rel="icon" href="http://getbootstrap.com/favicon.ico">-->
<!--    --><?php //include '../config_files/api_config.php';?>
<!--    <title>Starter Template for Bootstrap</title>-->
<!---->
<!--    <!-- Bootstrap core CSS -->-->
<!--    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!---->
<!--    <!-- Custom styles for this template -->-->
<!--    <link href="starter-template.css" rel="stylesheet">-->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">-->
<!--    <a class="navbar-brand" href="#">Navbar</a>-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarsExampleDefault">-->
<!--        <ul class="navbar-nav mr-auto">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Link</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</nav>-->
<!---->
<!--<main role="main" class="container">-->
<!---->
<!--    <div class="starter-template">-->
<!---->
<!--            <div><h2>Players on server</h2></div>-->
<!--            --><?php
//            echo "<table border='1' width='100%'>";
//            echo "<th>number</th>";
//            echo "<th>ID:</th>";
//            echo "<th>Nickname:</th>";
//            echo "<th>Joined:</th>";
//            for ($i = 0; $i < $serverPlayers; $i++) {
//                echo "<tr>";
//                echo "<td>";
//                echo $i + 1;
//                echo "</td>";
//                echo "<td>";
//                echo $obj->included[$i]->relationships->player->data->id;
//                echo "</td>";
//                echo "<td>";
//                echo $obj->included[$i]->attributes->name;
//                echo "</td>";
//                echo "<td>";
//                echo date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
//                echo "</td>";
//                echo "</tr>";
//            };
//            echo "</table>";
//            ?>
<!---->
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</main><!-- /.container -->-->
<!---->
<!--<!-- Bootstrap core JavaScript-->
<!--================================================== -->-->
<!--<!-- Placed at the end of the document so the pages load faster -->-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.min.js"><\/script>')</script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<div id="div_search"><h3>Lets see if the fucker is online...</h3></div>

<form action="index.php" method="post">
    Search for a player : <input type="text" name="playername" /><br />
    <input type="submit" name="Submit" value="Search" />
</form>

<?php

$results = $_POST['playername'];
$json_player = 'https://api.battlemetrics.com/players?filter[search]='. $results . '&filter[server][search]=1106399';
$json_player_data = file_get_contents($json_player);
$objp = json_decode($json_player_data);

echo "<table id='table_search_player'>";
echo "<th>id uit json:</th>";
echo "<th>id uit api:</th>";
echo "<th>Nickname: uit json</th>";
echo "<th>Nickname: uit api</th>";
echo "<th>First Played <br>uit json</th>";
echo "<th>First Played <br>on a server:</th>";
echo "<th>Last Timed Played <br>uit json</th>";
echo "<th>Last Timed Played <br>on European Survivor:</th>";
for ($i = 0; $i < count($objp->data); $i++) {
    $SearchPlayer  = json_encode($objp);
    $SearchPlayerDecode = json_decode($SearchPlayer, true);
    if ( isset( $_POST['Submit'] ) ){

        echo "<tr id='tableId' >";
        echo "<td id='{$objp->data[$i]->attributes->id}'>";
        echo $SearchPlayerDecode->data[$i]->attributes->id;
        echo "</td>";
        echo "<td>";
        echo $objp->data[$i]->attributes->id;
        echo "</td>";
        echo "<td>";
        echo $SearchPlayerDecode->data[$i]->attributes->name;
        echo "</td>";
        echo "<td>";
        echo $objp->data[$i]->attributes->name;
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($SearchPlayerDecode->data[$i]->attributes->createdAt));
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->createdAt));
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($SearchPlayerDecode->data[$i]->attributes->updatedAt));
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->updatedAt));
        echo "</td>";
        mysqli_query($conn, "INSERT INTO search_results (search_id, search_name,search_createdAt,search_updatedAt)
                                VALUES ('{$objp->data[$i]->attributes->id}', '{$objp->data[$i]->attributes->name}', '{$objp->data[$i]->attributes->createdAt}', '{$objp->data[$i]->attributes->updatedAt}')");


    }
}



?>
<script>
    $(document).ready(function(){
        $("echo").delegate("tr", "click",function(){
            $("td").css("background-color", "pink");
        });
    });
</script>