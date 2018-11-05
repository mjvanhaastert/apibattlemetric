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
    <?php include 'config_files/api_functions.php';?>

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

    <div id="notes_list">
    </div>
<div id="list">
    </div>
<div id="player_from_list">
    </div>

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <?php   $data = listDropDown() ?>
                    <select name="battlemetrics_list_name" id="battlemetrics_list_name">
                        <?php foreach ($data as $row): ?>
                            <option id="<?=$row["battlemetrics_list_id"]?>"><?=$row["battlemetrics_list_name"]?></option>
                        <?php endforeach ?>
                    </select>

                    testing
                    <button onclick="myFunction()">Try it</button>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <p id="demo"></p>
</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!--    <script src="js/listpage.js"></script>-->
    <script src="js/searchplayer.js"></script>

<script>
    function myFunction0() {
        alert(document.getElementById("myTable").rows[1].cells[0].innerHTML);
   }
   function myFunction1() {
        alert(document.getElementById("myTable").rows[2].cells[0].innerHTML);
   }
    function myFunction() {

            var x = document.getElementsByTagName("tr");


            var i;
            for (i = 1; i < x.length;i++) {

            }
            // document.getElementById("demo").innerHTML = txt;

    }
</script>




</body>
</html>
