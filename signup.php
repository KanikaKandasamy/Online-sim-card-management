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
	height:145%;
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
.cancelbtn {
  width: 20%;
  padding: 14px 20px;
  background-color: #ff3300;
}
table {
  font-family: arial, sans-serif;
 // border-collapse: collapse;
  width: 100%;
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
   <title>
     SIGN UP
   </title>
</head>
<body background="back.jfif" style="background-repeat:no-repeat;background-size:100% 100%;">
<form method="POST" action="signupdb.php">
<center>
 <div align="center" class="boxed">
<div class="container">
<h3 style="text-align:center;">SignUp Form</h3>
      <p>Please fill in this form to create an account.</p>
      <hr>
<br>
<table>
<tr><th><label for="fname"><b>First Name</b></label></th>
     <td> <input type="text" placeholder="Enter First Name" style="width:100%" name="fname" required><td></tr>
<tr><th>
	  <label for="lname"><b>Last Name</b></label></th>
   <td>   <input type="text" placeholder="Enter Last Name" style="width:100%" name="lname" required></td></tr>
	  <tr><th><label for="dob"><b>Date Of Birth</b></label></th>
      <td><input type="text" placeholder="Enter DOB(dd-mm-yy)"  pattern="\d{1,2}-[A-Z]{2,}-\d{4}" style="width:100%" name="dob" required>
	  </td></tr>
	 <tr><th> <label for="age"><b>Age</b></label></th><td>
      <input type="text" placeholder="Enter age" style="width:100%" name="age" required>
	  </td></tr><tr><th>
	  <label for="addr"><b>Address</b></label></th><td>
      <input type="text" placeholder="DoorNo/Street Name/Locality/District/State/Country/ZipCode" style="width:100%""height:100px;" name="addr" required>
	  </td></tr><tr><th>
      <label for="email"><b>Email</b></label></th>
      <td><input type="text" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"style="width:100%" name="email" required>
</td></tr><tr><th>
<label for="ph"><b>Phone Number</b></label></th>
   <td>   <input type="text" placeholder="Enter phone number" pattern=".{10}"style="width:100%" name="ph" required>
</td></tr><tr><th>
      <label for="psw"><b>Password</b></label></th><td>
      <input type="password" placeholder="Enter Password" pattern=".{6,}" title="6 or more character,special character and number" style="width:100%" name="psw" required>
 </td></tr>  
     
</table>
      <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <div class="clearfix">
        <button type="button" onclick="window.location='http://localhost/login1.html';return false;" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" style="align:center;">Sign Up</button>
      </div>
    </div>
</div>
</center>
</form>
</body>
</html>
