<?php
$postdata = file_get_contents("php://input");
//echo $postdata;
//exit;

$postdata = http_build_query(
    array(
        'data' => $postdata
    )
);



$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);


$context  = stream_context_create($opts);


$result = file_get_contents('http://cmd.withdz.com/ok/dz.php', false, $context);

echo "ok = $result";


?>
