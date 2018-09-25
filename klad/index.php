<?php
//$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session,identifier';
$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);

$serverName = $obj->data->attributes->name;
$serverIp = $obj->data->attributes->ip;
$serverPort = $obj->data->attributes->port;
$serverPlayers = $obj->data->attributes->players;
$serverMaxPlayers = $obj->data->attributes->maxPlayers;
$serverDetails = $obj->data->attributes->details;
$serverRustBuild = $obj->data->attributes->details->rust_build;
$serverRustEntCnt = $obj->data->attributes->details->rust_ent_cnt_i;
$serverRustWorldSeed = $obj->data->attributes->details->rust_world_seed;
$serverRustWorldSize = $obj->data->attributes->details->rust_world_size;
$serverRustLastSeedChange = $obj->data->attributes->details->rust_last_seed_change;
$serverRustLastWipe = $obj->data->attributes->details->rust_last_wipe;
//$serverPlayerStart ["included"][]["attributes"]["start"];
//$serverPlayerStop = $obj["included"]["attributes"]["stop"];
//$old_date = date('l, F d y h:i:s');
//date("d/m/Y H:i A",strtotime($serverPlayerStart));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">

        <?php

        //print_r($serverName ." ". $serverIp.":".$serverPort. "<br>" . " Players:"."$serverPlayers"."/".$serverMaxPlayers. "<br>" .
          //  "Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " .
            //$serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . date("H:i  d-M-Y", strtotime($serverRustLastSeedChange)) . "<br>" . "Wiped: " . date("H:i  d-M-Y", strtotime($serverRustLastWipe)) . "<br>");

        //if ($serverRustLastSeedChange == $serverRustLastWipe and $serverRustEntCnt < 20)
        //    print "Server has bin wiped today";
        //else
        //    print "The wipe is fake, we check if the seed chance and 'last wipe' date are the same and if the entity is lower then 20";

        //if ($serverRustLastSeedChange == $serverRustLastWipe)
         //   if ($serverRustEntCnt <= 20)
              //  print "Server has bin wiped";
          //  else
            //    print "Server is not wiped";

        ?>
        <div><h2>Players on server</h2></div>


        <?php
        $json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
        $jsondata = file_get_contents($json_string);
        $obj = json_decode($jsondata);

        $serverName = $obj->data->attributes->name;
        $serverPlayers = $obj->data->attributes->players;
        echo "<table border='1' width='100%'>";
        echo "<th>number</th>";
        echo "<th>ID:</th>";
        echo "<th>Nickname:</th>";
        echo "<th>Joined:</th>";
        for ($i = 0; $i < $serverPlayers; $i++) {
            $playerID = $obj->included[$i]->relationships->player->data->id;
            $playerNick = $obj->included[$i]->attributes->name;
            $playerConnect = date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
            echo "<tr>";
            echo "<td>";
            echo $i + 1;
            echo "</td>";
            echo "<td>";
            echo $playerID;
            echo "</td>";
            echo "<td>";
            echo $playerNick;
            echo "</td>";
            echo "<td>";
            echo $playerConnect;
            echo "</td>";
            echo "</tr>";
        };
        echo "</table> ";
        ?>
        <!--
        //$ServerPlayerStartDate = $serverPlayerStart = date($obj["included"][$i]["attributes"]["start"]);
        //print gettype($obj["included"][0]["attributes"]["start"])
        //var_dump($obj["included"]["1"]["relationships"]["player"]["data"]["id"]);

        //
        for ($i = 0; $i < $serverPlayers; $i++) {
          print $obj->included->$i->attributes->name . "</br>";

            //  var_dump(json_decode($obj["included"][$i]["relationships"]["player"]["data"]["id"], true));
          //  print $obj["included"][$i]["relationships"]["player"]["data"]["id"]; //. " " . $obj["included"][$i]["attributes"]["name"] . "</br>";
        //}
        //$someJSON = json_decode($obj);
        //echo $someJSON;
            echo $obj->included->$i->attributes->name;
    print $obj->included->$i->attributes->name
-->



    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.min.js"><\/script>')</script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
