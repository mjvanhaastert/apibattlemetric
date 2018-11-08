<?php
include 'api_functions.php';

getSettings();

$settings = getSettings();

$dbhost = $settings['dbhost'];
$dbname = $settings['dbname'];
$dbusername = $settings['dbusername'];
$dbpassword = $settings['dbpassword'];

$dataListId = $_POST['add_Player_ListId'];
$dataModalPlayerId = $_POST['add_PlayerId'];
$dataModalPlayerName = $_POST['add_Player_Name'];
$dataModalPlayerDate = $_POST['add_Player_Date'];
$dataAddSelectValue = $_POST['add_Select_Value'];

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO battlemetrics_player (battlemetrics_list_id, battlemetrics_player_createdat, battlemetrics_player_id, battlemetrics_player_name)
    VALUES ('$dataListId','$dataModalPlayerDate','$dataModalPlayerId', '$dataModalPlayerName')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo $dataModalPlayerName." added to the list " . $dataListId.$dataModalPlayerId.$dataModalPlayerName.$dataModalPlayerDate.$dataAddSelectValue;
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
