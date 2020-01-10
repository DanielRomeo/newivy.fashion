<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
?>

<?php 
    
    // im not storing sessions:::
?>

<?php
    if (isset($_POST["submit"])) {
        
        include_once("../includes/db_conx.php");

        /* the only form of validation for now 
            is check if the passwords match:
        */
        $password = $_POST["password"];    
        $confirmpassword = $_POST["confirmPassword"];

        $firstname = preg_replace('#[^a-z0-9]#i', '', $_POST['firstName']);
        $lastname = preg_replace('#[^a-z0-9]#i', '', $_POST['lastName']);
        $email = $_POST["email"];
        $password = preg_replace('#[^a-z0-9]#i', '', $_POST['password']);
        

        if($password != $confirmpassword){
            echo "paswords do not match";
            exit;
        }

        $sql = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $email_check = mysqli_num_rows($query);
        

        if($email_check > 0){
            echo "email already exists!";
            exit;
        }else{

           // echo $firstname . " ".$lastname. ' '.$email. ' '.$password;
            

            $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";

            $query = mysqli_query($db_conx, $sql);
            // check if successful:
            if($query == TRUE){
                echo "Successfully registered";
            }else{
                echo "there was a problem::";
            }

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            header("Location: index.php");

            //code to check if session is writable
            /*if (!is_writable(session_save_path())) {
                echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
            }else{
                echo "writtable";
            }*/


        }
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

    <div id="mainCard" class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>


          <div class="col-lg-7">
            <div class="p-5">

              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">CREATE NEWIVY BLOG ACCOUNT!</h1>
              </div>

              <form method="post" action="signup.php" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="firstName" id="firstNameField" placeholder="First Name" value="daniel">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastName" id="lastNameField" placeholder="Last Name" value="mamphekgo">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="emailField" placeholder="Email Address" value="danielromeo99@gmail.com">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="passwordField" placeholder="Password" value="danielromeo">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="confirmPassword" id="confirmPasswordField" placeholder="Repeat Password" value="danielromeo">
                  </div>
                </div>

                <button id="submitButton" name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgotpassword.php">Forgot Password?</a>
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


  <?php include_once("includes/footer.php");  ?>
</body>

</html>
