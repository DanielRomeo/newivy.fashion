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
		$postimage = $row['image'];
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

		<?php include_once("templates/head.php"); ?>
		<link rel="stylesheet" href="../materialize/css/materialize.min.css">

		<link rel="stylesheet" href="css/post.css">
</head>
<body>

	<!-- navbar  -->
	<?php include_once("templates/header.php"); ?>

	<!-- row for the image -->
	<div style="width:100%" class="row">


		<div class="container">
			<h1><?php echo $postTitle; ?></h1>
			<h6>By: <?php echo $userFirstName.' '.$userLastName; ?>  </h6>
			<img class="materialboxed" width="650" src="images/<?php echo $postimage ?>">

			<hr style="color: lightgrey;">
		</div>
	</div>

	<!-- this is the beginning of the blog content -->
	<div class="container">


		<div class="row">
			<div class="col s12 m12 l12">

				<?php 
					$postboody = htmlspecialchars_decode($postbody);
					echo $postbody; 
				?>
			</div>
		</div>
	</div>

	<!-- display of the blogger information: -->
	<!-- <div class="container">
		<div class="row">
			<div class="col s12 m7">
			    <h2 class="header">Horizontal Card</h2>
			    <div class="card horizontal">

			      <div class="card-image">
			        <img src="images/imagewhitewalls.jpg">

			        <div class="container">
			        	<p>socila icons here</p>
			        </div>
			      </div>

			      <div class="card-stacked">
			        <div class="card-content">
			        	<span class="card-title">Danilson Mamps</span>
			          	<p>Hey my name is Danielson Mamps and i am the CTO of Newivy.fashion. I enjoy writing blogs on the website as well. primarily becasue i also enjoy fashion alot, thats probably why i co-founded this organisation right? check out my profile and socila links for mor about me.</p>
			        </div>

			        <div class="card-action">
			          <a href="#">My profile page</a>
			        </div>
			      </div>
			    </div>
			</div>
		</div>	
	</div> -->


	<?php include_once("templates/footer.php"); ?>

	<script>
		// initialize the picture(s)
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.slider');
			var instances = M.Slider.init(elems, options);
		});
	</script>

</body>
</html>