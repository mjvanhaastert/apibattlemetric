<html>
<header>
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/modal_conceptsearch1.css">
</header>



<form>
<label for="comment">Search player Name:</label>
<input type="text" id="player_Name" class="form-control" placeholder="Name">
<button id="Search" type="submit" class="btn btn-default">Submit</button>
</form>



<div id="demo">this is the demo</div>
<div id="notes_list"> this is the notes_list</div>



<!--</select>-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        So lets add <div id="modalPlayerName"></div> to the list
        Dont forget the select the right list to add him to.
        selected list: <div id="modalListData"></div>

        <select name="battlemetrics_list_name" id="listDropDownselect" onChange="selectlist(this)">
            <?php include 'php_config/getter.php'; $dropDown = listData();?>

            <?php foreach ($dropDown as $row): ?>
                <option id="<?=$row["battlemetrics_list_id"]?>" value="<?=$row["battlemetrics_list_id"]?>"><?=$row["battlemetrics_list_name"]?></option>
            <?php endforeach ?>

            <div id="modalMessage"> this is the notes_list</div>

        </select>
        <button type="button" onclick="addTolist()">Add</button>


    </div>

</div>


<script>

    // Search Player function
    document.getElementById("Search").addEventListener("click",lag);
    function lag(event) {
        event.preventDefault();

        var formData = new FormData();
        var playerName = document.getElementById("player_Name").value;

        formData.append("player_Name", playerName);
        // formData.append("only_On_Server", onlyOnServer);

        var request = new XMLHttpRequest();
        request.onload = function() {
            //This is where you handle what to do with the response.
            // The actual data is found on this.responseText
            document.getElementById('notes_list').innerHTML = this.responseText;

            // console.log(this.responseText);
            // var myArr = JSON.parse(this.responseText);
            // document.getElementById("demo").innerHTML = myArr[0];
        };

        request.open("POST", "conceptsearchpost.php");
        request.send(formData);
    }

        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks table, open the modal
        function clickTable(x) {
            modal.style.display = "block";
            var tableIndex = x.rowIndex;

            let modalPlayerId = document.getElementById("searchResults").rows[tableIndex].cells.item(0).innerHTML;
            let modalPlayerName = document.getElementById("modalPlayerName").innerHTML = document.getElementById("searchResults").rows[tableIndex].cells.item(1).innerHTML;
            let modalPlayerDate = document.getElementById("searchResults").rows[tableIndex].cells.item(2).innerHTML;
            sessionStorage.setItem("keyPlayerId",modalPlayerId);
            sessionStorage.setItem("keyPlayerName",modalPlayerName);
            sessionStorage.setItem("keyPlayerDate",modalPlayerDate);

        }

        function selectlist(){
            let listIdDropDown = document.getElementById("listDropDownselect").value;
            sessionStorage.setItem("keyListId",listIdDropDown);
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

    function addTolist(){
        var addPlayerId = sessionStorage.getItem("keyPlayerId");
        var addPlayerName = sessionStorage.getItem("keyPlayerName");
        var addPlayerDate = sessionStorage.getItem("keyPlayerDate");
        var addPlayerListId = sessionStorage.getItem("keyListId");

        console.log(addPlayerId,addPlayerName,addPlayerDate,addPlayerListId);

    }



        // Search Player function
        // function addTolist() {
        //     // event1.preventDefault();
        //     let data = clickTable();
        //     let dataListId = selectlist();
        //
        //     let dataModalPlayerId = data[0];
        //     let dataModalPlayerName = data[1];
        //     let dataModalPlayerDate = data[2];
        //
        //     var formData = new FormData();
        //
        //     formData.append("dataListId", dataListId);
        //     formData.append("dataModalPlayerId", dataModalPlayerId);
        //     formData.append("dataModalPlayerName", dataModalPlayerName);
        //     formData.append("dataModalPlayerDate", dataModalPlayerDate);
        //
        //     console.log("Append data");
        //     var request = new XMLHttpRequest();
        //     request.onload = function() {
        //         //This is where you handle what to do with the response.
        //         // The actual data is found on this.responseText
        //         // document.getElementById('modalMessage').innerHTML = this.responseText;
        //
        //         console.log(this.responseText);
        //         // console.log(this.responseText);
        //         // var myArr = JSON.parse(this.responseText);
        //         // document.getElementById("demo").innerHTML = myArr[0];
        //     };
        //
        //     request.open("POST", "addtolist.php");
        //     request.send(formData);





</script>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
