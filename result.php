
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

    table {
    background:#f6f7f7;
    margin:0 auto;
    }
  th, td {
  padding: 15px;
  text-align: left;
   border-bottom: 1px solid #ddd;
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

                        <li><a href="about.php">about us</a></li>
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
  <?php
  $conn = mysqli_connect("localhost","root","","mha");
  if(!$conn) 	{
      die("Error has occured".mysqli_connect_error());
  }
    $sum = $_GET['sum'];
    $id = $_GET['id'];
    $userid = $_SESSION['id'];
    $date = date("Y-m-d");
    switch ($id) {
    case "anxiety":
      if($sum<=4)
      {
        echo "<table><tr><th>Test:</th><td>Anxiety</td></tr>
        <tr><th>Severity Level:</th><td>Minimal</td><tr><th>Remark :</th><td>No symptoms of Anxiety detected. Hence no further Monitoring Required.</td></tr></table>";
        mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Anxiety','$date','Minimal Severity of Anxiety','$sum')");
        break;
      }
      else if(($sum>=5)&&($sum<=9))
      {
        echo "<table><tr><th>Test:</th><td>Anxiety</td></tr>
       <tr><th>Severity Level:</th><td>Mild</td><tr><th>Remark :</th><td>Less severity of Anxiety detected. No monitoring required for now.
        Please re-attempt this test after a span of 2 weeks</td></tr></table>";
       mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Anxiety','$date','Mild Severity of Anxiety','$sum')");
       break;
    }
      else if(($sum>=10)&&($sum<=14))
      {
        echo "<table><tr><th>Test:</th><td>Anxiety</td></tr>
       <tr><th>Severity Level:</th><td>Moderate</td><tr><th>Remark :</th><td>Possible Clinically significant condition present.
       Further assessment(including diagnostic interview and mental status examination) and / or referal to mental health professional recommended.</td></tr></table>";
       mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Anxiety','$date','Moderate Severity of Anxiety','$sum')");
       break;
   }
     else if(($sum>=15)&&($sum<=21))
      {
        echo "<table><tr><th>Test:</th><td>Anxiety</td></tr>
        <tr><th>Severity Level:</th><td>High</td><tr><th>Remark :</th><td>Severe symptoms of anxiety detected.Please visit  the nearest mental health professional</td></tr></table>";
        mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Anxiety','$date','High Severity of Anxiety','$sum')");
        break;
    }
    else if($sum>21) echo "Error in calculating anxiety.";
        break;

    case "depress":
    if($sum<=4)
    {
      echo "<table><tr><th>Test:</th><td>Depression</td></tr>
      <tr><th>Severity Level:</th><td>Minimal</td><tr><th>Remark :</th><td>No symptoms of Depression detected. Monitoring or treatment not required.</td></tr></table>";
    mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Depression','$date','Minimal Severity of Depression','$sum')");
    break;
    }
    else if(($sum>=5)&&($sum<=9))
    {
      echo "<table><tr><th>Test:</th><td>Depression</td></tr>
     <tr><th>Severity Level:</th><td>Mild</td><tr><th>Remark :</th><td>Less severity of Anxiety detected. Monitoring required.
      Please re-attempt this test after a span of 2 weeks</td></tr></table>";
      mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Depression','$date','Mild Severity of Depression','$sum')");
      break;
    }
    else if(($sum>=10)&&($sum<=14))
    {
      echo "<table><tr><th>Test:</th><td>Depression</td></tr>
     <tr><th>Severity Level:</th><td>Moderate</td><tr><th>Remark :</th><td>Use clinical judgmen to determine necessity of treatment</td></tr></table>";
     mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Depression','$date','Moderate Severity of Depression','$sum')");
    }
    else if(($sum>=15)&&($sum<=19))
    {
      echo "<table><tr><th>Test:</th><td>Depression</td></tr>
      <tr><th>Severity Level:</th><td>Moderately severe</td><tr><th>Remark :</th><td>Warrants active treatment, please visit your nearest mental health professional.</td></tr></table>";
      mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Depression','$date','Severe Levels of Depression','$sum')");
      break;
    }
   else if(($sum>=20)&&($sum<=27))
    {
      echo "<table><tr><th>Test:</th><td>Depression</td></tr>
      <tr><th>Severity Level:</th><td>Highly severe</td><tr><th>Remark :</th><td>Severe symptoms of depression detected. Warrants active treatment ,
       please visit your nearest mental health professional. Treatment with psychotherapy, medications or combination required.</td></tr></table>";
      mysqli_query($conn,"INSERT INTO test_result (user_id,Test_name,Completion_date,Remark,Score) VALUES ('$userid','Depression','$date','Very Hign Severity of Depression','$sum')");
      break;
   }
  else if($sum>21) echo "Error in calculating depression.";
      break;
    case "did":
    echo "This is from DID";
    echo "<br>The Result is :&nbsp".$sum;
        break;
   case "ptsd":
   echo "This is from PTSD";
   echo "<br>The Result is :&nbsp".$sum;
        break;
    default:
        echo "Matching error with id or sum!!!";
}

   ?>
   <div style="margin-left:35%;margin-top:2em;">
   <a href="home.php" class="template-btn mt">Go to homepage</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="testindex.php" class="template-btn mt">Select another Test</a> </div>
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
