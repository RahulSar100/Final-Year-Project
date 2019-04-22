<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>About</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo-title.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +91 965478213</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span>mindcare.rsrsss@gmail.com</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <span id ='logininfo' style="margin-left:25px"><strong>
                                <?php
                                     session_start();
                                     if(isset($_SESSION["username"])){
                                         echo "Hello,".$_SESSION["username"];
                                      }
                                    ?>
                                </strong></span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                  <?php
                  if(isset($_SESSION["username"]))
                      {echo '<a href="home.php"><img src="assets/images/logo/logo-main.png" alt="" title="" /></a>';}
                  else {echo '<a href="index.html"><img src="assets/images/logo/logo-main.png" alt="" title="" /></a>';}
                     ?>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <?php
                      if(isset($_SESSION["username"]))
                          {echo '<li class="menu-active"><a href="home.php">Home</a></li>';}
                      else {echo '<li class="menu-active"><a href="index.html">Home</a></li>';}
                         ?>
                         <li class="menu-has-children"><a href="">About us</a>
                             <ul>
                                 <li><a href="about.php">About the creators</a></li>
                                 <li><a href="programs.php">About this website</a></li>
                             </ul>
                         </li>
                        <li><a href="">Contact</a></li>

                        <?php
                        // If user is not loggin,then show login and Register
                        if(isset($_SESSION["username"]))
                        {echo '<li class="menu-active"><a href="Logout.php">Logout</a></li>';}
                        else
                        {echo '<li class="menu-active"><a href="Login.html">Login</a></li>';
                        echo '<li class="menu-active"><a href="register.html">Register</a></li>';}
                         ?>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                    <?php
                      if(isset($_SESSION["username"]))
                      {echo '<a href="home.php">Home</a> <span>';}
                      else {'<a href="index.html">Home</a> <span>';}  ?> |</span> <a href="about.php">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>Welcome to our Mental Review Website</h2>
                        <p class="pt-3">In todays world it is very important not only to maintain our physical health but also our mental health.
                           Some people might get shy to take a mental checkup but it's not advisable to ignore your mental health since now a days many people face problems like depression, anxiety  and stress which might lead to serious mental problems like dual personality.
                           Hence it's best to always do a regular checkup so that you can live a happy and peaceful like.
                        </p>
                        <p>Don't worry about any leakage of your sensitive information.
                          We dedicate ourselves not only to give best customer exprience but also safegaurd their information.
                          All your test records and your creddential details will be confidential. No unauthorized user can see your details or records without your authentication.
                        We strive to provide user satisfication.</p>
                        <a href="#" class="template-btn mt-3">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Patient Area Starts -->
    <section class="patient-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>WE ARE THE DEVELOPERS OF THIS WEBSITE</h2>
                        <p>We are the students of Datta Meghe College of Engineering.This website is our Bachelors of Engineering in Computer Science Final year Project. We choose this project as a means to benifit our society.
                        Since this website can analyze the mental status of the user and detect if he/she is suffering from mental disease, it will help the user in finding the symtoms of the disease and would provide recommendation of the doctors who can help the user in overcoming their problem.   </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-patient mb-4">
                        <img src="assets/images/developers/rahul.jpg" alt="">
                        <h3>Rahul Sar</h3>
                        <h5>Final year student from Datta Meghe College of Engineering</h5>
                        <p class="pt-3">An optimistic team player.He is completing his final year engineering in DMCE. He lives in Bhandup,Mumbai and likes to code, play video games and loves to play Squash.
                        He has done certification in Web technologies, Oracle SQL and PL/SQl and has skills in solving SQL queries and coding front-end and back-end of websites.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>Rahul Sankhe</h3>
                        <h5>Designation</h5>
                        <p class="pt-3">Description</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>Sanket Sonawane</h3>
                        <h5>Designation</h5>
                        <p class="pt-3">Description</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
