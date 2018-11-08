<?php

function listData(){

include 'config_files/api_functions.php';

$settings = getSettings();

$dbhost = $settings['dbhost'];
$dbname = $settings['dbname'];
$dbusername = $settings['dbusername'];
$dbpassword = $settings['dbpassword'];


$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$smt = $conn->prepare('select battlemetrics_list_id,battlemetrics_list_name From battlemetrics_list');
$smt->execute();
$data = $smt->fetchAll();
//var_dump( $data);
return $data;

}

