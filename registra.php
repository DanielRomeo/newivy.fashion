<!doctype html>
<html lang="en">
<head>
	<title>NewIvy!</title>

	<?php include_once("templates/head.php"); ?>

	<!-- custom footer for the registra page: -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/footerforregistra.css">

	<link rel="stylesheet" type="text/css" href="css/registra.css">

	<style type="text/css">
		html,body{
		    height: 100%
		}
		a{
			color: lightblue;
		}
		a:hover{
			text-decoration: underline;
		}
		.footer{
			bottom: 0;
		}
		footer {
		    position: fixed;
		    height: 100px;
		    bottom: 0;
		    width: 100%;
		}
		.modal{
			border-radius: 0px;
			font-family: sans-serif;
		}
		.modal-title{
			font-family: sans-serif;
		}
		.modal-body{

		}
		.modal-body input{
			border-radius: 0px;
		}
		.close-modal{
			border-radius: 0px;
		}

	</style>
</head>
<body>

	<?php include_once("templates/header.php"); ?>

	<!--  -->

	<!--================ start banner Area =================-->
	<section class="home-banner-area">
		<div class="container">
			<div class="row justify-content-end fullscreen">
				<div class="col-lg-6 col-md-12 home-banner-left d-flex fullscreen align-items-center">
					<div>
						<h1 class="">
							Start your fashion<span> Ecommerce</span>
							experience with us. <br>
						</h1>
						<p class="mx-auto mb-40">
							NEWIVY IS AN AUTHORISED ONLINE FASHION RETAILER.
						</p>
						<a data-toggle="modal" data-target="#exampleModal2" href="#" class="primary-btn">Read More about us</a>

						<a  data-toggle="modal" data-target="#exampleModal" href="#" class="primary-btn">Register Here</a>

						
					</div>
				</div>

				<!-- image -col 6 -->
				<div class="col-lg-6 col-md-12 no-padding home-banner-right d-flex fullscreen align-items-end">
					<img class="img-fluid" src="images/index.png" alt="">
				</div>
			</div>
		</div> <!-- end of container -->
	</section>
	<!--================ End banner Area =================-->

	<div style="min-height: 600px;" class="container">
		
		

	</div>

	<!--  -->

	<!--footer starts from here-->
	<footer class="footer">

		<div class="container">
			<ul class="foote_bottom_ul_amrc">
				<li><a href="index.php">Home</a></li>
				<li><a href="registra.php">About</a></li>
				<li><a href="blog.php">Blog</a></li>
			</ul>

			<p class="text-center">Want your fashion line to be on NEW IVY? <a href="registra.php">Register here</a></p>


			<p class="text-center">Copyright @2020 | NEWIVYFASHION</p>

			<ul class="social_footer_ul">
				<li><a href="https://twitter.com/newivy_fashion"><i class="fab fa-twitter"></i></a></li>
				<!-- <li><a href="http://webenlance.com"><i class="fab fa-youtube"></i></a></li> -->
				<li><a href="https://www.instagram.com/newivy.fashion/"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</footer>

	<!-- modal starts here -->


		<!-- modal for registering -->
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Register to become a Seller!</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		        <div class="container">
		      		<p>As you know, we haven't launced yet. However, our blog is fully active. For now, we want you to register in order for you to get notified whenever we release our latest blog posts and also, <b>Keep you informed on the date of the NEW IVY FASHION ECOMMERCE LAUNCH!</b></p> 

		      		<br>

		      		<form class="">

		      			<p class="text-muted">We will not share any of your information with anyone else!</p>

		      			<div class="form-item">
		      				<label>Enter Name</label>
		      				<input type="email" class="form-control" name="">

		      				<label>Enter Cell number(optional)</label>
		      				<input type="email" class="form-control" name="" placeholder="eg. +27 555 5555">

		      				<label>Enter your email:</label>
		      				<input type="email" class="form-control" name="">

		      				<label>Verify your email:</label>
		      				<input type="email" class="form-control" name="">	
		      			</div>

		      			<br>

		      			<button style="border-radius: 0px;" type="button" class="btn btn-primary btn-sm">Save and Submit </button>

		      		</form>	
		      	</div>


		      </div>
		      
		    </div>
		  </div>
		</div>

		<!-- second modal for Read more about us ==============================================================-->
		<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">About NEWIVY.FASHION</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        		
		      	<div class="container">
		      		<p>New Ivy is an authorised online fashion retailer, tailored specifically to bring you(the brand owner) the best ecommrece selling experience we can.</p> 	
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary close-modal" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

	<!-- modal ends here -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>