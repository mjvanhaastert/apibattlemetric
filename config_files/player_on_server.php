<?php
require_once 'api_functions.php';

$json = callAPI('server',false,'1106399');

$serverName = $json["data"]["attributes"]["name"];
$serverIp = $json["data"]["attributes"]["ip"];
$serverPort = $json["data"]["attributes"]["port"];
$serverPlayers = $json["data"]["attributes"]["players"];
$serverMaxPlayers = $json["data"]["attributes"]["maxPlayers"];
$serverDetails = $json["data"]["attributes"]["details"];
$serverRustBuild = $json["data"]["attributes"]["details"]["rust_build"];
$serverRustEntCnt = $json["data"]["attributes"]["details"]["rust_ent_cnt_i"];
$serverRustWorldSeed = $json["data"]["attributes"]["details"]["rust_world_seed"];
$serverRustWorldSize = $json["data"]["attributes"]["details"]["rust_world_size"];
$rustLastSeedChange = date("d M Y H:i A",strtotime($json['data']['attributes']['details']['rust_last_seed_change']));
$serverRustLastWip = date("d M Y H:i A",strtotime($json['data']['attributes']['details']['rust_last_wipe']));

echo "<th scope=\"col\">Number</th>";
echo "<th scope=\"col\">ID</th>";
echo "<th scope=\"col\">Nickname</th>";
echo "<th scope=\"col\">Time Joined</th>";
                for ($i = 0; $i < $serverPlayers; $i++) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>".($i+1)."</td>";
                    echo "<td>".$json['included'][$i]['relationships']['player']['data']['id']."</td>";
                    echo "<td>".$json['included'][$i]['attributes']['name']."</td>";
                    echo "<td>".$json['included'][$i]['attributes']['start']."</td>";
                    echo "</tr>";
                    echo "</table>";
                }

echo $rustLastSeedChange . "</br>";
echo $serverRustLastWip;
echo $json['include'][5]['attributes']['name'];

//echo '<div class="col-md-12">';
//echo '<div><h2>Players on server</h2></div>';
//                echo "<table id='player_server' class=\"table table-bordered table-dark\">";
//                echo "<th scope=\"col\">number</th>";
//                echo "<th scope=\"col\">ID:</th>";
//                echo "<th scope=\"col\">Nickname:</th>";
//                echo "<th scope=\"col\">Joined:</th>";
//                for ($i = 0; $i < $playersOnServer; $i++) {
//                    $playerIdOnServer = $obj->included[$i]->relationships->player->data->id;
//                    $playerNameOnServer = $obj->included[$i]->attributes->name;
//                    $playerStartOnServer = date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
//                    echo "<tr class='clickable-row' id=$playerIdOnServer >";
//                    echo "<td>";
//                    echo $i + 1;
//                    echo "</td>";
//                    echo "<td>";
//                    echo $playerIdOnServer;
//                    echo "</td>";
//                    echo "<td>";
//                    echo $playerNameOnServer;
//                    echo "</td>";
//                    echo "<td>";
//                    echo $playerStartOnServer;
//                    echo "</td>";
//                    echo "</tr>";
//                echo "</table>";
//

