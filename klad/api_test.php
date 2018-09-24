<?php
$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session,identifier';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);

$serverName = $obj->data->attributes->name;
$serverPlayers = $obj->data->attributes->players;

for ($i = 0; $i < $serverPlayers; $i++) {
    sleep(1);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>";
    print "$i <br>";
    echo "</td>";
    echo "<td>";
    echo ($obj->included[$i]->attributes->name);
    echo "</td>";
    echo "</tr>";
    echo "</table> ";

    //print_r($obj->included[$i]->attributes->name);
};
"<br>";
"<br>";
echo "player0" . " = ". var_dump(($obj->included[0]->attributes->name)) . "</br>";
echo "player1" . " = ". var_dump(($obj->included[1]->attributes->name)) . "</br>";
echo "player2" . " = ". var_dump(($obj->included[2]->attributes->name)) . "</br>";
echo "player3" . " = ". var_dump(($obj->included[3]->attributes->name)) . "</br>";
echo "player4" . " = ". var_dump(($obj->included[4]->attributes->name)) . "</br>";
echo "player5" . " = ". var_dump(($obj->included[5]->attributes->name)) . "</br>";