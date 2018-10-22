<?php
// every time page is loaded we need up to date information from the server.




$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);
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
    $playerIdOnServer = $obj->included[$i]->relationships->player->data->id;
    $playerNameOnServer = $obj->included[$i]->attributes->name;
    $playerStartOnServer = date('H:i:s d-M', strtotime($obj->included[$i]->attributes->start));
}

function ServerPlayerList(){

    global $obj;
    $playersOnServer = $obj->data->attributes->players;
    echo "<table id='player_server' class=\"table table-bordered table-dark\">";
    echo "<th scope=\"col\">number</th>";
    echo "<th scope=\"col\">ID:</th>";
    echo "<th scope=\"col\">Nickname:</th>";
    echo "<th scope=\"col\">Joined:</th>";
    for ($i = 0; $i < $playersOnServer; $i++) {
        $playerIdOnServer = $obj->included[$i]->relationships->player->data->id;
        $playerNameOnServer = $obj->included[$i]->attributes->name;
        $playerStartOnServer = date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
        echo "<tr class='clickable-row' id='{$obj->data->attributes->id}' >";
        echo "<td>";
        echo $i + 1;
        echo "</td>";
        echo "<td>";
        echo $playerIdOnServer;
        echo "</td>";
        echo "<td>";
        echo $playerNameOnServer;
        echo "</td>";
        echo "<td>";
        echo $playerStartOnServer;
        echo "</td>";
        echo "</tr>";


    }
    echo "</table>";
}

?>
