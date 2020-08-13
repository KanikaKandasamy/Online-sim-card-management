<html>
<head>
</head>
<?php session_start();?>
<?php
$email=$_SESSION['email'];
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['dob'];
$d=$_POST['age'];
$e=$_POST['addr'];

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
		$dbinsert= " UPDATE customer set fname='$a',lname='$b',dob='$c',age='$d',addr='$e' where email='$email'";
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