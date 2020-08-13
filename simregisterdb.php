<html>
<head>
</head>
<?php session_start();?>
<?php
$a=$_SESSION['uname'];
$b=$_POST['np'];
$c=$_POST['nt'];
$d=$_POST['aadhar'];
$no=$_SESSION['no'];
$_SESSION['ph']=$_POST['ph'];
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
		$dbinsert= " INSERT INTO simreg(email,np,nt,aadhar)
					values('$a','$b','$c','$d')";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
			echo "<script>
 window.location.href='regwallet.php';

</script>";
		}
		else
		{ 
		echo "Error-Not inserted";
		}
				oci_execute($result);
}
$_SESSION['no']=$no;
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