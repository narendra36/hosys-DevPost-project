<?php
	session_start();
	$username = $_POST["uname"];
	$password = $_POST["psw"];
	//echo $username." : ".$password;
	if($username=="admin1234" && $password=="adminpas")
	{
			//echo "login succesful";
			$_SESSION['uname']=$username;
			$_SESSION['pass'] = $password;
			header("Location: /php/adminDashboard.php");		
	}
	else
		echo '<center style="margin-top:10%;font-size:50px;">Username or Passwrod is/are wrong !</center>';
?>
