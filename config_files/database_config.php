<?php

    function CRUDListPlayers($method,$data) {

        $host = "localhost";
        $db_name = "mjvanh1q_battlemetrics";
        $username = "mjvanh1q_battlemetrics";
        $password = "WXr?DB0mb.k#";


        switch ($method){

            case 'create_list':
                try {
                    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO battlemetrics_list (battlemetrics_list_name)VALUES ($data)";
                    // use exec() because no results are returned
                    $conn->exec($sql);
                    echo "list created";
                }
                catch(PDOException $e)
                {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;
        }


    }





