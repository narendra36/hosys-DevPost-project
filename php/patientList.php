<html>
<head>
	<title>Patient List</title>
	<link rel="stylesheet" type="text/css" href="../css/form.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/design.css">	
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
	table {
	    border-collapse: collapse;
	    width: 100%;
	    margin-top: 100px;
	    background-color: #0080FF;
	}

	th {
	    height: 50px;
	    padding: auto;
	    border: 3px solid #f1f1f1;
	    color: white;
	    font-family: myfirst;
	}
	td{
		padding: auto;
		text-align: center;
		color: white;
		border: 3px solid #f1f1f1;
		font-family: myfirst1;
	}
</style>
<body>
<?php
	session_start();
	if(isset($_SESSION['uname']) && isset($_SESSION['pass']))
	{
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
	<?php
		include '../php/connectionFile.php';

		$sql2 = "SELECT * FROM patient";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    ?>
		<center><table style="border: 3px solid #f1f1f1;">
		<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Contact</th><th>Field</th><th>Gender</th><th>Date</th><th>Description</th</tr>
			
	<?php		    
		while($row = $result->fetch_assoc()) {

	?>		
			<tr><td><?php echo $row["p_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["age"]."" ?></td>
			<td><?php echo $row["email"]."" ?></td><td><?php echo $row["contact"]."" ?></td><td><?php echo $row["field"]."" ?></td>
			<td><?php echo $row["sex"]."" ?></td><td><?php echo $row["dt"]."" ?></td><td><?php echo $row["description"]."" ?></td></tr>
	<?php	        
		}
	?>
		</table></center>    
	<?php
		} else {
		    echo "0 results";
		}
		//echo $drname."<br>";
		$conn->close();
		//echo $drname."<br>";
	}
	else
		header("Location: /php/adminPanel.php");
	?> 
</body>
</html>