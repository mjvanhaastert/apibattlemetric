<?php
include('config_files/simple_html_dom.php');
/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 4-10-18
 * Time: 15:07
 */


$steamIdHistory = 'drtacticz';
$url = 'https://steamcommunity.com/id/'.$steamIdHistory.'/namehistory';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
$results = curl_exec($curl);


echo $results;



//$output = curl_exec($ch); echo $output;
curl_close($curl);
?>