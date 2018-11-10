<?php
include_once 'DBSettings.php';

    function DBConnect()
    {

        $DBSettings = getSettings();

        $DBHost = $DBSettings['dbhost'];
        $DBName = $DBSettings['dbname'];
        $DBUsername = $DBSettings['dbusername'];
        $DBPassword = $DBSettings['dbpassword'];

        $conn = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

    }


    function dropDownList(){

        $DBSettings = getSettings();

        $DBHost = $DBSettings['dbhost'];
        $DBName = $DBSettings['dbname'];
        $DBUsername = $DBSettings['dbusername'];
        $DBPassword = $DBSettings['dbpassword'];


        $conn = new PDO("mysql:host=$DBHost;dbname=$DBName", $DBUsername, $DBPassword);
        $smt = $conn->prepare('select battlemetrics_list_id,battlemetrics_list_name From battlemetrics_list');
        $smt->execute();
        $data = $smt->fetchAll();
        return $data;

}