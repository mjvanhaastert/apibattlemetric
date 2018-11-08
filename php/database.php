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
