<?php
include 'api_functions.php';

getSettings();

$settings = getSettings();

$dbhost = $settings['dbhost'];
$dbname = $settings['dbname'];
$dbusername = $settings['dbusername'];
$dbpassword = $settings['dbpassword'];

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
//$smt = $conn->prepare('select battlemetrics_list_id,battlemetrics_list_name From battlemetrics_list');
//$smt->execute();
//$data = $smt->fetchAll();
////var_dump( $data);
//var_dump($data);

$stmt = $conn->query("
SELECT * 
FROM battlemetrics_player 
JOIN battlemetrics_list
ON battlemetrics_list.battlemetrics_list_id=battlemetrics_player.battlemetrics_list_id
ORDER BY battlemetrics_list.battlemetrics_list_id
");

echo "<table>";
echo "<tr>";
echo "<th>"."Listname:"."</th>";
echo "<th>"."PlayerName:"."</th>";
echo "<th>"."Comment:"."<th>";
echo "</tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>".$row['battlemetrics_list_name']."</td>";
    echo "<td>".$row['battlemetrics_player_name']."</td>";
    echo "<td>".$row['battlemetrics_list_note']."</td>";
    echo "</tr>";
}
echo "</table>";

//$conn = mysqli_connect($dbhost, $dbusername, $dbpassword,$dbname);
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//
//$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
//$result= mysqli_query($conn, "SELECT battlemetrics_list_name FROM battlemetrics_list");
//
//var_dump($result);
?>





