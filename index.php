<?php

    /* 
        note: for the featured blog posts:
            - write a script that gets the latest 3 blog posts
    
    */


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>NEWIVYFASHION</title>
</head>
<body>

    <!-- header -->
    <nav>
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">    </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">BLOG</a></li>
                <li class="disabled"><a class="disabled" href="collapsible.html">STORE</a></li>
            </ul>
            </div>
        </div>
       
    </nav>
        
    
    <!-- main  -->
    <div style="" class="container">

        <div class="section">
            <div class="slider">
                <ul class="slides">
                
                    
                    
                    <li>
                        <img src="images/imagewhitewalls.jpg"> <!-- random image -->
                        <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div><!-- end of the slider class -->
        </div> <!-- end of the section class -->

        <div class="section">
            <img class="materialboxed" style="max-width:100px;"  src="images/newivylogo.png">

        </div>

        <!-- featured blog posts: -->
        <h4>Take a look at some of our featured blog posts</h4>

        <!-- row that holds featurd blog post cards -->
        <div class="row">
            <div class="col s4">

                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/newivylogo.png">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p class="truncation">Lorem ipsum, 
                        <a class="">Read blog post</a>
                    </p>
                    </div>
                </div>
            </div> <!-- end of coloumn -->

            <div class="col s4">

                
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/newivylogo.png">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div> <!-- end of coloumn -->

            <div class="col s4">

                
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/newivylogo.png">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div><!-- end of coloumn -->
        </div> <!-- end of row -->
        
    </div> <!-- end of container-->

    <!-- footer -->
    <footer class="page-footer">
            <div class="container">
                <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">NEWIVY FASHION</h5>
                    <p class="grey-text text-lighten-4">NEWIVY.FASHION is an authorised fashion retailer. For now; browser through the latst fashion trends through the <a class="grey-text text-lighten-3" href="http:/newivy.fashion/blog/index.php">the NEWIVYBLOG</a></p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">QUICK LINKS</h5>
                    <ul>
                    <li><a class="grey-text text-lighten-3" href="http://newivy.fashion">HOME</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://newivy.fashion/blog/index.php">BLOG</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://newivy.fashion/registra.php">REGISTER TO BECOME A FASHIONISTA</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                © 2020 Copyright NEWIVYFASHION

                <!-- <script>
                    var footerDate = Date();
                    outputFooterContainer = document.querySelector("#outputFooterContainer");
                    outputFooterContainer.innerHTML = "aaa";
                </script> -->
                <a class="grey-text text-lighten-4 right" href="http://macbase.co.za">DEVELOPED BY MACBASE</a>
                </div>
            </div>
    </footer>


    <script src="materialize/js/materialize.min.js"></script>


    <script>
        // initilaize the slider:
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems, {
                "indicators": false
            });
        });
    

        // initialize the image
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems, {});
        });

        
    </script>

</body>
</html>