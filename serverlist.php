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
                <a class="nav-link" href="indexbackup.php">Home <span class="sr-only">(current)</span></a>
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


            </div>
        </div>
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


/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 25-10-18
 * Time: 11:22
 *
 * Define servers into a ‘server list’ which is referenced by other parts of the webapp
 * (i.e on the dropdown list at the ‘data entry’ / ‘search’ page and beside the titles
 * of lists.
 */

