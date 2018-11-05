<?php
include 'config_files/api_functions.php';

$playerName = $_POST['player_Name'];

if ($playerName == null){
    echo 'i need a players name to do a search';
}else
{
    $data = callAPI(false,$playerName,false);
    var_dump(count($data['data']));

//    var_dump($playerName);
//    echo count($data['data']);

    echo '<table id="searchResults" style="width:100%">';
    echo '<tr>';
    echo '<th>ID:</th>';
    echo '<th>Nickname:</th>';
    echo '<th>First played:</th>';
    echo '<th>Came online:</th>';
    echo '</tr>';
    
    for ($i = 0; $i < count($data['data']); $i++) {
        echo '<tr id="searchResultsRow" onclick="clickTable(this)">';
        echo '<td>'.$data['data'][$i]['attributes']['id'].'</td>';
        echo '<td>'.$data['data'][$i]['attributes']['name'].'</td>';
        echo '<td>'.$data['data'][$i]['attributes']['createdAt'].'</td>';
        echo '<td>'.$data['data'][$i]['attributes']['updatedAt'].'</td>';
        echo '</tr>';

    }

    echo'</table>';
//    $playerIdJson = $data

}

