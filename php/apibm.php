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