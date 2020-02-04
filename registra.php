<!doctype html>
<html lang="en">
<head>
	<title>NewIvy!</title>

	<?php include_once("templates/head.php"); ?>

	<!-- custom footer for the registra page: -->
	<link rel="stylesheet" type="text/css" href="css/footerforregistra.css">

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
	</style>
</head>
<body>

	<?php include_once("templates/header.php"); ?>

	<div class="container">
	

		<div class="">
			<h2>Home page. welcome</h2>
		</div>

	</div>

	<?php //include_once("templates/footer.php"); ?>

	<!--footer starts from here-->
	<footer class="footer">

		<div class="container">
			<ul class="foote_bottom_ul_amrc">
				<li><a href="/">Home</a></li>
				<li><a href="/about.php">About</a></li>
				<li><a href="/blog.php">Blog</a></li>
			</ul>

			<p class="text-center">Want your fashion line to be on NEW IVY? <a href="registra.php">Register here</a></p>


			<!--foote_bottom_ul_amrc ends here-->
			<p class="text-center">Copyright @2020 | NEWIVYFASHION</p>

			<ul class="social_footer_ul">
				<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
				<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
			</ul>
			<!--social_footer_ul ends here-->
		</div>
	</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>