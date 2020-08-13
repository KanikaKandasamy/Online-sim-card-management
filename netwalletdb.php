<html>
<head>
</head>
<?php session_start();?>
<?php
$a=$_SESSION['amount'];
$b=$_SESSION['balance'];
$mail=$_SESSION['e-mail'];
$no=$_SESSION['no'];
$username = 'system';

// Oracle DB user password
$password = '140478';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect(
 $username,
 $password,
 $connection_string
);

If (!$connection)
   echo 'Oops :( connection failed';
else
{
	if($b<$a)
	{
		echo "<script>
alert('Wallet Balance low');
window.location.href='recharge.php';
</script>";
	}
	else
	{
		$c=$b-$a;
		$dbinsert= " UPDATE customer set wallet=$c where email='$mail'";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'leoW9k74dec-TngoUY7m0RDoaf4ZCZ7FT2eeHapOk4');

$numbers = array($no);
$sender = 'TXTLCL';
$message = "Hello ".$mail." Your Network Change will be done in 24 hours";

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
		echo "<script>
 window.location.href='dubuks.php';
alert('Success');
</script>";
		}
		else
		{ 
		echo "Error-Not inserted";
		}
				oci_execute($result);
	}
}
?>
</body>
</html>