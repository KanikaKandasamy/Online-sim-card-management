<?php session_start();?>
<?php
$d=$_POST['amount'];
$no=$_SESSION['no'];
$email=$_SESSION['e-mail'];
$b=$_SESSION['balance'];
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'leoW9k74dec-TngoUY7m0RDoaf4ZCZ7FT2eeHapOk4');

$numbers = array($no);
$sender = 'TXTLCL';
$otp=mt_rand(100000,999999);
$message = "Hello " . $email . " Your OTP: " . $otp . " for recharge of ".$d. " to SIMPAL Wallet.";



try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    echo "<script>
 window.location.href='walletupdate1.php';
alert('OTP sent to registered mobile number');

</script>";
$_SESSION['otp']=$otp;
$_SESSION['no']=$no;
$_SESSION['email']=$email;
$_SESSION['amount']=$d;
$_SESSION['balance']=$b;
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>