<?php
	session_start();
	$_SESSION['uname']="";
	unset($_SESSION['pass']);
	session_destroy();
?>