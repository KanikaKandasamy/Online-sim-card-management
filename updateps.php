<html>
<head>
</head>
<?php
$a=$_POST['uname'];
$b=$_POST['psw'];

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
	
		$dbinsert= " UPDATE customer set psw='$b' where email='$a'";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
			echo "<script>
 window.location.href='login2.php';
alert('Password changed');

</script>";
		}
		else
		{ 
		echo "Error-Not inserted";
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