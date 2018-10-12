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
            <li class="nav-item">
                <a class="nav-link" href="list.php">list</a>
            </li>
        </ul>
    </div>
</nav>

        <main role="main" class="container">
                <div class="col-md-12">
                    <div id="div_search"><h3>Lets see if the fucker is online...</h3></div>

                    <form action="search.php" method="post">
                        Search for a player : <input type="text" name="playername" /><br />
                        <input type="submit" name="Submit" value="Search" />
                    </form>



                    <?php

                    $results = $_POST['playername'];
                    $json_player = 'https://api.battlemetrics.com/players?filter[search]='. $results . '&filter[server][search]=1106399';
                    $json_player_data = file_get_contents($json_player);
                    $objp = json_decode($json_player_data);

                    echo "<table id='table_search_player' class=\"table table-bordered table-dark\">";
                    $searchResults = array();

                    echo "<th scope=\"col\">id uit api:</th>";
                    echo "<th scope=\"col\">Nickname: uit api</th>";
                    echo "<th scope=\"col\">First Played <br>on a server:</th>";
                    echo "<th scope=\"col\">Last Timed Played <br>on European Survivor:</th>";
                    for ($i = 0; $i < count($objp->data); $i++) {
                        $SearchPlayer  = json_encode($objp);
                        $SearchPlayerDecode = json_decode($SearchPlayer, true);
                        $searchResults[$i] = $objp->data[$i]->attributes->name;
                        $playerResultId = array();
                        $playerResultName = array();
                        $playerResultCreatedAt = array();
                        $playerResultUpdatedAt = array();
                        if ( isset( $_POST['Submit'] ) ){
                            for ($i = 0; $i < 10; $i++) {
                                array_push($playerResultId, $objp->data[$i]->attributes->id);
                                array_push($playerResultName, $objp->data[$i]->attributes->name);
                                array_push($playerResultCreatedAt, $objp->data[$i]->attributes->createdAt);
                                array_push($playerResultUpdatedAt, $objp->data[$i]->attributes->updatedAt);
                                echo "<tr style=\"cursor: pointer;\" class='clickable-row' id={$objp->data[$i]->attributes->id} >";


//                                $playerResult[$i] = $playerResult, $objp->data[$i]->attributes->name;

                                echo "<td>";
                                echo $objp->data[$i]->attributes->id;
                                echo "</td>";
                                echo "<td>";
                                echo $objp->data[$i]->attributes->name;
                                echo "</td>";
                                echo "<td>";
                                echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->createdAt));
                                echo "</td>";
                                echo "<td>";
                                echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->updatedAt));
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
<!--                        // var mysql = require('mysql');-->
<!--                        // var con = mysql.createConnection({-->
<!--                        //     host: "localhost",-->
<!--                        //     user: "yourusername",-->
<!--                        //     password: "yourpassword",-->
<!--                        //     database: "mydb"-->
<!--                        // });-->
<!--                        // var sql = "INSERT INTO list (varclick) VALUES (tablecel)";-->
<!--                        // var table = document.getElementById("table_search_player");-->
<!--                        // if (table != null) {-->
<!--                        //     for (var i = 0; i < table.rows.length; i++) {-->
<!--                        //         for (var j = 0; j < table.rows[i].cells.length; j++)-->
<!--                        //             table.rows[i].cells[j].onclick = function () {-->
<!--                        //                 tableText(this);-->
<!--                        //             };-->
<!--                        //     }-->
<!--                        // }-->
<!--                        //-->
<!--                        // function tableText(tableCell) {-->
<!--                        //     var tablecel = (tableCell.innerHTML);-->
<!--                        //     window.alert(tablecel);-->
<!--                        //     var sql = "INSERT INTO list (varclick) VALUES (tablecel)";-->
<!--                        //     con.query(sql, function (err)-->
<!--                        // }-->

                </div> <!---------------------- div search player -------------------->



</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

<script>
    $( ".clickable-row" ).click(function() {

        var clickid = (this).id;
        alert(clickid);
        $.post('my_ajax_receiver.php', 'clickid=' + $(this).clickid(), function (response) {
            alert(response);
        });

    });

</script>
</body>
</html>

