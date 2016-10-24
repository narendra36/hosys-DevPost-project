<?php
	session_start();
	session_unset();
	session_destroy();
	echo '<center style="margin-top:10%;font-size:50px;">Logout Succesfully !</center>';
?>