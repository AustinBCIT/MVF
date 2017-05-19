<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
    unset($_SESSION['user']);

	session_write_close();

	header("location: mobileindex.php");

	exit();
?>