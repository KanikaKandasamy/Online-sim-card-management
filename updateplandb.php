<html>
<head>
</head>
<?php session_start();?>
<?php
$email=$_SESSION['email'];
$a=$_POST['rate'];

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
		$dbinsert= " UPDATE rate set price=$a where ";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
			echo "<script>
 window.location.href='dubuks.php';
alert('Profile Updated');

</script>";
		}
		else
		{ 
		echo "Error-Not inserted";
		}
				oci_execute($result);
}
?>
</body>
</html>