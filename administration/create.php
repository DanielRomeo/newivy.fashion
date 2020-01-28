<?php// echo //exec('whoami'); ?>

<?php
	

    // session code:
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

  	session_start();

	if(isset($_SESSION["email"]) && isset($_SESSION['id'])){
	    // the user is logged in:
	}else{
	  header("Location: login.php");
	}
	include_once("../includes/db_conx.php");

	
	$responseMessage = "";

	if(isset($_POST["submit"])){

		// get all the information from the form:
    $id = $_SESSION['id'];
		$title = $_POST["title"];
		$body = $_POST["body"];
		$email = $_SESSION["email"];
		$username = $_SESSION["firstname"].' '.$_SESSION["lastname"];
		$date = date('Y/m/d H:i:s');
		

		//path to store the uploaded image:
		// $target = "images/".basename($_FILES['image']['name']);
		// $image = $_FILES['image']['name'];
		// $fileTempLocimage = $_FILES["image"]["tmp_name"];

    $image = "samamma";
    echo $username;


		// create post code:
		$sql = "INSERT INTO posts(image, title, body, uploaddate, uploadedby, page_views) VALUES ('$image', '$title', '$body', '$date', '$id', '0')";

		$query = mysqli_query($db_conx, $sql);

		if($query == TRUE){
			$responseMessage = "Successfully added a post";
		}else{
			$responseMessage = "Couldn't Add a post!";
      echo("Error description: " . mysqli_error($db_conx));
		}

		// if (move_uploaded_file($fileTempLocimage, "../blog/images/$image")) {
		//    }else{
		//    }
	}
	
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <title>NEWIVY!</title>

  <?php include_once("includes/head.php"); ?>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>



  <style type="text/css">
      #submitButton, #emailField, #mainCard, #titleField, #postField, #buttonHome{
        border-radius: 0px;
      }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div id="mainCard" class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

            <button id="buttonHome" class="btn btn-primary"> < GO BACK HOME</button>

            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">

                	<?php echo $responseMessage; ?>

                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Create a blog post</h1>
                  </div>

                  <form name="" action="create.php" method="POST" class="user" enctype="multipart/form-data">

                    <div class="form-group">
                    	<label>Title</label>
                      	<input id="titleField" name="title" type="text" class="form-control form-control-user" >
                    </div>

                    <div class="form-group">
                    	<label>Post</label>
                      	<textarea id="postField" name="body" rows="5" cols="5" type="text" class="form-control form-control-user" ></textarea>
                    </div>

                    <!-- <input type="hidden" name="size" value="1000000">
                    <div class="form-group">
					    <label for="image">Upload Cover Image</label>
					    <input type="file" name="image" class="form-control-file" id="image">
					</div> -->



                    <button type="submit" name="submit"  id="submitButton"  class="btn btn-primary btn-user btn-block">
                      Submit post
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script>
  CKEDITOR.replace( 'body' );
</script>

  <?php include_once("includes/footer.php");  ?>

</body>

</html>
