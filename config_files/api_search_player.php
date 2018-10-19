<?php

$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjFkNjliMDViMDU5YTkxY2YiLCJpYXQiOjE1Mzk4NTMwOTksIm5iZiI6MTUzOTg1MzA5OSwiaXNzIjoiaHR0cHM6Ly93d3cuYmF0dGxlbWV0cmljcy5jb20iLCJzdWIiOiJ1cm46dXNlcjo2NjkzMyJ9.AARpUmxdX0_09rWu2yTvVj4Lw8ThqZFE98QA3MKrODk";
//
//function apiSearch(){
//    CURLOPT_URL => $url,
//CURLOPT_SSL_VERIFYPEER => false,
//CURLOPT_SSL_VERIFYHOST => false,
//CURLOPT_RETURNTRANSFER => true,
//CURLOPT_POSTFIELDS => json_encode($fields),
//CURLOPT_HTTPHEADER => array(
//        'Content-Type: application/json'
//    ),
//CURLOPT_POST => true
//}


function searchPlayer(){

    // need to put its in a array so i can use it later on again
    $searchIdArray = array();
    $searchNameArray = array();
    $searchCreatedAtArray = array();
    $searchUpdateAtArray = array();

    //when sumbit is press on the search page
    if (isset($_POST['Submit'])) {
        //Get the name from the input field
        $inputNamePlayer = $_POST['inputNamePlayer'];
        //Go to battlemetrics and look for that person
        $json_player = "https://api.battlemetrics.com/players/?filter[search]=/".$inputNamePlayer.'&filter[server][search]=1106399';
        $json_player_data = file_get_contents($json_player);
        $objp = json_decode($json_player_data);
        //Make a couple of table headers
        echo "<table id='table_search_player' class=\"table table-bordered table-dark\">";
        echo "<div class='row'>";
        echo "<th scope=\"col\">Battlemetric ID:</th>";
        echo "<th scope=\"col\">Nickname</th>";
        echo "<th scope=\"col\">First Played on a server:</th>";
        echo "<th scope=\"col\">Last Timed Played on European Survivor:</th>";

    //loop the array and store its all in the different arrays
    for ($i = 0; $i < 10; $i++) {

        array_push($searchIdArray,$objp->data[$i]->attributes->id);
        array_push($searchNameArray,$objp->data[$i]->attributes->id);
        array_push($searchCreatedAtArray,$objp->data[$i]->attributes->id);
        array_push($searchUpdateAtArray,$objp->data[$i]->attributes->id);

        //build the tables and put all the information in it

        echo "<tr class='clickable-row' id='{$objp->data[$i]->attributes->id}'>";
        echo "<td>";
        echo $objp->data[$i]->attributes->id;
        echo "<td id='{$objp->data[$i]->attributes->name}'>";
        echo $objp->data[$i]->attributes->name;
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->createdAt));
        echo "</td>";
        echo "<td>";
        echo date('H:i:s d-M-Y',strtotime($objp->data[$i]->attributes->updatedAt));
        echo "</td>";

        }
        echo "</div>";
        echo "</tr>";
    }
};


function postToDiscord($message) 
{
    $data = array("content" => $message, "username" => "Webhooks");
    $curl = curl_init("https://discordapp.com/api/webhooks/YOUR-WEBHOOK-URL-HERE");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

//function addToList() {if(isset($_POST['ID'])){
//    $playerId = $_GET['ID'];
//    print $playerId;
//}

//}




///* numeric array */
////$row = $result->fetch_array(MYSQLI_NUM);
//printf ("%s (%s)\n", $row[0], $row[1]);
//
///* associative array */
////$row = $result->fetch_array(MYSQLI_ASSOC);
//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
//
/////* associative and numeric array */
////$row = $result->fetch_array(MYSQLI_BOTH);
////printf ("%s (%s)\n", $row[0], $row["CountryCode"]);
//
///* free result set */
//$result->free();
//
///* close connection */
//$mysqli->close();
//
//echo $row;


?>