<?php

$myfile = fopen("location.txt", "w")
$txt = "lat: " . $_GET["lat]" . "\nlong:"  . $_GET["long"];
fwrie($myfile, $txt);
fclose($myfile);







?>