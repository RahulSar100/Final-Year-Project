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

    <style type="text/CSS">

    th, td {
    padding: 15px;
    text-align: center;
     border-bottom: 1px solid #ddd;
     color: #3b3a30;
  }
  .test-button{
               width: 100%;
               table-layout: fixed;
               border-collapse: collapse;
               text-align: left;
               color: #fff;
               background: linear-gradient(to right, #244cfd, #15e4fd);
               font-family: "Roboto",sans-serif;
               text-transform: uppercase;
               font-size: 12px;
               font-weight: 400;
               display: inline-block;
               padding: 12px 30px;
               -webkit-transition: all .2s ease-in-out;
               -moz-transition: all .2s ease-in-out;
               -o-transition: all .2s ease-in-out;
               transition: all 0.2s ease-in-out;
             }
.test-form
{
  align:center;
  background: #fff;
  margin-left: 25em;
  margin-right: 25em;
}
  </style>
</head>
<body>


    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> mindcare.rsrsss@gmail.com</h6>
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
                        <li><a href="contact.html">Contact</a></li>
                        <li class="menu-active"><a href="Logout.php">Logout</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
<!--End of header-->
<!--Start of section-->
<section class="banner_test-area">
  <div class="test-form" align="center">
    <table>
      <?php
      $conn = mysqli_connect("localhost","root","","mha");
      if(!$conn) 	{
          die("Error has occured".mysqli_connect_error());
      }
      $userid = $_SESSION['id'];
      ?>
      <thead><B><font color="#3b3a30">List of Test Available</font></B></thead>
      <tr>
        <th>Test</th>
        <th>Status</th>
        <th>Number of attemps</th>
      </tr>
      <tr>
        <td><a href="anxiety.html" class="test-button">General Anxiety Disorder (GAD)</td>
        <td>Available</td>
        <td> <?php mysqli_query($conn,"SELECT COUNT(Score) FROM test_result WHERE user_id='".$userid."'AND Test_name=Anxiety");
        // echo ".$row[COUNT(Score)]";?></td>
      </tr>
      <tr>
        <td><a href="depression.html" class="test-button">Public Health Questionnaire (PHQ</td>
          <td>Available</td>
          <td></td>
      </tr>
      <tr>
        <td><a href="ptsdindex.html" class="test-button">Post-traumatic stress disorder (PTSD)</td>
          <td>Not Available</td>
          <td></td>
      </tr>
      <tr>
        <td><a href="DID.php" class="test-button">Dissociative identity disorder(DID) </td>
          <td>Not Available</td>
          <td></td>
      </tr>
    </table>
  </div>
</section>



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
