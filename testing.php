<?php

function secondsToTime($seconds) {
    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");
    return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
}

echo secondsToTime(1509558491);
?>
<html>

</html>
<script>
    var base = 'https://api.battlemetrics.com/players/?filter[search]=';

    // use fetch on the /posts route, then pass the response along
    fetch(base + "Man1C").then(function(response) {
        // with the response, convert it to JSON, then pass it along
        response.json().then(function(json) {
            // print that JSON
            console.log(json).;
        });
    });
</script>