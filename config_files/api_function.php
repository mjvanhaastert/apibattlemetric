<?php
//$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
//$jsondata = file_get_contents($json_string);
//$obj = json_decode($jsondata);
//
//$serverName = $obj["data"]["attributes"]["name"];
//$serverIp = $obj["data"]["attributes"]["ip"];
//$serverPort = $obj["data"]["attributes"]["port"];
//$serverPlayers = $obj["data"]["attributes"]["players"];
//$serverMaxPlayers = $obj["data"]["attributes"]["maxPlayers"];
//$serverDetails = $obj["data"]["attributes"]["details"];
//$serverRustBuild = $obj["data"]["attributes"]["details"]["rust_build"];
//$serverRustEntCnt = $obj["data"]["attributes"]["details"]["rust_ent_cnt_i"];
//$serverRustWorldSeed = $obj["data"]["attributes"]["details"]["rust_world_seed"];
//$serverRustWorldSize = $obj["data"]["attributes"]["details"]["rust_world_size"];
//$serverRustLastSeedChange = $obj["data"]["attributes"]["details"]["rust_last_seed_change"];
//$serverRustLastWipe = $obj["data"]["attributes"]["details"]["rust_last_wipe"];
////$playerName = $obj["included"]["1"]["attributes"]["name"];
////$playerId = $obj["included"][0]["attributes"]["relationships"]["player"]["data"]["id"];
////$serverPlayerStart ["included"][]["attributes"]["start"];
////$serverPlayerStop = $obj["included"]["attributes"]["stop"];
////$old_date = date('l, F d y h:i:s');
////date("d/m/Y H:i A",strtotime($serverPlayerStart));

function callAPI($param){

    $curl = curl_init();

    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, "https://api.battlemetrics.com/");
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Something went wrong!");}
    curl_close($curl);
    return $result;

}
$get_data = callAPI("players/");
$response = json_encode($get_data, true);

print_r($response);

/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 22-9-18
 * Time: 14:29
 */