<?php
	session_start();
	include_once("../includes/db_conx.php");

	
?>

<?php
	/*
		code fo the pagination will go here:
	*/

	$results_per_page = 4;

	$sql = "SELECT * FROM posts";
	$result = mysqli_query($db_conx, $sql);
	$number_of_results = mysqli_num_rows($result);

	$number_of_pages = ceil($number_of_results/$results_per_page);
	
	// for($page =1; $page <= $number_of_pages; $page++){
	// 	echo '<a href="index.php?page= '.$page.' "  >'.$page.' </a>';
	// }

	// determine which page the user is on:
	if(!isset($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}

	// determine the sql starting limit:
	$this_page_first_result = ($page -1 )* $results_per_page;

	// now retrieve the selected results from the database:
	$sql = "SELECT * FROM posts LIMIT ".$this_page_first_result. ','.$results_per_page;
	$paginationResult = mysqli_query($db_conx, $sql);

	
?>

<!doctype html>
<html lang="en">
<head>
	<title>NewIvy!</title>

	<?php include_once("../templates/head.php"); ?>
	<style type="text/css">
		.card-img-top {
		    width: 100%;
		    height: 15vw;
		    object-fit: cover;
		}
		#readBlogButton{
			border-radius: 0px;

		}
		.jumbotron{
			background: url("../images/imageglasseswoman.jpg");
			border-radius: 0px;
		}
		a{
			color: lightblue;
		}
		a:hover{
			text-decoration: underline;
		}
	</style>
	
</head>
<body>

	

	<div class="container">

	<header class="blog-header py-3">
	<div class="row flex-nowrap justify-content-between align-items-center">
	  <div class="col-4 pt-1">
	    <a class="btn btn-sm btn-outline-secondary" href="index.php">HOME</a>
	  </div>
	  <div class="col-4 text-center">
	    <a class="blog-header-logo text-dark" href="#">THE NEW IVY FASHION BLOG</a>
	  </div>
	  <div class="col-4 d-flex justify-content-end align-items-center">
	    <!-- <a class="text-muted" href="#">
	      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
	    </a> -->
	    <!-- <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
	    <a class="btn btn-sm btn-outline-secondary" href="registra.php">Register to have your line on NEWIVY</a>
	  </div>
	</div>
	</header>

		<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			<div class="col-md-6 px-0">
				<h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
				<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
				<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
			</div>
		</div>
	
		<?php

			while($var = mysqli_fetch_assoc($paginationResult)){

			$postId = $var['id'];
			//$postimage = $['image'];
			$postTitle = $var['title'];
			$postbody = $var['body'];
			$postuploaddate = $var['uploaddate'];
			$postuploadedby = $var['uploadedby'];

			

			$sql = "SELECT * FROM users where id='$postuploadedby'";
			$q = mysqli_query($db_conx, $sql);
			$q = mysqli_fetch_row($q);
			$firstname = $q[1];
			$lastname = $q[2];		

			echo '
				<div class="row ">

  
			        <div class="card mb-3">
						  <img src="../images/imagewhitewalls.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">'.$postTitle.'</h5>

						    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

						    <a id="readBlogButton" href="post.php?data='.$postId.'" class="btn btn-primary">Read the blog</a>

						    <p class="card-text"><small class="text-muted">Written by: '.$firstname.' '.$lastname.'</small></p>

						    <p class="card-text"><small class="text-muted">Written on: '.$postuploaddate.'</small></p>

						  </div>
					</div>
		      	</div>
	      	';
		}
		?>
		
	</div> <!-- end of container -->


	<!-- pagination will go here: -->
	<div style="width:100; text-align: center;" class="container">

		<nav aria-label="Page navigation example">
		  <ul class="pagination">
		    
		    <?php
				for($page =1; $page <= $number_of_pages; $page++){
					echo '<li class="page-item">  <a class="page-link" href="index.php?page= '.$page.' "  >'.$page.' </a>   </li>';
				}
			?>
		    
		  </ul>
		</nav>
	</div>	

	<?php include_once("../templates/footer.php"); ?>

	
</body>
</html>