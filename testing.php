<?php

function secondsToTime($seconds) {
    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");
    return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
}

echo secondsToTime(1509558491);
?>
<html>

<a href="steam://connect/31.186.250.66:28061">test</a>
</html>