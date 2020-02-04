<?php 
session_start();
include_once("../includes/db_conx.php");


$record_per_page = 5;
$page = '';
$output = '';

if(isset($_POST['page'])){
	$page = $_POST["page"];
}else{
	$page = 1;
}

$start_from = ($page -1) *$record_per_page;

$query = "SELECT * FROM posts ORDER BY id DESC";

$page_results = mysqli_query($connect, $query);
$total_records = mysqli

";


/*
<table class='table table-bordered'>
		<tr>
			<th width='50%'>Name</th>
		</tr>
	</table>
*/