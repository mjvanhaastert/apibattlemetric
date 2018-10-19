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


</head>

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
                <a class="nav-link" href="list.php">list</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col">
            <form action="searchplayer.php" method="post">
            <div class="col" id="search_name">
                <div class="form-group">
                    <label for="InputSearchPlayer">Search for player</label>
                    <input type="text" class="form-control" name="inputNamePlayer" id="inputNamePlayer" placeholder="Search player name">
                    <small id="labelSearchPlayer" class="form-text text-muted">Just give me a name that looks atleast sometimes like it<br>and i will give you 10 results back</small>
                </div>
            <button type="submit" name="Submit" class="btn btn-primary">Search Name</button>
            </div>
        </form>
        </div>
    </div>



        <div class="row" id="search_results">


                <?php require_once("config_files/api_search_player.php"); searchPlayer();?>


            <script>

                $(".clickable-row").click(function() {
                    var data = new FormData();
                    data.append("ID", this.id);

                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'add.php', true);
                    xhr.onload = function () {
                        // do something to response
                        document.getElementById("search_results").innerHTML = this.responseText;
                    }   ;
                    xhr.send(data);
                });

            </script>

            <!--            <script>-->
<!--                $(".clickable-row").click(function() {-->
<!--                    var ID = this.id;-->
<!--                    alert(ID);-->
<!--                    var http new xhttp;-->
<!--                    xhttp.open("POST", "config_files/api_search_player.php", true);-->
<!--                    xhttp.send(ID);-->
<!--                    this http;-->
<!--                });-->
<!--            </script>-->

<!--            <div class="col-4 position-fixed">-->
<!--                --><?php //require_once("config_files/api_search_player.php"); listplayers();?>
<!--            </div>-->
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