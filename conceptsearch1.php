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

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="add_player_message">
        So lets add <div id="modalPlayerName"></div> to the list
        Dont forget the select the right list to add him to.
        selected list: <div id="modalListData"></div>

        <select name="battlemetrics_list_name" id="listDropDownselect" onChange="selectlist(this)">
            <?php include 'php_config/getter.php'; $dropDown = listData();?>

            <?php foreach ($dropDown as $row): ?>
                <option value="<?=$row["battlemetrics_list_id"]?>" id="<?=$row["battlemetrics_list_id"]?>"><?=$row["battlemetrics_list_name"]?></option>
            <?php endforeach ?>
        </select>
        <button id="addtolistbutton" type="button">Add</button>
        </div>
    </div>
</div>
<div id="tableListResults">




</div>
<script>
    // because of battlemetrics i cant do a normal search with javascript.
    // Search Player function
    document.getElementById("Search").addEventListener("click",lag);
    function lag(event) {
        //stop it from going to the page
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
            //get index number from table so i can use it later to get the right table
            modal.style.display = "block";
            var tableIndex = x.rowIndex;

            //Grab the right value from the selected table
            // let selectValue = document.getElementById("listDropDownselect").value;
            let modalPlayerId = document.getElementById("searchResults").rows[tableIndex].cells.item(0).innerHTML;
            let modalPlayerName = document.getElementById("modalPlayerName").innerHTML = document.getElementById("searchResults").rows[tableIndex].cells.item(1).innerHTML;
            let modalPlayerDate = document.getElementById("searchResults").rows[tableIndex].cells.item(2).innerHTML;

            //Store everything in session
            sessionStorage.setItem("keyPlayerId",modalPlayerId);
            sessionStorage.setItem("keyPlayerName",modalPlayerName);
            sessionStorage.setItem("keyPlayerDate",modalPlayerDate);
            sessionStorage.setItem("keySelectValue",selectValue);

        }

        function selectlist(){
            //grab the value from selected drop down menu
            let listIdDropDown = document.getElementById("listDropDownselect").value;
            //and store it in a session
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

    document.getElementById("addtolistbutton").addEventListener("click",addTolist);
    function addTolist(event){
        //stop is from going to the page
        event.preventDefault();

        var formData = new FormData();
        //Get value from dropdown menu
        let selectValue = document.getElementById("listDropDownselect").value;
        //first grab all the stored session data
        var addPlayerId = sessionStorage.getItem("keyPlayerId");
        var addPlayerName = sessionStorage.getItem("keyPlayerName");
        var addPlayerDate = sessionStorage.getItem("keyPlayerDate");
        var addPlayerListId = sessionStorage.getItem("keyListId");
        // var addSelectValue = sessionStorage.getItem("keySelectValue");
        //apppend is all to formData
        formData.append("add_PlayerId", addPlayerId);
        formData.append("add_Player_Name", addPlayerName);
        formData.append("add_Player_Date", addPlayerDate);
        formData.append("add_Player_ListId", addPlayerListId);
        formData.append("add_Select_Value", selectValue);

        // formData.append("only_On_Server", onlyOnServer);
        var request = new XMLHttpRequest();
        request.onload = function() {
            //This is where you handle what to do with the response.
            // The actual data is found on this.responseText
            console.log(this.responseText);

            document.getElementById('add_player_message').innerHTML = this.responseText;

            // var myArr = JSON.parse(this.responseText);
            // document.getElementById("demo").innerHTML = myArr[0];
        };
        //send it all to addtolist.php so it can handle the rest
        request.open("POST", "config_files/addtolist.php");
        request.send(formData);

    }

</script>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
