<html>
<head>
	<title>Doctor List</title>
	<link rel="stylesheet" type="text/css" href="form.css"></link>
	<link rel="stylesheet" type="text/css" href="design.css">	
</head>
<style>
	@font-face {
	font-family: myfirst;
	src: url(Dosis-Regular.ttf);
	}
	@font-face {
		font-family: myfirst1;
		src: url(Cabin-Regular.ttf);
	}
	table {
	    border-collapse: collapse;
	    width: 100%;
	    margin-top: 100px;
	    background-color: #0080FF;
	}

	th {
	    height: 50px;
	    border: 3px solid #f1f1f1;
	    color: white;
	    font-family: myfirst;
	}
	td{
		padding-left: 80px;
		color: white;
		border: 3px solid #f1f1f1;
		font-family: myfirst1;
	}
</style>
<body>
	<div class="head">
		<ul>
			<li><a class="icon" href="index.php">HOSPITAL APPOINTMENT SYSTEM</a></li> 
			<li><a class="SearchDoctor" href="docotrList.php">Search Doctor</a></li>
			<li><a class="TakeAppointment" href="takeAppointment.html">Take Appointment</a></li>
			<li><a class="TakeAppointment" href="adminPanel.html">Admin Panel</a></li>
			<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
		</ul>
	</div>
	<?php
		
		$dbhost = getenv("MYSQL_SERVICE_HOST");
		$dbport = getenv("MYSQL_SERVICE_PORT");
		$dbuser = getenv("MYSQL_USER");
		$dbpwd = getenv("MYSQL_PASSWORD");
		$dbname = getenv("MYSQL_DATABASE");
		//echo $dbhost." , ".$dbport." , ".$dbuser." , ".$dbpwd." , ".$dbname;
		$conn = new mysqli($dbhost, "userCUK", "pyHOuqYJQyQPdxft","sampledb");
		/*if ($conn->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		} 
		else {
		    printf("Connected to the database");
		}*/
		//$connection->close();
		/*$servername =getenv("MYSQL_SERVICE_HOST").":".getenv("MYSQL_SERVICE_PORT");
		$username = getenv("MYSQL_USER");
		$password = getenv("MYSQL_PASSWORD");
		$dbname = getenv("MYSQL_DATABASE");
		echo "Hii narendra ------>  ";
		echo $servername." , ".$username." , ".$password." , ".$dbname;
		/*$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		//$openshiftsocket = getenv('OPENSHIFT_MYSQL_DB_SOCKET');
		//echo "OpenShift socket is [$openshiftsocket]";

		/*$dbhost = constant("DB_HOST"); // Host name 
		$dbport = constant("DB_PORT"); // Host port
		$dbusername = constant("DB_USER"); // Mysql username 
		$dbpassword = constant("DB_PASS"); // Mysql password 
		$db_name = constant("DB_NAME"); // Database name 	*/

		/*$dbhost = getenv("MYSQL_SERVICE_HOST");
		$dbuser = getenv("MYSQL_USER");
		$dbpwd = 
		$dbname = 

		$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);*/
		/*$sql =" CREATE TABLE `doctor` (`d_id` varchar(10) NOT NULL,`name` varchar(50) NOT NULL,`dept` varchar(50) NOT NULL,`cabin` varchar(10) NOT NULL,`contact`varchar(20) NOT NULL,PRIMARY KEY (`d_id`))";
		if($conn->query($sql) === TRUE)
		{
			 echo "table created";
			// header("Location: /app/adminDashboard.html");

		}
		else
			echo "There is somthing wrong !!";*/
		//$sql ="insert into doctor values('14mi536','narendra','cse','S6','9882541148')";
		$sql = "INSERT INTO `doctor` VALUES ('CARD550','KSHITI THAKUR','CARDIOLOGY','S6','9882112233'),('DENT534','MASHOOR GULATHI','DENTIST','F3','9882223355'),('ENT534','SATISH K PANDEY','E.N.T.','B0','9882224455'),('GYN101','SHIVI MANJUNATH','GYNAECOLOGY','S2','9882334455'),('NEU528','NAMRTA SHARMA','NEUROLOGY','S2','9882223344'),('SEX739','SAURABH UTKARSH','SEXOLOGIST','B6','9882338899'),('SUR920','ARPIT AGARWAL','SURGEN','G10','9882334499'),('SUR922','DR CHANDU','OTHER','G2','9882765433')";
		if($conn->query($sql) === TRUE)
		{
			 echo "data inserted succesfully";
			// header("Location: /app/adminDashboard.html");

		}
		else
			echo "There is somthing wrong !!";
		$sql2 = "SELECT * FROM doctor";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row

		    ?>
		<center><table style="border: 3px solid #f1f1f1;">
			<tr><th>ID</th><th>Name</th><th>Departmnet</th><th>Cabin</th><th>Contact</th></th>
	<?php		    
		while($row = $result->fetch_assoc()) {

	?>
			<tr><td><?php echo $row["d_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["dept"]."" ?></td>
			<td><?php echo $row["cabin"]."" ?></td><td><?php echo $row["contact"]."" ?></td></tr>
	<?php		        
		}
	?>
		</table></center>    
	<?php
		} else {
		    echo "0 results table is empty";
		}
		//echo $drname."<br>";
		$conn->close();
		//echo $drname."<br>";
	?> 
</body>
</html>