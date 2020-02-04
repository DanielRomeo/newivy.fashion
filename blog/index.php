<?
session_start();

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
	            <a class="btn btn-sm btn-outline-secondary" href="#">Subscribe</a>
	          </div>
	          <div class="col-4 text-center">
	            <a class="blog-header-logo text-dark" href="#">THE NEW IVY FASHION BLOG</a>
	          </div>
	          <div class="col-4 d-flex justify-content-end align-items-center">
	            <a class="text-muted" href="#">
	              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
	            </a>
	            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
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
			include_once("../includes/db_conx.php");

			$sql = "SELECT * FROM posts LIMIT 5";
			$query = mysqli_query($db_conx, $sql);
			if(mysqli_num_rows($query) > 0){
				while($var = mysqli_fetch_assoc($query)){

					$postId = $var['id'];
					//$postimage = $['image'];
					$postTitle = $var['title'];
					$postbody = $var['body'];
					$postuploaddate = $var['uploaddate'];
					$postuploadedby = $var['uploadedby'];
					
					
					echo '
						<div class="row ">
        
          
					        <div class="card mb-3">
								  <img src="../images/imagewhitewalls.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">'.$postTitle.'</h5>

								    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

								    <a id="readBlogButton" href="post.php?data='.$postId.'" class="btn btn-primary">Read the blog</a>

								    <p class="card-text"><small class="text-muted">Written by: '.$postuploadedby.'</small></p>

								    <p class="card-text"><small class="text-muted">Written on: '.$postuploaddate.'</small></p>

								  </div>
							</div>
				      	</div>
			      	';
				}
			}
		?>
	</div> <!-- end of container -->

	<div class="container">
		<!-- where my pagination lays: -->
		<div class="table-responsive" id="pagination_data">

		</div>

	</div>

	<?php include_once("../templates/footer.php"); ?>

	<script type="text/javascript">
		$(document).ready(function(){
			
			function load_data(page){
				$.ajax({
					url: "pagination.php",
					method: "POST",
					data: {page:page},
					success:function(data){
						$('#pagination_data').html(data);
					}
				})
			}

		});
	</script>
</body>
</html>