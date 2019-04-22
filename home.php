<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
  <title>Mindcare</title>

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
    <link rel="stylesheet" href="assets/css/loginbox.css">
</head>
<body>


    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                      <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +91 965478213</h6>
                      <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> mindcare.rsrsss@gmail.com</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
                <div id="logo">                      <!--logo of the website-->
                    <a href="home.php"><img src="assets/images/logo/logo-main.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-has-children"><a href="">About us</a>
                          <ul>
                              <li><a href="about.php">About the creators</a></li>
                              <li><a href="programs.php">About this website</a></li>
                          </ul>
                      </li>
                        <li class="menu-has-children"><a href="">Test</a>
                            <ul>
                                <li><a href="testindex.php">Take a test</a></li>
                                <li><a href="checkresult.php">Check your Score</a></li>
                            </ul>
                        </li>
                        <li><a href="">Contact</a></li>
                        <li class="menu-active"><a href="Logout.php">Logout</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner_home-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Caring for a better life.</h4>
                    <h1>Health is Wealth.</h1>
                    <p>As much Physical health is important for a better living, Mental health is as much important for a better lifestyle.</p>
                    <p>Never compromise for your mental health. Negligence to your mental health will also affect your family and Friends.
                      Take a test today.</p>
                    <a href="testindex.php" class="template-btn mt-">Take a test</a>     <!--Need to write code for test. -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="assets/images/feature1.png" alt="">
                        <h3>advance technology</h3>
                        <p class="pt-3">Description</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="assets/images/feature2.png" alt="">
                        <h3>Available 24/7</h3>
                        <p class="pt-3">Description</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature3.png" alt="">
                        <h3>Easy steps to take Test</h3>
                        <p class="pt-3">Description</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature4.png" alt="">
                        <h3>Hign Accuracy Evaluation</h3>
                        <p class="pt-3">Description</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->


->


    <!-- Patient Area Starts -->
    <section class="patient-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Patient are saying</h2>
                        <p>See the opinion of our first patients.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-patient mb-4">
                <!--        <img src="assets/images/patient1.png" alt="">
                        <h3>daren jhonson</h3>
                        <h5>hp specialist</h5>
                        <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>black heiden</h3>
                        <h5>hp specialist</h5>
                        <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

    <!-- News Area Starts -->
    <!--
    <section class="news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Recent medical news</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <img src="assets/images/news1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 July 2018
                            </div>
                            <h3><a href="blog-details.html">chip to model coeliac disease</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-md-0">
                        <div class="news-img">
                            <img src="assets/images/news2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Oct 2018
                            </div>
                            <h3><a href="blog-details.html">Galectins An Ancient FaSi Future</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-lg-0">
                        <div class="news-img">
                            <img src="assets/images/news3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Sep 2018
                            </div>
                            <h3><a href="blog-details.html">Getting the Most Out of the CLARI</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   -->
    <!-- News Area Starts -->

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
