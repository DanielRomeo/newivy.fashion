<?php
	/* This page will be included on every page as the Databse Connection */
	#Database Connection
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);	

	// declare database variables:
	$Server = "localhost";
	$User_name = "root";
	$password = "5308danielromeo";
	$database = "newivyfashion";
	$db_conx = mysqli_connect($Server, $User_name, $password, $database);

	if (mysqli_connect_errno()){
		echo mysqli_connect_error().' incorrect';
		exit();
	}else{
		// echo "worked";
	};
?>