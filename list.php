<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <title>Small Group of Friends - really small group... like maby 3 guys... or 4</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <?php include_once 'config_files/dbcrud.php' ?>
</head>

<body>

<script>
    $(document).ready( function () {
        $('form').submit( function () {
            var formdata = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "submit.php",
                data: formdata,
            });
            return false;
        });
    });
</script>


<main role="main" class="container">
<!--    <div class="row">-->


    <button type="button" class="btn btn-primary btn-rounded" data-toggle="collapse" data-target="#new_list">Make a new List</button>
<!--    <div id="new_list" class="collapse">-->
    <form id="create_list" method="POST">
        <label for="comment">Name of the group:</label>
            <input type="text" id="group_name" class="form-control" placeholder="Clan tag or Group name">
        <label for="comment">Notes:</label>
            <textarea class="form-control" rows="3" id="comment"></textarea>
        <button name="submit" type="submit" class="btn btn-default" onclick="submitlist">Submit</button>
    </form>
<!--    </div>-->
    <div id="error_list"></div>
    <div class="col-md-12">


        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">Battlemetrics ID</th>
                <th scope="col">Steam ID</th>
                <th scope="col">Nickname</th>
                <th scope="col">Online</th>
                <th scope="col">Ban</th>
            </tr>
            </thead>





        </table>


        </div>





</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
