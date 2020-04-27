<?php session_start();

	// set session data to an empty array:
	$_SESSION = array();

	
	session_destroy();
	// double check to see if sessions exist:

		//echo "successfully logged out";
		header("location: login.php");
		exit();
		header("location: login.php");
	

?>