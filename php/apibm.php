<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
function ApiBM($method,$data,$serverId){
    //url api call
    $apiUrl = 'https://api.battlemetrics.com';
    //switch between different api calls
    switch ($method){
        case "server": //full server api call with players online
            $urlApi = $apiUrl. '/servers/'.$serverId.'?include=session';
            break;
        case 'player': //Players information
            $urlApi = $apiUrl.'/players/'.$data;
            break;
        case 'status': //Online/offline status of player on server
            $urlApi = $apiUrl.'/players/'.$data.'/servers/'.$serverId;
            break;
        default: //Search for player on a server or all servers when $serverId is null
            if($serverId == false)
                $urlApi = $apiUrl.'/players/?filter[search]='.$data;
            else
                $urlApi = $apiUrl.'/players/?filter[search]='.$data.'&filter[server][search]='.$serverId;
            break;
    }

    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $urlApi,
        CURLOPT_USERAGENT => 'rust.mjvanhaastert.nl'
    ));

    $result = curl_exec($curl);
    $response = json_decode($result, true);

    return $response;
};

function listPlayers($serverData){

    $data = ApiBM('server',false,$serverData);

    $serverPlayers = $data["data"]["attributes"]["players"];

    for ($i = 0; $i < $serverPlayers; $i++) {
        echo "<tr id=".$data['included'][$i]['relationships']['player']['data']['id'].">";
        echo "<th scope=\"row\">".$data['included'][$i]['relationships']['player']['data']['id']."</th>";
        echo "<td>".'<a style=\'color: inherit;\' href="https://www.battlemetrics.com/players/' . $data['included'][$i]['relationships']['player']['data']['id'].'" target="_blank">'.$data['included'][$i]['attributes']['name'].'</a>'."</td>";
        echo "<td>".date("H:i A - d M",strtotime($data['included'][$i]['attributes']['start']))."</td>";
//        echo "<td><button type=\"button\" class=\"material-icons md-36\" data-toggle=\"modal\" data-target=\"#myModal\">person_add</button></td>";
        echo "<td><button type=\"button\" class=\"btn material-icons md-36\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" onclick=\"addButton(this.parentNode.parentNode.rowIndex)\">person_add</button></td>";
        echo "</tr>";
    }
}
?>
<script>

    // function addButton(x) {
    //
    //     let tableIndex = x;
    //     let tablePlayerId = document.getElementById("tablePlayers").rows[tableIndex].cells.item(0).innerHTML;
    //     let tablePlayersName = document.getElementById("tablePlayers").rows[tableIndex].cells.item(1).innerText;
    //     console.log('i have bin clicked and my index number is '+tablePlayersName+" - "+tablePlayerId)
    //
    //     sessionStorage.setItem("keyTablePlayerId",tablePlayerId);
    //     sessionStorage.setItem("keyTablePlayersName",tablePlayersName);
    //
    // }

    // //addButton function
    // function addButton(x) {
    //     //get tableindex number needed for other variables
    //     let tableIndex = x;
    //     let tablePlayerId = document.getElementById("tablePlayers").rows[tableIndex].cells.item(0).innerHTML;
    //     let tablePlayersName = document.getElementById("playerName").innerHTML = document.getElementById("tablePlayers").rows[tableIndex].cells.item(1).innerText;
    //     // let modalPlayerName = document.getElementById("modalPlayerName").innerHTML = document.getElementById("searchResults").rows[tableIndex].cells.item(1).innerHTML;
    //     console.log(tablePlayersName);
    //     //store the value into sessions
    //     sessionStorage.setItem("keyTablePlayerId",tablePlayerId);
    //     sessionStorage.setItem("keyTablePlayersName",tablePlayersName);
    //
    // }



</script>
