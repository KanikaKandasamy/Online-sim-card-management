<html>
<body>
 <?php session_start();?>// session for this user has been started
 <?php
 
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

If ($connection)
//$m = oci_error();
//echo $m['message'], "\n";
//error fuction returns an oracle message.
//exit;
$query = "SELECT psw FROM customer WHERE email =
 :uname and psw=:psw"; 
//query is sent to the db to fetch row id.
 $stid = oci_parse($connection, $query);
/*oci_parse fuction prepares the db to execute the statement.
requires two parameters resource($con)and sql string.*/
if (isset($_POST['uname']) || isset($_POST['psw'])){           
$email = $_POST['uname'];
$pass=$_POST['psw'];
}
oci_bind_by_name($stid, ':uname', $email);
oci_bind_by_name($stid, ':psw', $pass);
/*oci_bind_by_name function tells php which variable to use.
They are references of the original variables.*/
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
//oci_fetch_array returns a row from the db.
 if($email=='admin'&&$pass=='root123')
	 {
		 header('Location:admin.php');
	 }
else{
	if ($row) {
	
 $_SESSION['email']=$_POST['uname'];
 echo"log in successful";
 if($_SESSION['email'])
 header('Location:dubuks.php');
  }
 else {
//echo("The person " . $email . " is not found .
//Please check the spelling and try again or check password");
 echo "<script>
 window.location.href='login2.php';
alert('Invalid username or password');

</script>";
exit;
}
}
 
$ID = $row['psw']; 
oci_free_statement($stid);
oci_close($con);

//header function locates you to a welcome page saved s wel.php
 ?>
 </body>
 </html>