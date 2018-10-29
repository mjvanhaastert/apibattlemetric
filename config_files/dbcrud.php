<?php

class database


function CRUDListPlayers($method,$data) {

    $servername = "localhost";
    $db_name = "mjvanh1q_battlemetrics";
    $username = "mjvanh1q_battlemetrics";
    $password = "WXr?DB0mb.k#";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }


    switch ($method){

        case 'create_list':
            $conn->
    }



}



$host = "localhost";
$userName = "mjvanh1q_battlemetrics";
$password = "WXr?DB0mb.k#";
$dbName = "mjvanh1q_battlemetrics";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>