<html>
<head>
<style>
#header
{
	top:0;
	//padding: 8px;
    color: white;
    background-color: #ffffff;
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
  height:45px;
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

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 50% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

.boxed {
	width:500px;
	height:85%;
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
  width: 50%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ccc;
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
  width: 69%;
}


button:hover {
  opacity: 0.8;
}


</style>
<title>
FEEDBACK FORM
</title>
</head>
<body bgcolor=#0000>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav">
<a style="background-color:black;"><img src="logo.jpg" alt="home" width="20" height="20" >&nbsp;&nbsp;<b>SIM PAL</b></a>
  <a href="login1.html"><i class="fa fa-fw fa-home"></i>Home</a>
  <a class="active"href="#"><i class="fa fa-fw fa-envelope"></i>FeedBack</a>
  <a href="login2.php" style="width:auto;cursor:pointer;float:right"><i class="fa fa-fw fa-user"></i>Login</a>
  <a href="signup.php" style="width:auto;cursor:pointer;float:right"><i class="fa fa-fw fa-user"></i>SignUp</a>
  
</div>  
<br><br>
<table>
<tr>
<td>
<img src="new1.jpg"/>
</td>
<td>
<center>
<form method="POST" action="feedbackdb.php">

<div align="center" class="boxed">
<div class="container">
<h3 style="text-align:center;">Feedback Form</h3>
<hr>
<br>
  <label for="fname"><b>First Name</b></label>
  <br>
      <input type="text" placeholder="Enter First Name" style="width:90%" name="fname" required>
	  <br>
	  <label for="lname"><b>Last Name</b></label><br>
      <input type="text" placeholder="Enter Last Name" style="width:90%" name="lname" required>
	  <br>
	  <label for="email"><b>Email ID</b></label><br>
      <input type="text" placeholder="Enter Email-id"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"style="width:90%" name="email" required>
	  <br>
      <label for="fbk"><b>Feedback</b></label>
	  <br>
       <textarea id="fbk" name="fbk" placeholder="Write something...."  style="width:90% ; height:100px" required ></textarea>
	   <br>
	   <br>

     <button type="submit" class="submitbtn" style="align:center;">Submit</button>
  </form>
</div>
</div>
</center>
</td>
</tr>
</body>
</html>
