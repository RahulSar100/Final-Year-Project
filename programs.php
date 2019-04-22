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

    <!-- INTRO Begins -->
    <section class="patient-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center"><br><br>
                        <h2 align="left">WHAT IS THIS WEBSITE?</h2>
                        <p align="left">This is an online mental health assessment website.</p>
                        <h2 align="left">WHAT IT DOES?</h2>
                        <p align="left">As This is a online mental health assessment website,its functionality is screening mental disorder.
                          This website can detect if you are siffering from any mental disorder or not.
                        </p>
                        <h2 align="left">WHY I SHOULD USE IT?</h2>
                        <p align="left">In todays era, many people go through a lot of stress and some people pick some mental illness due to high stress or very shocking events that put a very unplesant exprience into their minds.
                          Due to which this illness develop into very critical disorder if left untreated which not only affects their own personal life but also the life of their friends and family.
                        So to make sure that you don't develop such illness, this website's role is to take assessment and aware you if you are suffering from any symptoms of mental disorder</p>
                        <br><h2>This is our mental health assessment programs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-patient mb-4">
                        <h3>General Anxiety Disorder (GAD)</h3>
                        <p class="pt-3">GAD is universally used for detecting the nature of anxiety of a patient. If you are facing anxiety issues in some situations or
                        you worry a lot about many things and having problems in keeping yourself calm, then you should give this assessment test.</p>
                    </div>
                    <div class="single-patient">
                        <h3>Public Health Questionnaire (PHQ)</h3>
                        <p class="pt-3">PHQ is used for assessing the depression levels of the patient. Do you think you are suffering from depression? Had any breakups and feeling down about it?
                        Did you fail to achiev something you worked so hard till now? Feeling low in enery and lact of interest in your  life? Then this test is for you.</p>
                    </div>
                    <div class="single-patient">
                        <h3>Post-traumatic stress disorder (PTSD)</h3>
                          <p class="pt-3">This test is for assessing if any pationt is suffering from trauma or not. This test is for user's who have gone through bad incidents link-
                          exprience death of someone very close to you, gone through physical and mental abuse.If you have gone through such tragedy,then make sure you or anyone you know has gone through such incidents give this assessment.</p>
                    </div>
                    <div class="single-patient mb-4">
                        <h3>Dissociative identity disorder (DID)</h3>
                        <p class="pt-3">You might have known this by  some other name as 'Dual-Personality'.Some people in their life develop another personality that they are unaware of.
                        They act as normal people and in an instant they change their entire personality and behave in a way that they don't recognize you. Such patients don't have any recollection of those memories.
                      If this test is left untreated, this can even result into complete lost of their natural personality. </p>
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
