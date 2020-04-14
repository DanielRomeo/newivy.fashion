 <!DOCTYPE html>
<html lang="en">

<head>

  <title>NEWIVY!</title>

  <?php include_once("includes/head.php"); ?>

  <style type="text/css">
      #submitButton, #emailField, #mainCard{
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
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>

                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="emailField" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <button  id="submitButton" type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                  </form>


                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php include_once("includes/footer.php");  ?>

</body>

</html>
