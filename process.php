<?php
session_start();
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['uname'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
$headers = "From: me@example.com" . "\r\n" .
"CC: deepthisiva99@gmail.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['btn-save']))
{
$_SESSION['uname']=$_POST['uname'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" );
} ?>