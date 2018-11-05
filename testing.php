<!--<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<!--<body>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>-->
<!--<script src="http://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>-->
<?php //include 'config_files/api_functions.php';?>
<!---->
<?php
//
//$data = listDropDown()
//
//?>
<!---->
<!--<select name="battlemetrics_list_name" id="battlemetrics_list_name" onchange="changeFunc()">-->
<!--    --><?php //foreach ($data as $row): ?>
<!--        <option id="--><?//=$row["battlemetrics_list_id"]?><!--">--><?//=$row["battlemetrics_list_name"]?><!--</option>-->
<!--    --><?php //endforeach ?>
<!--</select>-->
<!--    <form>-->
<!--    <label for="comment">Search player ID:</label>-->
<!--        <input type="text" id="player_Id" class="form-control" placeholder="Id"></br>-->
<!--    <label for="comment">Search player Name:</label>-->
<!--        <input type="text" id="player_Name" class="form-control" placeholder="Name"></br>-->
<!--    <button id="Search" type="submit" class="btn btn-default" >Submit</button>-->
<!--    </form>-->
<!--</body>-->
<!---->
<!---->
<!--<div id="notes_list"></div>-->
<!--</html>-->
<!---->
<!--<script src="js/searchplayer.js"></script>-->
<!---->
<!--<!--// function displayDate() {-->-->
<!--<!--//     // event.preventDefault()-->-->
<!--<!--//     var groupname = document.getElementById("group_name").value;-->-->
<!--<!--//     var comment = document.getElementById("comment").value;-->-->
<!--<!--//     console.log(groupname + comment)-->-->
<!--<!--//     var oReq = new XMLHttpRequest(); //New request object-->-->
<!--<!--//     oReq.onload = function() {-->-->
<!--<!--//         //This is where you handle what to do with the response.-->-->
<!--<!--//         // The actual data is found on this.responseText-->-->
<!--<!--//         console.log(this.responseText);-->-->
<!--<!--//-->-->
<!--<!--//     };-->-->
<!--<!--//     oReq.open("post", "php_config/listpost.php", true);-->-->
<!--<!--//     //                               ^ Don't block the rest of the execution.-->-->
<!--<!--//     //                                 Don't wait until the request finishes to-->-->
<!--<!--//     //                                 continue.-->-->
<!--<!--//     oReq.send(groupname,comment);-->-->
<!--<!--// document.getElementById("Submit").addEventListener("click", displayDate);-->-->
<!--<!--//-->-->
<!--<!--// function displayDate() {-->-->
<!--<!--//     // event.preventDefault()-->-->
<!--<!--//     var groupname = document.getElementById("group_name").value;-->-->
<!--<!--//     var comment = document.getElementById("comment").value;-->-->
<!--<!--//     console.log(groupname + comment)-->-->
<!--<!--//     var oReq = new XMLHttpRequest(); //New request object-->-->
<!--<!--//     oReq.onload = function() {-->-->
<!--<!--//         //This is where you handle what to do with the response.-->-->
<!--<!--//         //The actual data is found on this.responseText-->-->
<!--<!--//-->-->
<!--<!--//     };-->-->
<!--<!--//     oReq.open("post", "php_config/listpost.php", true);-->-->
<!--<!--//     //                               ^ Don't block the rest of the execution.-->-->
<!--<!--//     //                                 Don't wait until the request finishes to-->-->
<!--<!--//     //                                 continue.-->-->
<!--<!--//     oReq.send(groupname,comment);-->-->
<!--<!--// }-->-->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4>Bootstrap Snipp for Datatable</h4>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                    <th><input type="checkbox" id="checkall" /></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Edit</th>

                    <th>Delete</th>
                    </thead>
                    <tbody>

                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>


                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>



                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>


                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>





                    </tbody>

                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                    <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>

    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>