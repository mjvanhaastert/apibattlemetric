<?php
function listplayers()
{
    if (isset($_POST['ID'])) {

        $playerId = $_POST['ID'];
        $json_player = "https://api.battlemetrics.com/players/".$playerId;
        $json_player_data = file_get_contents($json_player);
        $objp = json_decode($json_player_data);

        $playersId = $objp->data->attributes->id;
        $playersNickName = $objp->data->attributes->name;

//        print $playersId . "</br>" . $playersNickName . "</br>".date('H:i:s d-M-Y',strtotime($playersCreatedAt))."</br>";






     $conn = new mysqli("localhost", "mjvanh1q_battlemetrics", "Oi&M6{X}bzuN", "mjvanh1q_battlemetrics");

      $sql = "INSERT INTO track_player_list (player_id, player_nick) VALUES ('{$playersId}', '{$playersNickName}')";


       if ($conn->query($sql) === TRUE) {
           echo $playersNickName." " ."has bin added to the : 'Small group of Friends we will fuck you up later when your offline.. list..' we need a beter name for it. thats your job Scotty. If already done my job so come up with a better name :)";
      } else {
            echo $playersNickName ." has already bin added to the, lets fuck them up later list" . "Error: " . $sql . "<br>" . $conn->error;
      }

       $conn->close();
    }
}
listplayers();

//var ID = this.id;
//var xhttp = new XMLHttpRequest();
//xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//        document.getElementById("search_results").innerHTML =
//            this.responseText;
//    }
//};
//xhttp.open("POST", "add.php", true);
//xhttp.send(`ID=${ID}`);