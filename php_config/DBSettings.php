<?php
function dbconnect($listname,$note){


    $addlistname = $listname;
    $addnote = $note;

    $servername = "localhost";
    $dbname = "mjvanh1q_battlemetrics";
    $username = "mjvanh1q_battlemetrics";
    $password = "Ti288vA2zo7B";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO battlemetrics_list (battlemetrics_list_name, battlemetrics_list_note)VALUES ($addlistname,$addnote)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    mysqli_close($conn);

}

