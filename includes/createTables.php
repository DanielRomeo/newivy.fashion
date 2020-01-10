<?php
/*// CREATE tables
	
	/*_________________________________ _ _ _ ______________ users*/
	include_once("db_conx.php");

	// $tbl_users = "CREATE TABLE users(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	firstname VARCHAR(255) NOT NULL,
	// 	lastname VARCHAR(255) NOT NULL,
	// 	email VARCHAR(255) NOT NULL,
	// 	password VARCHAR(255) NOT NULL,
	// 	PRIMARY KEY(id)
	// 	)";
	// $query = mysqli_query($db_conx, $tbl_users);	
	// if ($query === TRUE) {
	// 	echo "USERS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "USERS TABLE NOT CREATED FALSE </br>";
	// }

	/*_______________________________________________________*/

	// $tbl_posts = "CREATE TABLE IF NOT EXISTS posts(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	title VARCHAR(16) NOT NULL,
	// 	body VARCHAR(255) NOT NULL,
	// 	uploaddate DATETIME NOT NULL,
	// 	uploadedby VARCHAR(16) NOT NULL,
	// 	PRIMARY KEY(id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_posts);	
	// if ($query === TRUE) {
	// 	echo "posts TABLE Created  TRUE </br>";
	// }else{
	// 	echo " posts TABLE NOT CREATED FALSE </br>";
	// }

	/*______________________________________________________________________   friends*/

	// $tbl_friends = "CREATE TABLE IF NOT EXISTS friends(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	user1 VARCHAR(16) NOT NULL,
	// 	user2 VARCHAR(16) NOT NULL,
	// 	datemade DATETIME NOT NULL,
	// 	accepted ENUM('0','1') NOT NULL DEFAULT '0',
	// 	PRIMARY KEY(id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_friends);	
	// if ($query === TRUE) {
	// 	echo "FRIENDS TABLE Created  TRUE </br>";
	// }else{
	// 	echo " FRIENDS TABLE NOT CREATED FALSE";
	// }

	/*______________________________________________________________________ blocked users*/

	// $tbl_blockedusers = "CREATE TABLE IF NOT EXISTS blockedusers(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	blocker VARCHAR(16) NOT NULL,
	// 	blockee VARCHAR(16) NOT NULL,
	// 	blockdate DATETIME NOT NULL,
	// 	PRIMARY KEY(id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_blockedusers);	
	// if ($query === TRUE) {
	// 	echo "BLOCKED USERS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "BLOCKED USERS TABLE NOT CREATED FALSE";
	// }


	/*______________________________________________________________________  status*/

	// $tbl_status = "CREATE TABLE IF NOT EXISTS status(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	osid INT(11) NOT NULL,
	// 	account_name VARCHAR(16) NOT NULL,
	// 	type ENUM('a','b','c') NOT NULL,
	// 	data TEXT NULL,
	// 	postdate DATETIME NOT NULL,
	// 	PRIMARY KEY(id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_status);	
	// if ($query === TRUE) {
	// 	echo "STATUS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "STATUS TABLE NOT CREATED FALSE </br>";
	// }

	/*______________________________________________________________________  photos*/

	// $tbl_photos = "CREATE TABLE IF NOT EXISTS photos(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	user VARCHAR(16) NOT NULL,
	// 	gallery VARCHAR(16) NOT NULL,
	// 	filename VARCHAR(255) NOT NULL,
	// 	description VARCHAR(225) NULL,
	// 	uploaddate DATETIME NOT NULL,
	// 	PRIMARY KEY(id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_photos);	
	// if ($query === TRUE) {
	// 	echo "PHOTOS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "PHOTOS TABLE NOT CREATED FALSE";
	// }

	/*____________________________________________________________ notifications*/

	// $tbl_notifications = "CREATE TABLE IF NOT EXISTS notifications(
	// 	id INT(11) NOT NULL AUTO_INCREMENT,
	// 	username VARCHAR(16) NOT NULL,
	// 	initiator VARCHAR(16) NOT NULL,
	// 	app VARCHAR(255) NOT NULL,
	// 	note VARCHAR(255) NOT NULL,
	// 	did_read ENUM('0','1') NOT NULL DEFAULT '0',
	// 	date_time DATETIME NOT NULL,
	// 	PRIMARY KEY (id)
	// 	)";

	// $query = mysqli_query($db_conx, $tbl_notifications);	
	// if ($query === TRUE) {
	// 	echo "NOTIFICATIONS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "NOTIFICATIONS TABLE NOT CREATED FALSE </br>";
	// }

	/*____________________________________________________*/
	/*_____USER OPTIONS TABLE_______*/
	// $tbl_useroptions = "CREATE TABLE IF NOT EXISTS useroptions(
	// 	id INT(11) NOT NULL,
	// 	username VARCHAR(16) NOT NULL,
	// 	background VARCHAR(255) NOT NULL,
	// 	question VARCHAR(255) NULL,
	// 	answer VARCHAR(255) NULL,
	// 	temp_pass VARCHAR(255) NOT NULL,
	// 	PRIMARY KEY (id),
	// 	UNIQUE KEY username (username)
	// )";

	// $query = mysqli_query($db_conx, $tbl_useroptions);	
	// if ($query === TRUE) {
	// 	echo "USEROPTIONS TABLE Created  TRUE </br>";
	// }else{
	// 	echo "USEROPTIONS TABLE NOT CREATED FALSE </br>";
	// }

	/*_______________________________________________________________________*/
	/*$sql = "ALTER TABLE useroptions ADD temp_pass VARCHAR(255) NOT NULL AFTER answer";
	$query = mysqli_query($db_conx, $sql);*/

?>