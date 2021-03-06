 <!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/design.css">
	<link type="text/javascript" href="captcha.js">
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
</head>
<style type="text/css">
	@font-face {
	font-family: myfirst;
	src: url(../font/Dosis-Regular.ttf);
	}
	@font-face {
		font-family: myfirst1;
		src: url(../font/Cabin-Regular.ttf);
	}
	
	.adminbutton{
		 border: 3px solid #f1f1f1;
		 width: 180px;
		 height: 50px;
		 background-color: #8e44ad;
		 color: white;
		 text-align: center;
		 text-decoration: none;
		 font-family: myfirst1;
	}
	.btn{
		margin-top: 30px;
		float: left;
	}
	form {
    border: 2px solid #f1f1f1;
    width: 500px;
    height: 500px;
    margin-top: 50px;
    float: center;
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
	color: white;
	}
	

	@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }

	}
	@media screen and (max-width: 1000px){
        div.adminbutton{
        	float: left;
        	width: 150px;
        	margin-left: 3px;
        	margin-top: 3px;
        }
        form{
        	margin-top:230px;
            }
    }
	@media screen and (max-width: 550px){
		 form{
        	  width: 95%; 
        	}

	}
</style>
<body onload="CaptchaChange()">
<?php
	session_start();
	if(isset($_SESSION['uname']) && isset($_SESSION['pass']))
	{
		//echo "welcome..!".$_SESSION['uname']." your password ".$_SESSION['pass'];
		//echo 'welcome $_SESSION['uname'] and your password $_SESSION['pass']<br><br><br>';
?>
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<div class="head">
		<ul>
			<li><a class="icon" href="../index.php">HOSPITAL APPOINTMENT SYSTEM</a></li> 
			<li><a class="SearchDoctor" href="../php/doctorList.php">Search Doctor</a></li>
			<li><a class="TakeAppointment" href="../views/takeAppointment.html">Take Appointment</a></li>
			<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
		</ul>
	</div>
	<div class="btn">
		<div class="adminbutton" ><a href="../php/adminDashboard.php" ><p style="color:white">Add Doctor</p></a></div>
		<div class="adminbutton" ><a href="../php/deleteDoctor.php" ><p style="color:white">Delete Doctor</p></a></div> 
		<div class="adminbutton"><a href="../php/doctorList.php"><p style="color:white">List of Doctors</p></a></div>
		<div class="adminbutton" ><a href="../php/patientList.php"><p style="color:white">List of Patient</p></a></div>
		<div class="adminbutton"><a  href="../php/logout.php"><p style="color:white">Logout</p></a></div>
	</div>
	<center>
	<div class="outer">
	<form action="../php/addDr.php" method="POST">
	  <div class="container"> 
	    <label class="textcolor" style="float:left;"><b>ID</b></label>
	    <input type="text" placeholder="Enter ID" name="id" required style="margin-bottom: 7px;margin-top: 7px;">
		<label class="textcolor" style="float:left;"><b>Name</b></label>
	    <input type="text" placeholder="Enter Name" name="drname" required style="margin-bottom: 7px;margin-top: 7px;">
	    <label class="textcolor" style="float:left;"><b>Department</b></label>
	    <input type="text" placeholder="Enter Department" name="drdept" required style="margin-bottom: 7px;margin-top: 7px;">
	    <label class="textcolor" style="float:left;"><b>Contact</b></label><br>
	    <input type="number" placeholder="Enter contact" name="drcontact" required style="margin-bottom: 7px;margin-top: 15px;"><br> 
	    <label class="textcolor" style="float:left;"><b>Cabin</b></label>
	    <input type="text" placeholder="Enter Cabin" name="drcabin" required style="margin-bottom: 5px;margin-top: 10px;">               
	    <button type="submit" style="margin-bottom: 5px;margin-top: 30px;">ADD</button>
	  </div>
	</form>
	</div>
    </center>
<?php
	}
	else
	{
		echo'<center style="margin-top:10%;font-size:50px;">Please Login..! To access admin panel</center>';
		//echo'<center style="margin-top:2%;font-size:40px;">Don\'t try to be oversmart :)</center>';
	}
?>
</body>
</html>