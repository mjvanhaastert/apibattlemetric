<?php
$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session,identifier';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
$dateparse = date( 'd/m/Y', ( $obj->date / 1000 ) );


$serverName = $obj["data"]["attributes"]["name"];
$serverIp = $obj["data"]["attributes"]["ip"];
$serverPort = $obj["data"]["attributes"]["port"];
$serverPlayers = $obj["data"]["attributes"]["players"];
$serverMaxPlayers = $obj["data"]["attributes"]["maxPlayers"];
$serverDetails = $obj["data"]["attributes"]["details"];
$serverRustBuild = $obj["data"]["attributes"]["details"]["rust_build"];
$serverRustEntCnt = $obj["data"]["attributes"]["details"]["rust_ent_cnt_i"];
$serverRustWorldSeed = $obj["data"]["attributes"]["details"]["rust_world_seed"];
$serverRustWorldSize = $obj["data"]["attributes"]["details"]["rust_world_size"];
$serverRustLastSeedChange = $obj["data"]["attributes"]["details"]["rust_last_seed_change"];
$serverRustLastWipe = $obj["data"]["attributes"]["details"]["rust_last_wipe"];
$playerName = $obj["included"]["1"]["attributes"]["name"];
$playerId = $obj["included"][0]["attributes"]["relationships"]["player"]["data"]["id"];
$serverPlayerStart = $obj["included"]["attributes"]["start"];
$serverPlayerStop = $obj["included"]["attributes"]["stop"];
?>
<!DOCTYPE html>
<body>
<?php
print_r($serverName ." ". $serverIp.":".$serverPort. " Players:"."$serverPlayers"."/".$serverMaxPlayers. "<br>" .
    "Rust server build: " . $serverRustBuild . "<br>" . "Server ent cnt:" .  $serverRustEntCnt . "<br>" . "Server seed: " .
    $serverRustWorldSeed . "<br>" . "World size: " . $serverRustWorldSize . "<br>" . "Last seed change: " . $serverRustLastSeedChange . "<br>" . "Wiped: " .$serverRustLastWipe);

$length = count($obj["included"]);
for ($i = 0; $i < $length; $i++) {
print $obj["included"][$i]["attributes"]["name"]. "<br>" . $obj["included"][$i]["attributes"]["start"];
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