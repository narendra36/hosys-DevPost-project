<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>
	<link rel="stylesheet" type="text/css" href="../css/design.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link type="text/javascript" href="captcha.js">
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
</head>
<style>
@font-face {
	font-family: myfirst;
	src: url(../font/Dosis-Regular.ttf);
}
@font-face {
	font-family: myfirst1;
	src: url(../font/Cabin-Regular.ttf);
}
form {
    border: 3px solid #f1f1f1;
    width: 500px;
    height: 500px;
    margin-top: 50px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
.textcolor{
	font-family: myfirst1;
}
span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
}
@media screen and (max-width: 550px){
    form{
        width:90%;
        height: 90%;
    }
}
</style>
<body>
<?php
    session_start();
    if(!isset($_SESSION['uname']) && !isset($_SESSION['pass']))
    {
        //echo "welcome..!".$_SESSION['uname']." your password ".$_SESSION['pass'];
?>
<div class="head">
	<ul>
		<li><a class="icon" href="../index.php">HOSPITAL APPOINTMENT SYSTEM</a></li> 
		<li><a class="SearchDoctor" href="../php/doctorList.php">Search Doctor</a></li>
		<li><a class="TakeAppointment" href="../views/takeAppointment.html">Take Appointment</a></li>
		<li><a class="TakeAppointment" href="../php/adminPanel.php">Admin Panel</a></li>
		<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
	</ul>
</div>
<center>
<form action="../php/adminlogin.php" method="POST">
  <div class="imgcontainer">
    <img src="../images/admin.jpeg" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label class="textcolor"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label class="textcolor"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>
</form>
<p style="color:red;padding-top:20px;">* username 'admin1234' || password  'adminpas' </p>
</center>
<?php
    }
    else
    {
        header("Location: /php/adminDashboard.php");
    }
?>
</body>
</html>
