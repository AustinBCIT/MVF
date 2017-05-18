<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
    //unset($_SESSION['id']);
    //^^Get the id from the database^^
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_write_close();
	header("location: mobileindex.html"); // Change this to php when ready
	exit();
?>