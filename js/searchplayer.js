document.getElementById("Search").addEventListener("click",lag);
function lag(event) {
    event.preventDefault();

    var formData = new FormData();
    var playerId = document.getElementById("player_Id").value;
    var playerName = document.getElementById("player_Name").value;

    formData.append("player_Id", playerId);
    formData.append("player_Name", playerName);
    // formData.append("only_On_Server", onlyOnServer);

    var request = new XMLHttpRequest();
    request.onload = function() {
        //This is where you handle what to do with the response.
        // The actual data is found on this.responseText
        // document.getElementById('notes_list').innerHTML = this.responseText;
        console.log(this.responseText);
    };

    request.open("POST", "config_files/searchpost.php");
    request.send(formData);
}

