<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <?php include 'config_files/api_functions.php'; $data = serverInfo('1106399');?>
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
                <a class="nav-link" href="klad/search.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php">List</a>
            </li>
        </ul>
    </div>
</nav>


<main role="main" class="container">

    <div class="starter-template">
        <div class="containerServerInfo">
            <div class="row">
                <div class="col-md-6" style="background-color: #0c5460">
                    <?php
                    echo $data['server_name']."</br>";
                    echo $data['server_ip'].":".$data['server_port']."</br>";
                    echo $data['server_map']."</br>";
                    echo $data['server_rust_build']."</br>";

                    ?>
                </div>
                <div class="col-md-3" style="background-color: #1e7e34">
                    <?php
                    echo $data['server_rust_world_seed']."</br>";
                    echo $data['server_rust_world_size']."</br>";
                    echo $data['server_rust_entCnt']."</br>";
                    echo $data['rust_last_seed_change']."</br>";
                    echo $data['server_rust_lastWip']."</br>";
                    ?>
                </div>
                <div class="col-md-3" style="background-color: #007bff">
                    <?php
                    echo $data['server_players']."/".$data['server_max_players']."</br>";
                    echo $data['rust_fps']."/".$data['rust_fps_avg']."</br>";

                    ?>
                </div>

            </div>
        </div>
    </div>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Joined</th>
            </tr>
        </thead>
                <?php include_once "config_files/api_functions.php"; listPlayers('1106399'); ?>
    </table>
            </div><!---------------------- div list server player -------------------->



</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
<script>
    $( ".clickable-row" ).click(function() {

        this.id.click(function () {
            alert(clickid)
        })



    });
    // var matches = document.querySelectorAll('.clickable-row');
    //
    // for (i=0; i<matches.length; i++)
    //     console.log(matches[i].innerHTML);

</script>

</body>
</html>
