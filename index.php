<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <?php include 'config_files/api_config.php';
    $servername = "localhost";
    $username = "mjvanh1q_battlemetrics";
    $database = "mjvanh1q_battlemetrics";
    $password = "Oi&M6{X}bzuN";


    ?>
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <div class="containerServerInfo">
            <div class="row">
                <div id="table-top-left" class="col-md-6">
                <?php echo($serverName . "<br>". $serverIp.":".$serverPort. "<br>" . " Players:"."$serverPlayers"."/".$serverMaxPlayers)?></div>

                <div id="table-top-right" class="col-md-6">
                <?php echo ("Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " . $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . date("H:i  d-M-Y", strtotime($serverRustLastSeedChange)) . "<br>" . "Wiped: " . date("H:i  d-M-Y", strtotime($serverRustLastWipe)));
                // Create connection

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }









//                "<br>";
//                $username = "mjvanh1q_battlemetrics";
//                $password = "Oi&M6{X}bzuN";
//                $hostname = "localhost";
//
//                //connection to the database
//                $dbhandle = mysql_connect($hostname, $username, $password)
//                or die("Unable to connect to MySQL");
//                echo "Connected to MySQL" . "<br>";
//
//                //select a database to work with
//                $selected = mysql_select_db("mjvanh1q_battlemetrics",$dbhandle)
//                or die("mjvanh1q_battlemetrics");

//                //execute the SQL query and return records
//                $result = mysql_query("SELECT id, nick,createdAt,updatedAt FROM search");
//
//                //fetch tha data from the database
//                while ($row = mysql_fetch_array($result)) {
//                    echo "ID:".$row{'id'}." Name:".$row{'nick'}."Year: ". //display the results
//                        $row{'createdAt'}."<br>",$row{'updatedAt'}."<br>";
//                }
//                //close the connection
//                mysql_close($dbhandle);
//
                ?>
                </div>
                <div class="col-md-12">
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
                        echo "<th>select:</th>";
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
                                echo "<td>";
                                echo "<button onclick='myFunction()'>Click me</button>";
                                echo "</td>";
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

                </div> <!---------------------- div search player -------------------->
                <div class="col-md-12">
                    <div><h2>Players on server</h2></div>
                    <?php
                    echo "<table id='player_server' border='1' width='100%'>";
                    echo "<th>number</th>";
                    echo "<th>ID:</th>";
                    echo "<th>Nickname:</th>";
                    echo "<th>Joined:</th>";
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
        </div>

<!--        --><?php

//        echo($serverName ." ". $serverIp.":".$serverPort. "<br>" . " Players:"."$serverPlayers"."/".$serverMaxPlayers. "<br>" .
//          "Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " .
//        $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . date("H:i  d-M-Y", strtotime($serverRustLastSeedChange)) . "<br>" . "Wiped: " . date("H:i  d-M-Y", strtotime($serverRustLastWipe)) . "<br>");
//
//        if ($serverRustLastSeedChange == $serverRustLastWipe)
//            print "Server has bin wiped on ". date("d-M-Y",strtotime($serverRustLastWipe));
//        elseif ($serverRustEntCnt < 20)
//            print "The wipe is fake, we check if the seed chance and 'last wipe' date are the same and if the entity is lower then 20 ";
//        ?>
<!--        </div>-->
<!--        <div id="div_search"><h3    >Lets see if the fucker is online...</h3></div>-->
<!---->
<!--        <form action="index.php" method="post">-->
<!--            Search for a player : <input type="text" name="playername" /><br />-->
<!--            <input type="submit" name="Submit" value="Search" />-->
<!--        </form>-->
<!---->
<!--<!--        -->--><?php
//
//        $results = $_POST['playername'];
//        $json_player = 'https://api.battlemetrics.com/players?filter[search]='. $results;
//        $json_player_data = file_get_contents($json_player);
//        $objp = json_decode($json_player_data);
//
//
//
//        echo "<table id='table_search_player'>";
//        echo "<th>id:</th>";
//        echo "<th>Nickname:</th>";
//        echo "<th>createdAt:</th>";
//        echo "<th>updatedAt:</th>";
//
//        for ($i = 0; $i < count($objp->data); $i++) {
//        if ( isset( $_POST['Submit'] ) ){
//
//            echo "<tr>";
//            echo "<td>";
//            echo $objp->data[$i]->attributes->id;
//            echo "</td>";
//            echo "<td>";
//            echo $objp->data[$i]->attributes->name;
//            echo "</td>";
//            echo "<td>";
//            echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->createdAt));
//            echo "</td>";
//            echo "<td>";
//            echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->updatedAt));
//            echo "</td>";
//            echo "</tr>";
//            }
//        }
//        echo "</table> ";
//        ?>

        <!-- List all the players on the server in a table -->

<!--        <div><h2>Players on server</h2></div>-->
<!--        --><?php
        mysqli_close($conn);
//        echo "<table border='1' width='100%'>";
//        echo "<th>number</th>";
//        echo "<th>ID:</th>";
//        echo "<th>Nickname:</th>";
//        echo "<th>Joined:</th>";
//        for ($i = 0; $i < $serverPlayers; $i++) {
//            echo "<tr>";
//            echo "<td>";
//            echo $i + 1;
//            echo "</td>";
//            echo "<td>";
//            echo $obj->included[$i]->relationships->player->data->id;
//            echo "</td>";
//            echo "<td>";
//            echo $obj->included[$i]->attributes->name;
//            echo "</td>";
//            echo "<td>";
//            echo date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
//            echo "</td>";
//            echo "</tr>";
//        };
//        echo "</table>";
//        ?>
    </div>

</main><!-- /.container -->
<script>
    function addRowHandlers() {
        var table = document.getElementById("tableId").innerHTML= ;
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            var createClickHandler =
                function(row)
                {
                    return function() {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;
                        alert("id:" + id);
                    };
                };

            currentRow.onclick = createClickHandler(currentRow);
        }
    }
    window.onload = addRowHandlers();
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.min.js"><\/script>')</script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
