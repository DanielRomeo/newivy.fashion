<?php

 // session code:
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

  	session_start();

	if(isset($_SESSION["email"]) && isset($_SESSION['id'])){
	    // the user is logged in:
	}else{
	  header("Location: login.php");
	}
	include_once("../includes/db_conx.php");

	$id =  $_GET['id'];
	$sql = "DELETE FROM posts WHERE id='$id' ";
	$query = mysqli_query($db_conx, $sql);

	if($query == TRUE){
	}else{
		echo("Error description: " . mysqli_error($db_conx));
	}
	header("Location: index.php");


?>