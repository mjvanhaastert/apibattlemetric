<?php


//if (isset($_POST['ID'])) {
//    $clickid = $_POST['clickid'];
//    echo $clickid;

//todo ik moet nog een api call maken met de gekregen id van de gebruiker die ik krijg
//api call, krijg terug true/false of player op server is.
//https://api.battlemetrics.com/players/125770993/servers/1106399


$idSearchPlayer = $id;

$servername = "localhost";
$username = "mjvanh1q_battlemetrics";
$database = "mjvanh1q_battlemetrics";
$password = "Oi&M6{X}bzuN";

$json_player = "https://api.battlemetrics.com/players/".$idSearchPlayer."/servers/1106399";
$json_player_data = file_get_contents($json_player);
$objp = json_decode($json_player_data);
//todo I only need the players id and online status the rest i already got, i might need to chance that
//why would i need to import all of the results from search in the database if i only need 1 or 2?
//ik moet een loop bouwen om door alle players heen te gaan. 1sec delay
$idPlayer = $objp->data->id;
$onlineStatus = $objp->data->attributes->online;


$con=mysqli_connect("localhost","mjvanh1q_battleme  trics","Oi&M6{X}bzuN","mjvanh1q_battlemetrics");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
mysqli_query($con,"SELECT * FROM mjvanh1q_battlemetrics");
mysqli_query($con,"INSERT INTO player_online_status (id,online_status)
VALUES ($idSearchPlayer,$onlineStatus)");

mysqli_close($con);


/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 17-10-18
 * Time: 9:02
 */