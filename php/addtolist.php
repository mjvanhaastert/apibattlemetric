<?php
include_once 'DBSettings.php';

getSettings();

$DBSettings = getSettings();

$DBHost = $DBSettings['dbhost'];
$DBName = $DBSettings['dbname'];
$DBUsername = $DBSettings['dbusername'];
$DBPassword = $DBSettings['dbpassword'];

$ListId = $_POST['add_List_Id'];
$PlayerId = $_POST['add_PlayerId'];
$PlayerName = $_POST['add_Player_Name'];

$conn = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

$sql = "INSERT INTO player (id_list, id, name)
VALUES ('$ListId', '$PlayerId', '$PlayerName')";

if ($conn->query($sql) === TRUE) {
    echo "If added ".$PlayerName." To the list";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//
//$dataListId = $_POST['add_List_Id'];
//$dataModalPlayerId = $_POST['add_PlayerId'];
//$dataModalPlayerName = $_POST['add_Player_Name'];
//
//
//try {
//    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO battlemetrics_player (battlemetrics_list_id, battlemetrics_player_createdat, battlemetrics_player_id, battlemetrics_player_name)
//    VALUES ('$dataListId','$dataModalPlayerDate','$dataModalPlayerId', '$dataModalPlayerName')";
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo $dataModalPlayerName." added to the list " . $dataListId.$dataModalPlayerId.$dataModalPlayerName.$dataModalPlayerDate.$dataAddSelectValue;
//}
//catch(PDOException $e)
//{
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
