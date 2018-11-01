<?php
$servername = "localhost";
$username = "mjvanh1q_battlemetrics";
$password = "-80zuZbq4^&%";
$dbname = "mjvanh1q_battlemetrics";

$list_id = mt_rand();

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
}


$group_name = mysqli_real_escape_string($conn, $_POST['group_name']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);



$sql = "INSERT INTO battlemetrics_list(battlemetrics_list_id,battlemetrics_list_name,battlemetrics_list_note)
VALUES ('$list_id','$group_name','$comment')";

if ($conn->query($sql) === TRUE) {
    echo "If stored the list named " . $group_name . " for you in the database... because somebody does not want to write it on a piece of paper....";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();