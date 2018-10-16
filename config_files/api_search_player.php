<?php

function searchPlayer($objp){

    if (isset($_POST['Submit'])) {
        $inputNamePlayer = $_POST['inputNamePlayer'];
        $json_player = "https://api.battlemetrics.com/players/?filter[search]=/".$inputNamePlayer;
        $json_player_data = file_get_contents($json_player);
        $objp = json_decode($json_player_data);
    }
    for ($i = 0; $i < 10; $i++) {
        $playerResultId = $objp->data[$i]->attributes->id;
        $playerResultName =  $objp->data[$i]->attributes->name;
        $playerResultCreatedAt = $objp->data[$i]->attributes->createdAt;
        $playerResultUpdatedAt = $objp->data[$i]->attributes->updatedAt;
        var_dump( $playerResultId, $playerResultName,$playerResultCreatedAt, $playerResultUpdatedAt);
    }
};





//    if (isset($_POST['submit'])){
//        $inputNamePlayer = $_POST['inputNamePlayer'];
//        $json_string = 'https://api.battlemetrics.com/players/?filter[search]=/".$inputNamePlayer';
//        $jsondata = file_get_contents($json_string);
//        $obj = json_decode($jsondata);
//
//        return $obj;
//    }