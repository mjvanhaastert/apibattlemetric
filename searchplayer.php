<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
<!--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.0/axios.js"></script>-->

</head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="indexbackup.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="searchplayer.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listplayers.php">list</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <form id="search_player" method="post" action="">
        <div class="form-row">
            <div class="col">
                <input type="text" id="myNumber" name="form_battlemetric_id" class="form-control" placeholder="Battlemetric ID">
            </div>
            <div class="col">
                <input type="text" name="form_username" class="form-control" placeholder="Username">
            </div>
            <div class="col">
                <button id="button" type="submit" class="btn btn-primary" onclick="click()">Search</button>
            </div>
        </div>
    </form>
</div>
<p id="demo"></p>
<script>


</script>

<?php
//
//if (isset($_POST['form_battlemetric_id']) or isset($_POST['form_username'])) {
//    if ($_POST['form_battlemetric_id'] == true){
//        searchPlayer();
////        echo $_POST['form_battlemetric_id'];
//    }
//
//
//
////    $test1 = $_POST['form_username'];
////    echo '<br />The ' . $test .$test1. ' submit button was pressed<br />';
//}
//?>

        <div class="row" id="search_results">


<!--                --><?php //require_once("config_files/api_search_player.php"); searchPlayer();?>




<!--            <script>-->
<!---->
<!--                $(".clickable-row").click(function() {-->
<!--                    var data = new FormData();-->
<!--                    data.append("ID", this.id);-->
<!---->
<!--                    var xhr = new XMLHttpRequest();-->
<!--                    xhr.open('POST', 'add.php', true);-->
<!--                    xhr.onload = function () {-->
<!--                        // do something to response-->
<!--                        document.getElementById("search_results").innerHTML = this.responseText;-->
<!--                    }   ;-->
<!--                    xhr.send(data);-->
<!--                });-->
<!---->
<!--            </script>-->

        </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 16-10-18
 * Time: 17:21
 */