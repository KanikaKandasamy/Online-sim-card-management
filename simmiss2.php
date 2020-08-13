<?php session_start();?>
<?php
$ph=$_POST['ph'];
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'leoW9k74dec-TngoUY7m0RDoaf4ZCZ7FT2eeHapOk4');

$numbers = array($ph);
$sender = 'TXTLCL';
$otp=mt_rand(100000,999999);
$message = "Hello " . $email . " Your Complaint of miss has being recorded "; 
    $result = $textlocal->sendSms($numbers, $message, $sender);
echo "<script>window.location.href='simmiss.php';alert('Complaint send.Futher details will be notified!')</script>";
?>