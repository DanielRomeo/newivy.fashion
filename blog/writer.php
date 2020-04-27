<?php
	session_start();
	include_once("../includes/db_conx.php");

	
?>


<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../materialize/css/materialize.min.css">
	<title>NewIvy!</title>
	<?php include_once("templates/head.php"); ?>
	<link rel="stylesheet" href="css/writer.css">
</head>
<body>
	<?php include_once("templates/header.php"); ?>

	<div class="container">

		<!-- 
			
			my 1000 charector summary:
		
		 -->
		 
	      
		  
            

			  <div class="col s12 m7">
			    <h2 class="header">Horizontal Card</h2>
			    <div class="card horizontal">
			      <div class="card-image ">
			        <img class="circle" src="images/imagewhitewalls.jpg">
			      </div>
			      <div class="card-stacked">
			        <div class="card-content">

			        	<h3 class="card-title"> <b>Daniel Mamphekgo</b> </h3>

			          <p>I am a very simple card. I am good at containing small bits of information. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </div>
			        <div class="card-action">
			          <a href="#">This is a link</a>
			        </div>
			      </div>
			    </div>
			  </div>
            
			   <div class="row">
			    <div class="col s12 m5">
			      <div class="card-panel blue">
			        <span class="white-text">social media icons...
			        </span>
			      </div>
			    </div>
			  </div>
		 
			  <div class="row">
			    <div class="col s12 m5">
			      <div class="card-panel teal">
			        <span class="white-text">Get t know me
			        </span>
			      </div>
			    </div>
			  </div>
            

			  <h3>posts</h3>

			<div class="row">
				<div class="s12">
					<div class="carousel">
					    <a class="carousel-item" href="#one!"><img src="images/imagewhitewalls.jpg"></a>
					    <a class="carousel-item" href="#two!"><img src="images/imagewhitewalls.jpg"></a>
					    <a class="carousel-item" href="#three!"><img src="images/imagewhitewalls.jpg"></a>
					    <a class="carousel-item" href="#four!"><img src="images/imagewhitewalls.jpg"></a>
					    <a class="carousel-item" href="#five!"><img src="images/imagewhitewalls.jpg"></a>
				  </div>
				</div>
				
			</div>
			  
		
		
		
	</div> <!-- end of container -->

				
	<?php include_once("templates/footer.php"); ?>
	<script  href="../materialize/js/materialize.min.js"></script>

	<script>

		 M.AutoInit();

		 // document.addEventListener('DOMContentLoaded', function() {
		 //    var elems = document.querySelectorAll('.carousel');
		 //    var instances = M.Carousel.init(elems, {});
		 //  });
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