<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <?php include 'config_files/api_config.php';
    session_start();

?>

    <title>Small Group of Friends - really small group... like maby 3 guys... or 4</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php">Search</a>
            </li>
        </ul>
    </div>
</nav>


<main role="main" class="container">

    <div class="starter-template">
        <div class="containerServerInfo">
            <div class="row">
                <div id="table-top-left" class="col-md-6">
                <?php

                echo($serverName . "<br>". $serverIp.":".$serverPort. "<br>" . " Players:"."$serverPlayers"."/".$serverMaxPlayers)?></div>

                <div id="table-top-right" class="col-md-6">
                <?php echo ("Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " . $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . date("H:i  d-M-Y", strtotime($serverRustLastSeedChange)) . "<br>" . "Wiped: " . date("H:i  d-M-Y", strtotime($serverRustLastWipe)));
                // Create connection

                // Create connection
//                $conn = new mysqli($servername, $username, $password, $database);
//                // Check connection
//                if ($conn->connect_error) {
//                    die("Connection failed: " . $conn->connect_error);
//                }
//                ?>
                </div>
            </div>
    </div>

            <div class="col-md-12">
                <div><h2>Players on server</h2></div>
                <?php
                echo "<table id='player_server' class=\"table table-bordered table-dark\">";
                echo "<th scope=\"col\">number</th>";
                echo "<th scope=\"col\">ID:</th>";
                echo "<th scope=\"col\">Nickname:</th>";
                echo "<th scope=\"col\">Joined:</th>";
                for ($i = 0; $i < $serverPlayers; $i++) {

                    echo "<tr id='tr_player'>";
                    echo "<td>";
                    echo $i + 1;
                    echo "</td>";
                    echo "<td>";
                    echo $obj->included[$i]->relationships->player->data->id;
                    echo "</td>";
                    echo "<td id='td_player'>";
                    echo $obj->included[$i]->attributes->name;
                    echo "</td>";
                    echo "<td>";
                    echo date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
                    echo "</td>";
                    echo "</tr>";

                };
                echo "</table>";
                ?>

            </div><!---------------------- div list server player -------------------->

    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
