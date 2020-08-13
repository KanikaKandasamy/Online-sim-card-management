<html>
<head>
<?php session_start();?>
<?php 
$no=$_SESSION['no'];
$_SESSION['no']=$no;
?>
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
  width: 50%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ddd;
  box-sizing: border-box;
  padding-left: 5px;
}

/* Set a style for all buttons */
button {
  background-color: #0bb90e;
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
.sidenav {
  height: 80%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 25px;
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
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
	 
	  
  float: left;
  width: 50%;
  padding: 10px;
  height: 70%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<title>
SIM REGISTRATION
</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    var availableTags = [
      "Airtel",
      "Vodafone",
      "BSNL",
      "Jio",
	  "Idea"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
</script>
</head>
<body>


<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dubuks.php">DashBoard</a>
  <a class="active" href="simregister.php">Sim Register</a>
  <a href="recharge.php">Recharge</a>
  <a href="port.php">Port Change</a>
  <a href="netchange.php">Network Type</a>
  <a href="walletupdate.php">Wallet</a>
</div>

<div id="main">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav">
  <a href="login1.html" style="width:auto;cursor:pointer;float:right"><i class="fa fa-fw fa-user"></i>Logout</a>
  <span style="font-size:30px;cursor:pointer;padding-left:20px;" onclick="openNav()">&#9776;</span>
  <a style="background-color:black;"><img src="logo.jpg" alt="home" width="20" height="20" >&nbsp;<b>SIM PAL</b></a>
  </div>
  <form method="POST" action="simregisterdb.php">
<center>
<br>
<div class="row">
  <div class="column" style="background-color:#b5b5b5;border-top-left-radius: 25px;border-bottom-left-radius: 25px;">
  <br><br>
	<br><br><br>
   <label for="np"><b>Network Provider</b></label><br><br>
	<input id="tags"/>
	<br>
	<br><br>
	<label for="nt"><b>Network Type</b></label>&nbsp &nbsp &nbsp
	<input checked type='radio' name='nt' value='2G'>2G	
	<input type='radio' name='nt' value='3G'>3G	
	<input type='radio' name='nt' value='4G'>4G	
	<input type='radio' name='nt' value='2G'>5G	
	  <br>
	  <br>
	  <br>
      <label for="aadhar"><b>Aadhar Number</b></label>
	   <input type="text" placeholder="Enter Aadhar number(XXXX-XXXX-XXXX)" pattern=".{12}"style="width:90%" name="aadhar" required>
	   <br>
	   <label for="ph"><b>Phone Number</b></label>
	   <input type="text" placeholder="phone number(optional)" pattern=".{10}"style="width:90%" name="ph"><br>
<br>
     <button type="submit" class="submitbtn" style="align:center;">Submit</button>
	 </form>
  </div>
  <div class="column" style="background-color:#d3d3d3;border-top-right-radius: 25px;border-bottom-right-radius: 25px;">
   <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="sim1.jpg" style="width:100%;height:94%;">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="sim2.jpg" style="width:100%;height:94%;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="sim3.jpg" style="width:100%;height:94%;">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="sim4.jpg" style="width:100%;height:94%;">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="sim5.png" style="width:100%;height:94%;">
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

  </div>
</div>

</center>

</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
   
  /*if (n < 1) {slideIndex = slides.length}*/
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
if(slideIndex>slides.length){slideIndex=1}
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,2000);
}
</script>
</body>
</html>
