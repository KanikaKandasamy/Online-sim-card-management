<html>
<head>
<style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php session_start();?>
<?php
$email=$_SESSION['email'];
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
	$query = "SELECT price from rate where des='Network Change Rate'"; 
 $stid = oci_parse($connection, $query);
if (isset($_POST['uname'])){           
$email = $_POST['uname'];
}
oci_bind_by_name($stid, ':uname', $email);
oci_execute($stid);
$row = oci_fetch($stid);
$b=oci_result($stid,'PRICE');
$_SESSION['email']=$email;
}
?>
<style>
body {
  font-family: "Lato", sans-serif;
}
#header
{
	top:0;
	//padding: 8px;
    color: white;
    background-color: #ffffff;
	height: 20px;
	color: #eb1417;
}
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ddd;
  box-sizing: border-box;
  padding-left: 5px;
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
  position: fixed; /* Stay in place */
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

button {
  background-color: #0066ff;
  color: white;
  padding: 14px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}


button:hover {
  opacity: 0.8;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

.boxed {
width:600px;
height:500px;
  border: 1px solid white;
  background-color:#000000;
  opacity:0.6;
  color:#ffffff;
 
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
table {
  font-family: arial, sans-serif;
 // border-collapse: collapse;
  width: 60%;
}
td{
  //border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
th{
  //border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:#d12e30;
}
/*tr:nth-child(even) {
  background-color: #dddddd;
}*?
</style>
<body>
   <title>
     SIM PAL
   </title>

<div id="header">
<p style="text-align:left;">
<img src="logo.jpg" alt="home" width="45" height="45">
    <span style="font-size:50px;"><b>SIM PAL</b></span>
    <span style="float:right;">
       Sim card in your hand from your Home:) 
    </span>
</p>
</div>
<br>
<br>

<div class="topnav">
  <a href="login1.html" style="width:auto;cursor:pointer;float:right"><i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
  <br>
  <form method="POST" action="netupdateplandb.php">
   <center>
  <h2>Update Sim Order Rate</h2>
  <br>
  <br>
  <table>
  <tr>
    <th><label for="rate">Sim Order Rate</label></th>
    <td><input type="text" value="<?php echo $b?>" style="width:50%" name="rate" required></td>
	</tr>
 </table>
 <button type="submit"  class="signupbtn" style="align:center;">Update</button>&nbsp &nbsp
<button type="submit"   onclick="window.location='http://localhost/update.php';return false;"class="signupbtn" style="align:center;">Cancel</button>

 </center>
  </form>
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