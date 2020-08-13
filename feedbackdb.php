<html>
<head>
</head>
<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['fbk'];

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
	
		$dbinsert= " INSERT INTO feedback(fname,lname,email,fbk)
					values('$a','$b','$c','$d')";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{
			echo "<script>
 window.location.href='login1.html';
alert('Feedback Submitted...We will reach u soon:)');

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