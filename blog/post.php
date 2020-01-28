<?php
	session_start();

	include_once("../includes/db_conx.php");
	$id =  $_GET['data'];
	if (!is_numeric($id)) {
		header('Location :index.php');
		exit();
	}

	$sql = "SELECT * FROM posts WHERE id='$id' ";
	$query = mysqli_query($db_conx, $sql);

	if($query == TRUE){
	}else{
		echo("Error description: " . mysqli_error($db_conx));
	}

	$countPosts = mysqli_num_rows($query);
	if ($countPosts < 1) {
		header('Location :index.php');
	}else{

		$row = mysqli_fetch_array($query);

		$postId = $row['id'];
		//$postimage = $['image'];
		$postTitle = $row['title'];
		$postbody = $row['body'];
		$postuploaddate = $row['uploaddate'];
		$postuploadedby = $row['uploadedby'];
	}

	/* at this poing: $postuploadedby is a mere number... 
	therefore i now have to transfer it into a name: */
	$sql = "SELECT id, firstname, lastname FROM users WHERE id='$postuploadedby' ";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_array($query);
	$userId = $row['id'];
	$userFirstName = $row['firstname'];
	$userLastName = $row['lastname'];




	/* code to count the page views:*/


	// get the ip of the user and date:
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	$date = date('Y/m/d H:i:s');

	/* insert the page visit into the database 
		but before i insert, i need to make sure that the ip address is unique before i just increment the number:
	*/
	
	// we start with a simple query:
	$sql = "SELECT * FROM page_views WHERE ip_address='$visitor_ip' AND page_visited='$id' ";
	$query = mysqli_query($db_conx, $sql);
	$total_visitors = mysqli_num_rows($query);
	if($total_visitors<1){
		$mayIncrement = true;

		// go ahead and add
		$sql = "INSERT INTO page_views (ip_address, visit_date, post_id, page_visited) VALUES ('$visitor_ip', '$date', '$id', '$id')"; 
		$query = mysqli_query($db_conx, $sql);
		if($query == TRUE){
		}else{
	    	echo("Error description: " . mysqli_error($db_conx));
		}
	}else{
		// do nothing bacause it means; a record already exists:
	}
	

	/* now we need to update the posts table:*/

	// count how many people already viewed then update it:
	$sql = "SELECT * FROM page_views WHERE page_visited='$id' ";
	$query = mysqli_query($db_conx, $sql);
	$page_views_count = mysqli_num_rows($query);
	
	//echo $page_views_count;

	$sql = "UPDATE posts SET page_views='$page_views_count' WHERE id='$id' ";
	$query = mysqli_query($db_conx, $sql);
	if($query == TRUE){
	}else{
    	echo("Error description: " . mysqli_error($db_conx));
	}	

	
?>

<!-- 
$body = htmlspecialchars_decode($body);
echo $body; -->

<!doctype html>
<html lang="en">
<head>
	<title>NewIvy!</title>

		<?php include_once("../templates/head.php"); ?>
		<link rel="stylesheet" href="assets/main.css">
		<link rel="canonical" href="https://blackrockdigital.github.io/startbootstrap-clean-blog-jekyll/2017/10/31/man-must-explore.html">
		<link rel="alternate" type="application/rss+xml" title="Clean Blog" href="/startbootstrap-clean-blog-jekyll/feed.xml">
</head>
<body>

	<?php //include_once("../templates/header.php"); ?>

	
  	<!-- Page Header -->
	<header class="masthead" style="background-image: url('../images/imageglasseswoman.jpg')">
		<div class="overlay"></div>

		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="post-heading">
						<h1><?php echo $postTitle; ?></h1>

						<!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->

						<span class="meta">Posted by
							<a href="#"><?php echo $userFirstName.' '.$userLastName; ?> &nbsp;</a>on <?php echo $postuploaddate ?> &middot;
							<!-- <span class="reading-time" title="Estimated read time">4 min read</span> -->

						</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- end of page header: -->
	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">

				<?php 
					$postboody = htmlspecialchars_decode($postbody);
					echo $postbody; 
				?>
			</div>
		</div>
	</div>


	<?php include_once("../templates/footer.php"); ?>
</body>
</html>