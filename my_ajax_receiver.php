<?php
////$request = '
////{
////  "1106399"
////}';
////
////$auth = "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjFkNjliMDViMDU5YTkxY2YiLCJpYXQiOjE1Mzk4NTMwOTksIm5iZiI6MTUzOTg1MzA5OSwiaXNzIjoiaHR0cHM6Ly93d3cuYmF0dGxlbWV0cmljcy5jb20iLCJzdWIiOiJ1cm46dXNlcjo2NjkzMyJ9.AARpUmxdX0_09rWu2yTvVj4Lw8ThqZFE98QA3MKrODk";
////
////$ch = curl_init("https://api.battlemetrics.com/server/");
////$data = http_build_query(["data" => $request]);
////curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
////curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
////curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
////curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
////$result = curl_exec($ch);
////curl_close($ch);
////
////echo $result;
//
////// Get cURL resource
////$curl = curl_init();
////// Set some options - we are passing in a useragent too here
////curl_setopt_array($curl, array(
////
////    CURLOPT_RETURNTRANSFER => 1,
////    CURLOPT_URL => 'https://api.battlemetrics.com/players/',
////    CURLOPT_USERAGENT => 'www.mjvanhaastert.nl/rust'
////));
////// Send the request & save response to $resp
////$resp = curl_exec($curl);
////// Close request to clear up some resources
////curl_close($curl);
////
////echo $resp;
//
//$data = array(
//    'foo' => 'bar',
//    'baz' => 'boom',
//    'cow' => 'milk',
//    'php' => 'hypertext processor'
//);
//
//echo http_build_query($data) . "\n";
//echo http_build_query($data, '', '&amp;');

$mysqli = new mysqli("localhost", "mjvanh1q_battlemetrics", "Oi&M6{X}bzuN", "mjvanh1q_battlemetrics");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT search_name FROM search_results ORDER by";
$result = $mysqli->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

/* associative array */
$row = $result->fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);

///* associative and numeric array */
//$row = $result->fetch_array(MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["CountryCode"]);

/* free result set */
$result->free();

/* close connection */
$mysqli->close();


