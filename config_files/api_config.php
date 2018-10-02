<?php
include include '../index.php';


//$con=mysqli_connect("localhost","mjvanh1q_battlemetrics","Oi&M6{X}bzuN","mjvanh1q_battlemetrics");
//// Check connection
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }

// Perform queries
mysqli_query($con,"SELECT * FROM mjvanh1q_battlemetrics");
//mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
//VALUES ('Glenn','Quagmire',33)");

mysqli_close($con);


$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
//$json_string = 'https://api.battlemetrics.com';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);

$apiPlayer = '/players';
$apiPlayerSearch = 'players?filter[search]';
$apiServer = '/servers';
$apiServerInclude= '/include?include=session';

$serverName = $obj->data->attributes->name;
$serverIp = $obj->data->attributes->ip;
$serverPort = $obj->data->attributes->port;
$serverPlayers = $obj->data->attributes->players;
$serverMaxPlayers = $obj->data->attributes->maxPlayers;
$serverDetails = $obj->data->attributes->details;
$serverRustBuild = $obj->data->attributes->details->rust_build;
$serverRustEntCnt = $obj->data->attributes->details->rust_ent_cnt_i;
$serverRustWorldSeed = $obj->data->attributes->details->rust_world_seed;
$serverRustWorldSize = $obj->data->attributes->details->rust_world_size;
$serverRustLastSeedChange = $obj->data->attributes->details->rust_last_seed_change;
$serverRustLastWipe = $obj->data->attributes->details->rust_last_wipe;

for ($i = 0; $i < $serverPlayers; $i++) {
    $playerID = $obj->included[$i]->relationships->player->data->id;
    $playerNick = $obj->included[$i]->attributes->name;
    $playerConnect = date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
    };
return $playerID;

    /*todo fix loop search function
for loop for the search function
With all the information it needs
  we need to fix this later
$results = $_POST['playername'];
$json_player = 'https://api.battlemetrics.com/players?filter[search]='. $results;
$json_player_data = file_get_contents($json_player);
$objp = json_decode($json_player_data);

for ($s = 0; $s < count($objp->data); $s++) {
    $searchId$searchId = $objp->data[$s]->attributes->id;
    $objp->data[$s]->attributes->name;
    date('H:i:s d-M-Y',strtotime($objp->data[$s]->attributes->createdAt));
    date('H:i:s d-M-Y',strtotime($objp->data[$s]->attributes->updatedAt))

*/
/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 24-9-18
 * Time: 16:25
 */