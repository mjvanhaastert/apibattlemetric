<?php

include 'api_functions.php';


$playerId =  $_POST['player_Id'];
$playerName = $_POST['player_Name'];

if ($playerId != null and $playerName != null){

    echo 'I cant look for both at the same time';
}
elseif ($playerId != null){
    $data = callAPI('player',$playerName,false);

    echo 'thanks for the player id and here you shit...';
    var_dump($data);
}
elseif($playerName != null){
    $data = callAPI(false,$playerName,false);
//    $number = count($data);

    for($i = 0; $i < 10; $i++){
        echo '<table class="table">';
        echo '<thead><tr>';
        echo '<th scope="col">ID:</th>';
        echo '<th scope="col">Name:</th>';
        echo '<th scope="col">Last login:</th>';
        echo '</thead></tr>';
        echo '<tbody>';
        echo '<tr><td>'. $data["data"][$i]["id"] .'</td></tr>';
        echo '<tr><td>'. $data["data"][$i]["attributes"]["name"] .'</td></tr>';
        echo '<tr><td>'. $data["data"][$i]["attributes"]["updatedAt"] .'</td></tr>';
        echo '</tbody></table>';

    }
}
else {

    echo 'I need a player id or name';
}




https://api.battlemetrics.com/players?filter[search]=



//
//$json_player = "https://api.battlemetrics.com/players/".$rows['player_id']."/servers/1106399";
//$json_player_data = file_get_contents($json_player);
//$objp = json_decode($json_player_data);




//$servername = "localhost";
//$username = "mjvanh1q_battlemetrics";
//$password = "-80zuZbq4^&%";
//$dbname = "mjvanh1q_battlemetrics";
//
//$list_id = mt_rand();
//
//$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
//if ($conn->connect_error) {     // Check connection
//    die("Connection failed: " . $conn->connect_error);
//}
//
//
//$group_name = mysqli_real_escape_string($conn, $_POST['group_name']);
//$comment = mysqli_real_escape_string($conn, $_POST['comment']);
//
//
//
//$sql = "INSERT INTO battlemetrics_list(battlemetrics_list_id,battlemetrics_list_name,battlemetrics_list_note)
//VALUES ('$list_id','$group_name','$comment')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "If stored the list named " . $group_name . " for you in the database... because somebody does not want to write it on a piece of paper....";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//$conn->close();