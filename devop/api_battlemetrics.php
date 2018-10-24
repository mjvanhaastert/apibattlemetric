//https://api.battlemetrics.com/servers/<server_id>?include=session



<?php
$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session,identifier';
$jsondata = file_get_contents($json_string);
$json = json_decode($jsondata,true);
$dateparse = date( 'd/m/Y', ( $json->date / 1000 ) );


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
$serverRustLastSeedChange = $json["data"]["attributes"]["details"]["rust_last_seed_change"];
$serverRustLastWipe = $json["data"]["attributes"]["details"]["rust_last_wipe"];
$playerName = $json["included"]["1"]["attributes"]["name"];
$playerId = $json["included"][0]["attributes"]["relationships"]["player"]["data"]["id"];
$serverPlayerStart = $json["included"]["attributes"]["start"];
$serverPlayerStop = $json["included"]["attributes"]["stop"];
?>
<!DOCTYPE html>
<body>
<?php
print_r($serverName ." ". $serverIp.":".$serverPort. " Players:"."$serverPlayers"."/".$serverMaxPlayers. "<br>" .
    "Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " .
    $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . $serverRustLastSeedChange . "<br>" . "Wiped: " .$serverRustLastWipe);

$length = count($json["included"]);
for ($i = 0; $i < $length; $i++) {
print $json["included"][$i]["attributes"]["name"]. "<br>" . $json["included"][$i]["attributes"]["start"];
}
?>
<form action="api_battlemetrics.php" method="POST">
  <input type="text" value="Player" name="playerSearch">
  <input type="submit" value="search" name="action1">
</form>
<?php
if($_POST["action1"]) {


}

?>
</body>
</html>




/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 21-9-18
 * Time: 12:35
 */