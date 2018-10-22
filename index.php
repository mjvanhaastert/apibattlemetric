<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Small Group of Friends - really small group... like maby 3 guys... or 4</title>
    <?php include_once 'config_files/api_config.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
                <a class="nav-link" href="searchplayer.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listplayers.php">List</a>
            </li>
        </ul>
    </div>
</nav>


<main role="main" class="container">

    <div class="starter-template">
        <div class="containerServerInfo">
            <div class="row">

                <div id="table-top-left" class="col-md-6">
                <?php print ($serverName . "<br>". $serverIp.":".$serverPort. "<br>" . " Players:"."$serverPlayers"."/".$serverMaxPlayers)?>
                </div>

                <div id="table-top-right" class="col-md-6">
                <?php print ("Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " .
                    $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " .
                    date("H:i  d-M-Y", strtotime($serverRustLastSeedChange)) . "<br>" . "Wiped: " . date("H:i  d-M-Y", strtotime($serverRustLastWipe)));?>
                </div>
            </div>
    </div>
            <div class="col-md-12">
                <div><h2>Players on server</h2></div>

                <?php ServerPlayerList() ?>


            </div><!---------------------- div list server player -------------------->

    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>


</body>
</html>
