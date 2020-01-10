<?php 
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<?php
    
    if (isset($_POST["submit"])) {

        include_once("../includes/db_conx.php");

        $email = $_POST["email"];
        $password = preg_replace('#[^a-z0-9]#i', '', $_POST['password']);
        

        if ($email == "" || $password == "") {
            echo "fill in the form";
            exit();
        }else{
           

            $sql = "SELECT  * FROM users WHERE email ='$email' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);


            $row = mysqli_fetch_row($query);
            $db_id = $row[0];
            $db_firstname = $row[1];
            $db_lastname = $row[2];
            $db_email = $row[3];
            $db_password = $row[4];

            if ($password != $db_password) {
                echo "incorect email or password";
                exit();
            }else{

                // set the sessions and send them through:
                $_SESSION['firstname'] = $db_firstname;
                $_SESSION['lastname'] = $db_lastname;
                $_SESSION['email'] = $db_email;
                $_SESSION['password'] = $db_password;

                header('Location: index.php');
                exit();
            }
        }
        exit();        
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>NEWIVY!</title>
  <?php include_once("includes/head.php"); ?>


  <style type="text/css">
    #mainCard, #firstNameField, #lastNameField, #passwordField, #emailField, #confirmPasswordField, #submitButton{
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


            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">WELCOME BACK TO THE NEWIVY BLOG!</h1>
                  </div>

                  <form method="post" action="login.php" class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="emailField" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="passwordField" placeholder="Password">
                    </div>
                    

                    <button  id="submitButton" name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgotpassword.php">Forgot Password?</a>
                  </div>

                  <div class="text-center">
                    <a class="small" href="signup.php">Create an Account!</a>
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
