<?php
session_start();

	/*
		
		note: when editing post we send the get variable -> id , eg edit.php?id='1'


	*/

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include_once("../includes/db_conx.php");
  
   	if(isset($_SESSION["email"]) && isset($_SESSION['id'])){
        // the user is logged in:
        $yourEmail = $_SESSION["email"];
        $id = $_SESSION['id'];

   		

    }else{
    	// user is not logged in and must be evacuated:
    	header("Location: login.php");
    }

    // scripts to get that statistics:

    // get number of blog posts:
    $sql = "SELECT * FROM posts ";
    $query = mysqli_query($db_conx, $sql);
    $numberOfBlogPosts = mysqli_num_rows($query);

    // get number of users:
    $sql = "SELECT * FROM users ";
    $query = mysqli_query($db_conx, $sql);
    $numberOfBloggers = mysqli_num_rows($query);

    // number of blog posts the user wrote:
    $sql = "SELECT * FROM posts WHERE uploadedby='$id'  ";
    $query = mysqli_query($db_conx, $sql);
    $numberOfPostsYouMade = mysqli_num_rows($query);

    // get total number of website views:

    // i just realsised that i have to count here:

    $numberOfWebsiteViews = 0;
    $sql = "SELECT * FROM posts ";
     $query = mysqli_query($db_conx, $sql);
     //$query = mysqli_num_rows($query);
     if(mysqli_num_rows($query) > 0){
        while($var = mysqli_fetch_assoc($query)){

			$postId = $var['id'];
			//$postimage = $['image'];
			$postTitle = $var['title'];
			$postbody = $var['body'];
			$postuploaddate = $var['uploaddate'];
			$postuploadedby = $var['uploadedby'];
			$postpageviews = $var['page_views'];

			$numberOfWebsiteViews += $postpageviews;
      	}
    }      

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>NEWIVY! @ <?php echo $_SESSION["firstname"]; ?></title>
  <?php include_once("includes/head.php"); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">NEWIVY! </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>NEWIVY @ Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Blogs make:
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="" aria-expanded="true" aria-controls="">
          <i class="fas fa-fw fa-cog"></i>
          <span>View all blog posts</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>View my blog posts</span>
        </a>
        
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Personal
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="create.php" data-target="" aria-expanded="true" aria-controls="">
          <i class="fas fa-fw fa-cog"></i>
          <span>Create a blog post</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar ----------------------------------------------------------------- -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">

                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <?php echo "you are logged in as ". $_SESSION["firstname"].' '.$_SESSION["lastname"]; ?>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of blog posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numberOfBlogPosts; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total number of website views</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numberOfWebsiteViews; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Number of views this month</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total number of bloggers</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numberOfBloggers ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr>

          <!-- Page second heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Personal Dashboard</h1>
            	
            <p>your personal statistics will go here</p>
          </div>

          <div class="row">

            <!-- STATISTICS CARDS FOR THE PERSON -->


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of blog posts you wrote:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numberOfPostsYouMade ?></div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>

        	</div> 

          <!-- load all posts that they wrote -->

          <!-- ------------------------------------------------------------------------------- -->

          <!-- Page third heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Your posts</h1>
          </div>

          <div class="row">

            <?php

              $sql = "SELECT * FROM posts WHERE uploadedby='$id' ";
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
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$postTitle.'</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                          </div> <br />

                          
                          <a href="delete.php?id='.$postId.'" class="btn btn-danger btn-sm" >Delete</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                      ';
                    }
                }
            ?>

          </div> 
        	<hr>   

			<!-- Page second heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Top bloggers on the New Ivy</h1>
				
			<!-- <p>your personal statistics will go here</p> -->
			</div>

			<div class="row">

				<?php

					// find out how i can get te number of posts they posted:

					$sql = "SELECT * FROM users ";
					$query = mysqli_query($db_conx, $sql);
					if(mysqli_num_rows($query) > 0){
						while($var = mysqli_fetch_assoc($query)){

							$id = $var['id'];
							$firstname = $var['firstname'];
							$lastname = $var['lastname'];
							
							
							echo '
								<div class="col-xl-3 col-md-6 mb-4">
								  <div class="card border-left-primary shadow h-100 py-2">
								    <div class="card-body">
								      <div class="row no-gutters align-items-center">
								        <div class="col mr-2">
								          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$firstname.' '.$lastname.'</div>
								          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								        </div>
								       
								      </div>
								    </div>
								  </div>
								</div>
					      	';
						}
					}

				?>
			</div> 
        </div><!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; NEWIVY 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <?php include_once("includes/footer.php"); ?>

  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
