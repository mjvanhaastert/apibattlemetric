<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Small Group of Friends - really small group... like maby 3 guys... or 4</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <?php include 'php_config/databaselist.php'; $note = showList();?>
</head>

<body>
<main role="main" class="container">
<!--    <div class="row">-->
    <div class="row">
        <div id="demo"></div>
        <div class="col-6">
            <form id="List">
        <label for="comment">Name of the group:</label>
            <input type="text" id="group_name" class="form-control" placeholder="Clan tag or Group name">
        <label for="comment">Notes:</label>
            <textarea class="form-control" rows="3" id="comment"></textarea>
        <button id="Submit" type="submit" class="btn btn-default" >Submit</button>
<!--    </form>-->
</div>
        <div class="col-6">
            <label for="comment">Search player ID:</label>
                <input type="text" id="player_Id" class="form-control" placeholder="Id">
            <label for="comment">Search player Name:</label>
                <input type="text" id="player_Name" class="form-control" placeholder="Name">
            <button id="Search" type="submit" class="btn btn-default" >Submit</button>
        </form>
        </div>
    </div>

    <div id="playerMessage"></div>


    <!--    </div>-->
<!--    <div class="row">-->
<!--    <div class="col-3" style="background-color: #6f42c1" id="list">-->
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <th scope="col">List Names:</th>-->
<!--            </thead>-->
<!--            --><?php //ListTable() ?>
<!--        </table>-->
<!--    </div>-->
<!--    <div class="col-9" style="background-color: #1e7e34">-->
<!--        <div class="row" id="notes_list" style="background-color: #1c7430">-->
<!--            <table class="table">-->
<!--                <thead>-->
<!--                <th scope="col">Note</th>-->
<!--                </thead>-->
<!--                --><?php //NoteList() ?>
<!--            </table>-->
<!--        </div>-->
<!--        <div class="row" id="player_from_list" style="background-color: #5a6268">lasdjflasjdfldjsf</div>-->
<!--    </div>-->
<!--    </div>-->

    <div id="notes_list">
    </div>
<div id="list">
    </div>
<div id="player_from_list">
    </div>



</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script src="js/listpage.js"></script>
    <script src="js/searchplayer.js"></script>











</body>
</html>
