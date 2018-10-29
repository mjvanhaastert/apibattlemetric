<?php





//callApi() function for calling the api of battlemetrics
//$method   - server:
//          - players: hows players information
//          - status: shows if player is online or offline threw boolean
//          - 'default': search on server for player
function callApi($method,$data,$serverId){
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

/*
 *
 *      ListPlayer function shows list of players on a server
 *
 */

function listPlayers($serverData){

    $data = callAPI('server',false,$serverData);

    $serverPlayers = $data["data"]["attributes"]["players"];

    for ($i = 0; $i < $serverPlayers; $i++) {
        echo "<tr>";
        echo "<th scope=\"row\">".($i+1)."</th>";
        echo "<td >".'<a style=\'color: inherit;\' href="https://www.battlemetrics.com/players/' . $data['included'][$i]['relationships']['player']['data']['id'].'" target="_blank">'.$data['included'][$i]['attributes']['name'].'</a>'."</td>";
        echo "<td>".date("H:i A - d M",strtotime($data['included'][$i]['attributes']['start']))."</td>";
        echo "</tr>";
    }
}

/*
 *
 * Show server information on the front page
 *
 */

function serverInfo($serverId){
    //call callApi() for server information, grab only array['data']
    $data = callApi('server',false,$serverId);
    $serverInfo['server_game'] = $data["data"]["relationships"]["game"]["data"]["id"];
    $serverInfo['server_id'] = $data["data"]["id"];
    $serverInfo['server_name'] = $data["data"]["attributes"]["name"];
    $serverInfo['server_ip'] = $data["data"]["attributes"]["ip"];
    $serverInfo['server_port'] = $data["data"]["attributes"]["port"];
    $serverInfo['server_players'] = $data["data"]["attributes"]["players"];
    $serverInfo['server_max_players'] = $data["data"]["attributes"]["maxPlayers"];
    $serverInfo['server_map'] = $data["data"]["attributes"]["details"]["map"];
    $serverInfo['server_rust_build'] = $data["data"]["attributes"]["details"]["rust_build"];
    $serverInfo['server_rust_entCnt'] = $data["data"]["attributes"]["details"]["rust_ent_cnt_i"];
    $serverInfo['rust_fps'] = $data["data"]["attributes"]["details"]["rust_fps"];
    $serverInfo['rust_fps_avg'] = $data["data"]["attributes"]["details"]["rust_fps_avg"];
    $serverInfo['server_rust_world_seed'] = $data["data"]["attributes"]["details"]["rust_world_seed"];
    $serverInfo['server_rust_world_size'] = $data["data"]["attributes"]["details"]["rust_world_size"];
    $serverInfo['rust_last_seed_change'] = date("H:i A - d M Y",strtotime($data['data']['attributes']['details']['rust_last_seed_change']));
    $serverInfo['server_rust_lastWip'] = date("H:i A - d M Y",strtotime($data['data']['attributes']['details']['rust_last_wipe']));


    return $serverInfo;

}

function playerList(){
    $conn = new mysqli("localhost", "mjvanh1q_battlemetrics", "Oi&M6{X}bzuN", "mjvanh1q_battlemetrics");
    $result= mysqli_query($conn, "SELECT * FROM track_player_list");

    while($rows = mysqli_fetch_array($result)):
        $steamId = $rows['player_steamid'];

        $json_player = "https://api.battlemetrics.com/players/".$rows['player_id']."/servers/1106399";
        $json_player_data = file_get_contents($json_player);
        $objp = json_decode($json_player_data);
        $status = $objp->data->attributes->online;

        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://api.steampowered.com/ISteamUser/GetPlayerBans/v1/?key=66D41E2D2DECB0A3C6842434EE656419&steamids=".$steamId,
            CURLOPT_USERAGENT => 'rust.mjvanhaastert.nl'
        ));

        $resultsteam = curl_exec($curl);
        $response = json_decode($resultsteam, true);
        $NumberOfGameBans = $response['players']['0']['NumberOfGameBans'];
        $DaysSinceLastBan = $response['players']['0']['DaysSinceLastBan'];

        echo "<tr>";
        echo "<th scope=\"row\">".$rows['player_id']."</th>";
        echo "<td>".$rows['player_nick']."</td>";
        echo "<td>".$rows['player_steamid']."</td>";
        if ($status == false){
            echo "<td style='background: rebeccapurple'>"."Offline"."</td>";
        }
        else{
            echo "<td style='background: green'>"."Online" ."<td>";
        }
        if ($NumberOfGameBans == false){
            echo "<td style='background: rebeccapurple'>"."No vac ban"."</td>";
        }
        else{
            echo "<td style='background: green'>"."Game ban" ."</td>";
            echo "<td style='background: green'>".$DaysSinceLastBan."Days ago"."</td>";
        }
        echo "</tr>";
    endwhile;
    echo "</table>";
}

