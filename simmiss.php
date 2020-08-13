<html>
<head>
<?php session_start();?>
<?php


$email=$_SESSION['email'];
$no=$_SESSION['no'];
$username = 'system';
$ph=$_SESSION['ph'];
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
	$q = "SELECT price FROM rate WHERE des='Sim Order Rate'"; 
 $st = oci_parse($connection, $q);
if (isset($_POST['uname'])){           
$email = $_POST['uname'];
}
oci_execute($st);
$row = oci_fetch($st);
$a=oci_result($st,'PRICE');
	
	$query = "SELECT wallet FROM customer WHERE email =:uname"; 
 $stid = oci_parse($connection, $query);
if (isset($_POST['uname'])){           
$email = $_POST['uname'];
}
oci_bind_by_name($stid, ':uname', $email);
oci_execute($stid);
$row = oci_fetch($stid);
$b=oci_result($stid,'WALLET');

	
$_SESSION['amount']=$a;
$_SESSION['balance']=$b;
$_SESSION['e-mail']=$email;
$_SESSION['no']=$no;
}
?>
<style>
#header
{
	top:0;
	//padding: 8px;
    color: white;
//    background-color: #ffffff;
	height: 20px;
	color: #eb1417;
}
#nav {
    float: left;
    max-width: 100%;
    margin: 0;
    padding: 1em;
}
.topnav {
  overflow: hidden;
  background-color: #d12e30;
  width:100%;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #000000;
  color: white;
}

.topnav a.active {
  background-color: #000000;
  color: white;
}


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }

.column {
  float: left;
  width: 46%;
  padding: 20px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

span.psw {
  float: right;
  padding-top: 16px;
}
 box-sizing: border-box;
}

.column {
  
  width: 50%;
  padding-top: 30px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
 // position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
	
}


/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 50% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

.boxed {
	width:500px;
	height:70%;
	border: 1px solid white;
	background-color:#ffffff;
	opacity:100;
	color:#000000;
}
.container {
  //padding-top: 50px;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ddd;
  box-sizing: border-box;
  padding-left: 5px;
}

/* Set a style for all buttons */
button {
  background-color: #0066ff;
  color: white;
  padding: 14px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}


button:hover {
  opacity: 0.8;
}
.sidenav {
  height: 80%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 80px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 50px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav a.active {
  background-color: #3b3a3a;
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<title>
SIM REGISTRATION
</title>
</head>

<body>


<body>
<div id="header">
<p style="text-align:left;">
<img src="logo.jpg" alt="home" width="45" height="45">
    <label style="font-size:50px;"><b>SIM PAL</b></label>
    <label style="float:right;">
       Sim card in your hand from your Home:) 
    </label>
</p>
</div>
<br>
<br>
<center>
<div id="main">
<p style="padding-left:30px;"
  <br><br><br>
<center><h2 style="text-align:center;">SIMCard MISS</h2> </center>
<br>
<form method="POST" action="simmiss2.php">

<br><br>
<label for="no"><b>Narrative&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </b></label>
	   <input type="text" style="width:30%;height:25px;" name="narrative" >
	   <br>
	  <br>    
	  Date of miss:<input type="text" pattern="\d{1,2}-[A-Z]{2,}-\d{4}"/>
	  <br><br>
	  Block the number if not found:&nbsp; &nbsp; &nbsp;
	<input checked type='radio' name='nt' value='Yes'>Yes
	<input type='radio' name='nt' value='No'>No<br><br>
	Number to send further notifications:<input type="text" name="ph" pattern=".{10}"/><br><br>
<button type="submit" class="signupbtn" style="align:center;">Submit</button>
<button type="cancel" onclick="window.location='http://localhost/simregister.php';return false;"class="signupbtn" style="align:center;">Cancel</button><br>
<button type="wallet"  onclick="window.location='http://localhost/walletupdate.php';return false;" class="signupbtn" style="align:center;">Wallet</button>
  </form>
  </p>
</div>
</center>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
