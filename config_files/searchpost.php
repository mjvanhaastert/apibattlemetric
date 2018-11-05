<?php

include 'api_functions.php';

$data = listDropDown();

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
//    echo '<table id="myTable" border="1px black">';
//    echo '<thead><tr>';
//    echo '<th>ID:</th>';
//    echo '<th>Name:</th>';
//    echo '<th>Last login:</th>';
//    echo '</thead></tr>';
//    echo '<tbody>';
//
//    for($i = 0; $i < 10; $i++){
//
//        echo '<tr><td id="IDplayersearch">'. $data["data"][$i]["id"] .'</td>';
//        echo '<td>'. $data["data"][$i]["attributes"]["name"] .'</td>';
//        echo '<td>'. $data["data"][$i]["attributes"]["updatedAt"] .'</td>';
//        echo '<td><button class="GetIdFromButton" id="Buttonid" type="button" data-toggle="modal" data-target="#myModal">Add</button></td>';
////        echo '<td><button type="button" onclick="myFunction(this)'.$i.'()">Add</button></td>';
//        echo '<td><button type="button">List</button></td></tr>';
//
//    }
//    echo '</tbody></table>';
return $data;

}
else {

    echo 'I need a player id or name';
}
?>

