<?php

function listData(){

include 'config_files/api_functions.php';

$settings = getSettings();

$dbhost = $settings['dbhost'];
// Database name
$dbname = $settings['dbname'];
// Username
$dbusername = $settings['dbusername'];
// Password
$dbpassword = $settings['dbpassword'];


$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$smt = $conn->prepare('select battlemetrics_list_id,battlemetrics_list_name From battlemetrics_list');
$smt->execute();
$data = $smt->fetchAll();
//var_dump( $data);
return $data;

}



//$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
////$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////$stmt = $conn->prepare("SELECT battlemetrics_list_name FROM battlemetrics_list");
//
//$stmt = $conn->query("SELECT battlemetrics_list_name FROM battlemetrics_list");
//
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//    $conn= "<option value='" . $row['battlemetrics_list_name'] . "'>" . $row['battlemetrics_list_name'] . "</option>";
//}
//
//$stmt->execute();

//
//try {
//    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//}
//catch(PDOException $e)
//{
//    echo "Connection failed: " . $e->getMessage();
//}
