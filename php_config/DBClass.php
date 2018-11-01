<?php
require_once( 'DBSettings.php' );

//$dbhost = 'localhost';
//// Database name
//$dbname = 'mjvanh1q_battlemetrics';
//// Username
//$dbusername = 'mjvanh1q_battlemetrics';
//// Password
//$dbpassword = '-80zuZbq4^&%';
//$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);

function dbconnect($methode){
    $dbhost = 'localhost';
// Database name
    $dbname = 'mjvanh1q_battlemetrics';
// Username
    $dbusername = 'mjvanh1q_battlemetrics';
// Password
    $dbpassword = '-80zuZbq4^&%';
//    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $results = $conn->query("SELECT * FROM battlemetrics_list");
//    switch ($methode){
//        case 'query':
//            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
//
//            $results = $conn->query("SELECT * FROM battlemetrics_list");
//            print_r( $results);
//    }

return $results;

}

dbconnect('query');
//
//class DBClass{
//
//    protected $dbhost = 'localhost';
//$dbname = 'mjvanh1q_battlemetrics';
//$dbusername = 'mjvanh1q_battlemetrics';
//$dbpassword = '-80zuZbq4^&%';
//
//function DBfunc()
//{
//
//
//    try {
//        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";
//    } catch (PDOException $e) {
//        echo "Connection failed: " . $e->getMessage();
//    }
////    return $conn;
//}
//
//}




