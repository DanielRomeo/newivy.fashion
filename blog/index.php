<?php
	session_start();
	include_once("../includes/db_conx.php");

	
?>

<?php
	/*
		code fo the pagination will go here: */
	$results_per_page = 6;
	$sql = "SELECT * FROM posts";
	$result = mysqli_query($db_conx, $sql);
	$number_of_results = mysqli_num_rows($result);
	$number_of_pages = ceil($number_of_results/$results_per_page);
	if(!isset($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}
	$this_page_first_result = ($page -1 )* $results_per_page;
	$sql = "SELECT * FROM posts LIMIT ".$this_page_first_result. ','.$results_per_page;
	$paginationResult = mysqli_query($db_conx, $sql);
	/* end o pagination code:*/ 


	// get post with the most views and display as featured post:
	$sql = "SELECT * FROM posts ORDER BY uploaddate DESC LIMIT 3 ";
	$query = mysqli_query($db_conx, $sql);
	if($query == TRUE){
	}else{
		echo("Error description: " . mysqli_error($db_conx));
	}
	/*
		finish this off in the morning:

	*/
	
?>

<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../materialize/css/materialize.min.css">
	<title>NewIvy!</title>
	<?php include_once("templates/head.php"); ?>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<!-- navbar -->
	<?php include_once("templates/header.php"); ?>

	<div class="container">
		<div class="row">
		
			

			
            
		<!-- <hr /> -->


		<!-- load the blog posts -->
		<div class="row">
		
		
		<?php
			while($var = mysqli_fetch_assoc($paginationResult)){

				$postId = $var['id'];
				 $postimage = $var['image'];
				$postTitle = $var['title'];
				$postbody = $var['body'];
				$postuploaddate = $var['uploaddate'];
				$postuploadedby = $var['uploadedby'];

				$sql = "SELECT * FROM users where id='$postuploadedby'";
				$q = mysqli_query($db_conx, $sql);
				$q = mysqli_fetch_row($q);
				$firstname = $q[1];
				$lastname = $q[2];		

				/*echo '
					<div class="row ">
						<div class="card mb-3">
							<img src="../images/imagewhitewalls.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">'.$postTitle.'</h5>

								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

								<a id="readBlogButton" href="post.php?data='.$postId.'" class="btn btn-primary">Read the blog</a>


							</div>
						</div>
					</div>
				';*/

				echo '
					<div class="col s12 m4 l4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="images/'.$postimage.'">
								
								<a href=" post.php?data='.$postId.' " class="btn-floating hoverable halfway-fab waves-effect waves-light red"><i class="">R</i></a>
							</div>
							<div class="card-content truncation">
								<span class="card-title">'.$postTitle.'</span>
								<p></p>
							</div>

							<div class="card-action">
								<p class="grey-text">By: '.$firstname.' '.$lastname.'</p>
								<p class="grey-text">Published: '.$postuploaddate.'</p>
							</div>

						</div>
					</div>
					
				';
			}
		?>
		</div> <!-- end ofthe  row-->

		
		<!-- pagination -->
		<div class="center-align">
			<ul class="pagination">
			<?php
					for($page =1; $page <= $number_of_pages; $page++){
						echo '<li class="page-item">  <a class="page-link" href="index.php?page= '.$page.' "  >'.$page.' </a>   </li>';
					}
				?>
			</ul>	
		</div>
		
		
	</div> <!-- end of container -->

				
	<?php include_once("templates/footer.php"); ?>
	<script  href="../materialize/js/materialize.min.js"></script>

	<script>
        // initilaize the slider:
        // document.addEventListener('DOMContentLoaded', function() {
        //     var elems = document.querySelectorAll('.slider');
        //     var instances = M.Slider.init(elems, {
        //         "indicators": false
        //     });
        // });
    

        // initialize the image
        // document.addEventListener('DOMContentLoaded', function() {
        //     var elems = document.querySelectorAll('.materialboxed');
        //     var instances = M.Materialbox.init(elems, {});
        // });

        
    </script>

</body>
</html>

















<!--
			





	-->