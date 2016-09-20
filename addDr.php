	<?php
		$servername = "http://mysql-myapp.0ec9.hackathon.openshiftapps.com/opt/app-root/src/";
		$username = "root";
		$password = "root";
		$dbname = "HosAppointmentSys";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$id = $_POST["id"];
		$drname = $_POST["drname"];
		$drdept = $_POST["drdept"];
		$drcabin = $_POST["drcabin"];
		$drcontact = $_POST["drcontact"];
		$sql =" CREATE TABLE `doctor` (`d_id` varchar(10) NOT NULL,`name` varchar(50) NOT NULL,`dept` varchar(50) NOT NULL,`cabin` varchar(10) NOT NULL,`contact`varchar(20) NOT NULL,PRIMARY KEY (`d_id`))"

		if($conn->query($sql) === TRUE)
		{
			 echo "table created";
			// header("Location: /app/adminDashboard.html");

		}
		$sql = "INSERT INTO doctor VALUES('".$id."','".$drname."','".$drdept."','".$drcabin."','".$drcontact."')";

		if($conn->query($sql) === TRUE)
		{
			 echo "<script type='text/javascript'>alert('Doctor added successfully!');window.location.href='adminDashboard.php';</script>";
			// header("Location: /app/adminDashboard.html");

		}
		else echo "ERROR:".$conn->error;
		/*$sql2 = "SELECT * FROM doctor where dept='".$department."'";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$drname = $row["name"];
		    	$did = $row["d_id"];
		    	$dept = $row["dept"];
		    	$cabin = $row["cabin"];
		    	$drcontact = $row["contact"];
		        /*echo "d_id: " . $row["d_id"]. " Name: " . $row["name"]. " dept : " . $row["dept"]." cabin : " . $row["cabin"]." contact : " . $row["contact"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}*/
		//echo $drname."<br>";
		$conn->close();
		//echo $drname."<br>";
	?>