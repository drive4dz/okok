<?php
$postdata = file_get_contents("php://input");
echo $postdata;
exit;


$postdata =json_decode($postdata);

$vv = $postdata->id;


$dz = file_get_contents("http://cmd.withdz.com/ok/dz.php?data=$postdata");
echo "ok / $vv = $dz";

?>
