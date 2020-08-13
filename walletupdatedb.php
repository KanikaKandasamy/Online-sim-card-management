<html>
<head>
</head>
<?php session_start();?>
<?php
$a=$_SESSION['amount'];
$b=$_SESSION['e-mail'];
$c=$_SESSION['balance'];
$otp=$_SESSION['otp'];
$e=$_POST['onetp'];
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
		if($e==$otp)
		{
		$d=$a+$c;
		$dbinsert= " UPDATE customer set wallet='$d' where email='$b'";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
			echo "<script>
 window.location.href='dubuks.php';
alert('Wallet Updated');

</script>";
		}
		else
		{ 
		echo "Error-Not inserted";
		}
		}
		else{
			echo "<script>
 window.location.href='walletupdate1.php';
alert('Incorrect OTP');

</script>";
		}
				oci_execute($result);
}
?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>