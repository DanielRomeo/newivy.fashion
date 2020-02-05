<!doctype html>
<html lang="en">
<head>
	<title>NewIvy!</title>

	<?php include_once("templates/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/index.css">
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

	<div id="mainBanner" class="">
		
		<?php include_once("templates/header.php"); ?>


		<div id="firstContainer" class="container">
			<h1 class="display-3">NEW IVY FASHION</h1> <br/>

		</div>
		<p align="center">NEWIVY IS A FASHION SITE & COMING SOON. BROWSE OUR FASHION INTESIVE BLOG <a href="blog/">HERE</a></p>

		<div id="mainContainer" class="container">
				
			<h3 class="display-5">Do you want your fashion line to be on NEWIVY?  <a href="registra.php">Register here</a></h3>
		</div>

		<div style="width: 40%; height: 50px;" class="container">
			<a href="https://twitter.com/newivy_fashion?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @newivy_fashion</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>

	<!-- START OF FOOTER (INCLUDES STYLING)=============================================================================== -->


	<!--footer starts from here-->
	<footer class="footer">
		<div class="container bottom_border">

			<div class="row">
				<div class=" col-sm-4 col-md col-sm-4  col-12 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<!--headin5_amrc-->
					<p class="mb10">NEWIVY.FASHION is an authorised fashion retailer.</p>
					<p><i class="fa fa fa-envelope"></i> newivyfashion@gmail.com  </p>
				</div>


				<div class=" col-sm-4 col-md  col-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					
					<ul class="footer_ul_amrc">
					<li><a href="http://webenlance.com">Home </a></li>
					<li><a href="http://webenlance.com">about</a></li>
					<li><a href="http://webenlance.com">Blog</a></li>
					<li><a href="http://webenlance.com">Register to become a retailer</a></li>
					</ul>
				</div>


				<div class=" col-sm-4 col-md  col-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Latest blog posts</h5>

					<ul class="footer_ul_amrc">

						<?php 
							include_once("includes/db_conx.php");

							$sql = "SELECT * FROM posts LIMIT 5";
							$query = mysqli_query($db_conx, $sql);
							if(mysqli_num_rows($query) > 0){
								while($var = mysqli_fetch_assoc($query)){

									$postId = $var['id'];
									$postTitle = $var['title'];
									

									echo  " <li> <a href='localhost/newivy.fashion/blog/post.php?data=".$postId." '> $postTitle </a> </li>";
								}
							}
						?>
						
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>


				<div class=" col-sm-4 col-md  col-12 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<!--headin5_amrc ends here-->

					<a class="twitter-timeline" data-width="400" data-height="300" data-theme="dark" href="https://twitter.com/newivy_fashion?ref_src=twsrc%5Etfw">Tweets by newivy_fashion</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
					<!--footer_ul2_amrc ends here-->
				</div>
			</div>
		</div>


		<div class="container">
			<ul class="foote_bottom_ul_amrc">
				<li><a href="index.php">Home</a></li>
				<li><a href="registra.php">About</a></li>
				<li><a href="blog.php">Blog</a></li>
			</ul>

			<p class="text-center">Want your fashion line to be on NEW IVY? <a href="registra.php">Register here</a></p>


			<!--foote_bottom_ul_amrc ends here-->
			<p class="text-center">Copyright @2020 | NEWIVYFASHION</p>

			<ul class="social_footer_ul">
				<li><a href="https://twitter.com/newivy_fashion"><i class="fab fa-twitter"></i></a></li>
				<!-- <li><a href="http://webenlance.com"><i class="fab fa-youtube"></i></a></li> -->
				<li><a href="https://www.instagram.com/newivy.fashion/"><i class="fab fa-instagram"></i></a></li>
			</ul>
			<!--social_footer_ul ends here-->
		</div>
	</footer>

	<!-- ==END OF FOOTER=================================================================== -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>