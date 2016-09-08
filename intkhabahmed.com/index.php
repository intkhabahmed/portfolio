<?php
 include "config.php";
session_start();?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <?php 
            if ($_GET['page']=="") {
                echo "<title>Home | Intkhab Ahmed - Web Developer</title>";
            }
            elseif ($_GET['page']=="about") {
                 echo "<title>About | Intkhab Ahmed - Web Developer</title>";
            }
            elseif ($_GET['page']=="contact") {
                 echo "<title>Contact | Intkhab Ahmed - Web Developer</title>";
            }
            elseif ($_GET['page']=="portfolio") {
                 echo "<title>Portfolio | Intkhab Ahmed - Web Developer</title>";
            }
            elseif ($_GET['page']=="blog") {
                 echo "<title>Blog | Intkhab Ahmed - Web Developer</title>";
            }
            elseif ($_GET['page']=="featured") {
                 echo "<title>Featured | Intkhab Ahmed - Web Developer</title>";
            }
            
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="publisher" content="">
        <meta name="copyright" content="Intkhab Ahmed<intkhab.ahmed64@gmail.com>">
        <meta name="description" content="">
        <meta name="keywords" content="web, development, html, css, jquery,php, sql">

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster"> -->
        <link rel="stylesheet" mode="all" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css"> -->
        <link rel="stylesheet" mode="all" href="css/font-awesome.min.css">
        <link rel="stylesheet" mode="all" href="css/custom.css" type="text/css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="images/favicon1.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Header -->
          <nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="images/mylogo.png" height="60" width="100" alt="INTKHAB AHMED"><p>INTKHAB AHMED</p></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav main_nav">
        <li><a href="about">About</a></li>
        <li><a href="featured">Featured</a></li>
        <li><a href="portfolio">Portfolio</a></li>
        <li><a href="blog">Blog</a></li>
        <li><a href="contact">Contact</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <ul class=" nav navbar-nav navbar-right social_buttons">
          <li id="facebook"><a href="http://facebook.com/intkhab1" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li id="twitter"><a href="http://twitter.com/intkhab_ahmed" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li id="instagram"><a href="http://instagram.com/intkhab" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
          <li id="linkedin"><a href="https://in.linkedin.com/in/intkhab-ahmed-23b90986" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
      </ul>
      <!-- <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </form> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <!--Variable content-->
        <div class="container">
        <?php 
            if ($_GET['page']=="") {
                 include "pages/home.php";
            }
            elseif ($_GET['page']=="about") {
                 include "pages/about.php";
            }
            elseif ($_GET['page']=="contact") {
                 include "pages/contact.php";
            }
            elseif ($_GET['page']=="projects") {
                 include "pages/projects.php";
            }
            elseif ($_GET['page']=="blog") {
                 include "pages/blog.php";
            }
            
        ?>
        </div>
        <!--end variable content-->

        <!-- Footer -->
        <!-- <footer>
            <div class="container">
                <div class="row">
                
                
                <div class="widget span4"> </div>
                
                    <div class="widget span4">
                        <h4>About Us</h4>
                        <p>We are the pioneers in the field of technology who just don’t love but live engineering. We hold above 70 patents and some of them have already made a breakthrough in the industrial sector.</p>
                    </div>
                    
                    
                    
                    <div class="widget span5">
                        <h4 class="text-center">Navigation Menu</h4>
                        <ul class="unstyled text-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php?page=team">Our Team</a></li>
                            <li><a href="index.php?page=joinUs">Join Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="widget span5">
                        <h4>Contact Us</h4>
                        <p><i class="icon-map-marker"></i> Address: NIT Agartala, Jirania, West Tripura, 799046</p>
                        <div class="pull-left">
                        <p><i class="icon-phone"></i>Phone:<ul><li>+91 9862398892</li>
                                                               <li>+91 9794593605</li></ul></p>
                        </div>
                        <div class="pull-right">
                        <p><i class="icon-envelope-alt"></i> Email:<ul><li><a href="">contact@go-web.co</a></li>
                                                                       <li><a href="">info@go-web.co</a></li></ul></p>
                        </div>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright &copy; 2016 Go Web - All rights reserved.</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                        <a class="dribbble" href=""></a>
                        <a class="twitter" href=""></a>
                        <a class="pinterest" href=""></a>

                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" alt="f"><i class="icon-linkedin" style="color: darkblue; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=""><i class="icon-facebook" style="color: blue; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=""><i class="icon-google-plus" style="color: red; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=""><i class="icon-twitter" style="color: lightblue; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </div>
                </div>
            </div>
        </footer> -->

        <!-- Javascript     -->
        <!-- <script src="js/jquery-3.1.0.min.js"></script> -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script> -->
        

    </body>

</html>

