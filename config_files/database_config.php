<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "mjvanh1q_battlemetrics";
    private $username = "mjvanh1q_battlemetrics";
    private $password = "Oi&M6{X}bzuN";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
/**
 * Created by PhpStorm.
 * User: Man1C
 * Date: 20-10-2018
 * Time: 01:16
 */