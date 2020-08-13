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
	height:93.5%;
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
</style>
   <title>
     SIGN UP
   </title>
</head>
<body background="back.jfif" style="background-repeat:no-repeat;background-size:100% 100%;">
<form method="POST" action="login2db.php">
<center>
 <div align="center" class="boxed">
<div class="container">
<div class="imgcontainer">
      
<p align="center">
<label><h1>Login</h1></label>
</p>
      <img src="new.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
	<p align="center">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  name="uname" required>
<br><label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  pattern=".{6,}" name="psw" required>
        
      <button type="submit">Login</button>
<br>
      <label>


        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
</p>
    </div>
     <div class="container" style="background-color:#99ccff">
      <button type="button" onclick="window.location='http://localhost/login1.html';return false;" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="forgetps.php">Forget password?</a></span>
    </div>
    </div>
</div>
</center>
</form>
</body>
</html>
