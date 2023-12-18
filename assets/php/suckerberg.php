<?php 

$myfile = fopen("/assets/Demo/store.txt", "w");
$txt = "IP Address: " . $_SERVER["REMOTE_ADDR"]
 . "\n\nlatitude: " . $_GET["lat"] . "\nlongitude: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>