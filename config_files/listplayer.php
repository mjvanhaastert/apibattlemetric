<?php
    $conn = new mysqli("localhost", "mjvanh1q_battlemetrics", "Oi&M6{X}bzuN", "mjvanh1q_battlemetrics");

//    $query = "SELECT player_id, player_nick FROM track_player_list";
$result= mysqli_query($conn, "SELECT * FROM track_player_list");


   echo "<table width='700', cellpadding=5 callspacing=5 border=1>";
   echo "<tr>";
   echo "<th>ID</th>";
   echo "<th>Name</th>";
   echo "<th>Status</th>";
   echo "</tr>";

   while($rows = mysqli_fetch_array($result)):

       $json_player = "https://api.battlemetrics.com/players/".$rows['player_id']."/servers/1106399";
       $json_player_data = file_get_contents($json_player);
       $objp = json_decode($json_player_data);
       $status = $objp->data->attributes->online;


   echo "<tr>";
   echo "<td>";
   echo $rows['player_id'];
   echo "</td>";
   echo "<td>";
   echo $rows['player_nick'];
   echo "</td>";

   if ($status == false){
       echo "<td style='background: rebeccapurple'>";
       echo "Offline";
       echo "</td>";
//       postToDiscord($rows['player_nick'] . "Is offline");
   }
   else{
       echo "<td style='background: green'>";
       echo "Online";
       echo "</td>";
   }
   echo "</tr>";
   endwhile;

   echo "</table>";


function postToDiscord($message)
{
    $data = array("content" => $message, "username" => "List");
    $curl = curl_init("https://discordapp.com/api/webhooks/502930492971155468/AKpMWcaekhVQMKXNTSmSGRIHJiNeNNLx0p7J1XEdRTxUr9GUE47qQiWfINDL-gu0Z-3M");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}