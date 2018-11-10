<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add player</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                So lets add <div id="playerName"></div> to the list
                Dont forget the select the right list to add him to.
                selected list: <div id="modalListData"></div>

                <select id="listSelectValue" onChange="selectList(this)">
                    <?php include_once 'php/database.php'; $dropDown = dropDownList()?>

                    <?php foreach ($dropDown as $row): ?>
                        <option value="<?=$row["battlemetrics_list_id"]?>" id="<?=$row["battlemetrics_list_id"]?>"><?=$row["battlemetrics_list_name"]?></option>
                    <?php endforeach ?>
                </select>

<!--                <button id="addtolistbutton" type="button">Add</button>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="addtolistbutton" type="button" class="btn btn-primary" onclick="buttonAdd()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>

    //addButton function
    function addButton(x) {
        //get tableindex number needed for other variables
        let tableIndex = x;
        let tablePlayerId = document.getElementById("tablePlayers").rows[tableIndex].cells.item(0).innerHTML;
        let tablePlayersName = document.getElementById("modalPlayerName").innerHTML = document.getElementById("tablePlayers").rows[tableIndex].cells.item(1).innerText;
        // let modalPlayerName = document.getElementById("modalPlayerName").innerHTML = document.getElementById("searchResults").rows[tableIndex].cells.item(1).innerHTML;

        //store the value into sessions
        sessionStorage.setItem("keyTablePlayerId",tablePlayerId);
        sessionStorage.setItem("keyTablePlayersName",tablePlayersName);

    }
    //selectList function
    function selectList(){
        //grab the id from selected list
        let listIdDropDown = document.getElementById("listSelectValue").value;
        //and store it in a session
        sessionStorage.setItem("keyListId",listIdDropDown);
    }

    // Get the modal
    var modal = document.getElementById('myModal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    //buttAdd function here is where everything is coming together
    function buttonAdd(event){
        //stop it from going to the page
        event.preventDefault();

        var formData = new FormData();
        //Get value from list menu
        let listId = document.getElementById("listSelectValue").value;
        //first grab all the stored session data
        var addPlayerId = sessionStorage.getItem("keyTablePlayerId");
        var addPlayerName = sessionStorage.getItem("keyTablePlayersName");
        //apppend is all to formData
        formData.append("add_PlayerId", addPlayerId);
        formData.append("add_Player_Name", addPlayerName);
        formData.append("add_List_Id", listId);
        console.log(listId+addPlayerId+addPlayerName);
        // formData.append("only_On_Server", onlyOnServer);
        var request = new XMLHttpRequest();
        request.onload = function() {
            //This is where you handle what to do with the response.
            // The actual data is found on this.responseText
            console.log(this.responseText);

            document.getElementById('returnMessage').innerHTML = this.responseText;

            // var myArr = JSON.parse(this.responseText);
            // document.getElementById("demo").innerHTML = myArr[0];
        };
        //send it all to addtolist.php so it can handle the rest
        request.open("POST", "php/addtolist.php");
        request.send(formData);

    }



</script>