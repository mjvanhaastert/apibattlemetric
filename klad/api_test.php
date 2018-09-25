<?php
$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);

$serverName = $obj->data->attributes->name;
$serverPlayers = $obj->data->attributes->players;
echo "<table border='1'>";
echo "<th>ID:</th>";
echo "<th>Nickname:</th>";
for ($i = 0; $i < $serverPlayers; $i++) {
    //sleep(1);

    echo "<tr>";
    echo "<td>";
    echo "$i ";
    echo "</td>";
    echo "<td>";
    echo ($obj->included[$i]->attributes->name);
    echo "</td>";
    echo "</tr>";


    //print_r($obj->included[$i]->attributes->name);
};
echo "</table> ";

//"<br>";
//"<br>";
//echo "player0" . " = ". ($obj->included[0]->attributes->name) . "</br>";
//print_r($obj->included[0]->attributes);
//var_dump($obj->included[0]->attributes->identifier);
//echo "player1" . " = ". var_dump(($obj->included[1]->attributes->name)) . "</br>";
//echo "player2" . " = ". var_dump(($obj->included[2]->attributes->name)) . "</br>";
//echo "player3" . " = ". var_dump(($obj->included[3]->attributes->name)) . "</br>";
//echo "player4" . " = ". var_dump(($obj->included[4]->attributes->name)) . "</br>";
//echo "player5" . " = ". var_dump(($obj->included[5]->attributes->name)) . "</br>";