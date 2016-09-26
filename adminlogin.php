<?php
	session_start();
	$username = $_POST["uname"];
	$password = $_POST["psw"];
	//echo $username." : ".$password;
	$_SESSION['uname']=$username;
	$_SESSION['pass'] = $password;
	if($username=="admin1234")
	{
		if($password=="adminpas")
		{
			//echo "login succesful";
			header("Location: /adminDashboard.php");
		}
		else
			echo "Username or Passwrod is wrong !";
	}
?>
