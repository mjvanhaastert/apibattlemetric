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
        echo "<td>".$data['included'][$i]['attributes']['name']."</td>";
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
