<html>
<head>
</head>
<?php session_start();?>
<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['dob'];
$d=$_POST['age'];
$e=$_POST['addr'];
$f=$_POST['email'];
$g=$_POST['psw'];

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
	$query = "SELECT email FROM customer WHERE email =
 :email"; 
 $stid = oci_parse($connection, $query);
if (isset($_POST['email'])){           
$email = $_POST['email'];
}
oci_bind_by_name($stid, ':email', $email);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);

 if ($row) {
	 echo "<script>
 window.location.href='signup.php';
alert('User already exist');

</script>";
exit;

  }
 else {
	  $_SESSION['email']=$_POST['email'];
 $dbinsert= " INSERT INTO customer(fname,lname,dob,age,addr,email,psw,wallet)
					values('$a','$b','$c','$d','$e','$f','$g',50)";
		$result=oci_parse($connection,$dbinsert);
		if($result)
		{$_SESSION['email']=$_POST['email'];
 echo"log in successful";
 if($_SESSION['email'])
 header('Location:dubuks.php');
		}
		else
		{ 
		echo "Error-Not inserted";
		}
				oci_execute($result);
 
}
	
		
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