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
   border-bottom: 1px solid #ddd;
   /* Below code is to align the radio buttons horizontally */
   float: left;
   width: auto;
   margin-left: 3em;
}
  .Instructions{
    margin-left: 20%;
  }

  </style>
</head>
<body>
  <script type="text/javascript">
  function calculate(did) {
    var id = did.id;
    var total = 0;
    for (var i = 0; i < did.elements.length; i++){
      if (did.elements[i].checked)
        total += parseFloat(did.elements[i].value);
      }

      total = total/28;
      total = Math.round(total*10)/10;
     alert(total);
     window.location = "result.php?sum="+total+"&id="+id;
      return total;
   }
  </script>

  

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                      <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> If any problem giving the test! +91 965478213</h6>
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
                        <li><a href="testindex.php">Exit Test</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
<!--End of header-->
<!--Start of section-->
<section class="banner_test-area">
  <div class="Instructions">
    <h3 align="center"><u>Screening Test for Dissociative Identity
  Disorder</u></h4>
  <h4>Instructions for Completing this Screening Test:</h4>

<p> > This questionnaire consists of twenty-eight questions about experiences
  you may have in your daily life. We are interested in how often you have these
  experiences (only when you are<em> not under the influence of
  alcohol or drugs)</em>.</p>
<p> > When answering, please determine the degree in which the experience described
    in the question applies to you as a percentage of the time you have the experience.
   'Never' corresponds to 0% of the time and 'Always', corresponds to 100% of
  the time. The range covers 0% to 100% in 10% increments.</p>
<p><em> >Please note:</em> You MUST answer every question for the  test to
  score correctly.</p>
</div>

<form action="#" name="did" id="did">
<table>
<tr>
<th><p align="left">1. Some people have the experience of driving or riding in a car or
bus or subway and suddenly realizing that they don't remember what has
happened during all or part of the trip. </p></th>
</tr>
<tr>
  <td><b>(Never)</b></td>
  <td><input type="radio" value="0" name="q1"></td>
  <td><input type="radio" value="10" name="q1"></td>
  <td><input type="radio" value="20" name="q1"></td>
  <td><input type="radio" value="30" name="q1"></td>
  <td><input type="radio" value="40" name="q1"></td>
  <td><input type="radio" value="50" name="q1"></td>
  <td><input type="radio" value="60" name="q1"></td>
  <td><input type="radio" value="70" name="q1"></td>
  <td><input type="radio" value="80" name="q1"></td>
  <td><input type="radio" value="90" name="q1"></td>
  <td><input type="radio" value="100" name="q1"></td>
  <td><b>(Always)</b></td>
</tr>
<tr>
<th><p align="left">2. Some people find that sometimes they are listening to someone talk
 and they suddenly realize that they did not hear part or all of what
was said. </p></th></tr>
<tr >
  <td><b>(Never)</b></td>
  <td><input type="radio" value="0" name="q2"></td>
  <td><input type="radio" value="10" name="q2"></td>
  <td><input type="radio" value="20" name="q2"></td>
  <td><input type="radio" value="30" name="q2"></td>
  <td><input type="radio" value="40" name="q2"></td>
  <td><input type="radio" value="50" name="q2"></td>
  <td><input type="radio" value="60" name="q2"></td>
  <td><input type="radio" value="70" name="q2"></td>
  <td><input type="radio" value="80" name="q2"></td>
  <td><input type="radio" value="90" name="q2"></td>
  <td><input type="radio" value="100" name="q2"></td>
  <td><b>(Always)</b></td>
</tr>
<th><p align="left">3. Some people have the experience of finding themselves in a place and having no idea how they got there. </p></th></tr>
<tr>
  <td><b>(Never)</b></td>
  <td><input type="radio" value="0" name="q3"></td>
  <td><input type="radio" value="10" name="q3"></td>
  <td><input type="radio" value="20" name="q3"></td>
  <td><input type="radio" value="30" name="q3"></td>
  <td><input type="radio" value="40" name="q3"></td>
  <td><input type="radio" value="50" name="q3"></td>
  <td><input type="radio" value="60" name="q3"></td>
  <td><input type="radio" value="70" name="q3"></td>
  <td><input type="radio" value="80" name="q3"></td>
  <td><input type="radio" value="90" name="q3"></td>
  <td><input type="radio" value="100" name="q3"></td>
  <td><b>(Always)</b></td>
</tr>
<tr>
<th><p align="left">4. Some people have the experience of finding themselves dressed in clothes that they don't remember putting on. </p></th></tr>
<tr>
  <td><b>(Never)</b></td>
  <td><input type="radio" value="0" name="q4"></td>
  <td><input type="radio" value="10" name="q4"></td>
  <td><input type="radio" value="20" name="q4"></td>
  <td><input type="radio" value="30" name="q4"></td>
  <td><input type="radio" value="40" name="q4"></td>
  <td><input type="radio" value="50" name="q4"></td>
  <td><input type="radio" value="60" name="q4"></td>
  <td><input type="radio" value="70" name="q4"></td>
  <td><input type="radio" value="80" name="q4"></td>
  <td><input type="radio" value="90" name="q4"></td>
  <td><input type="radio" value="100" name="q4"></td>
  <td><b>(Always)</b></td>
</tr>
<tr>
<th><p align="left">5. Some people have the experience of finding new things among their belongings that they do not remember buying. </p></th></tr>
<tr>
  <td><b>(Never)</b></td>
  <td><input type="radio" value="0" name="q5"></td>
  <td><input type="radio" value="10" name="q5"></td>
  <td><input type="radio" value="20" name="q5"></td>
  <td><input type="radio" value="30" name="q5"></td>
  <td><input type="radio" value="40" name="q5"></td>
  <td><input type="radio" value="50" name="q5"></td>
  <td><input type="radio" value="60" name="q5"></td>
  <td><input type="radio" value="70" name="q5"></td>
  <td><input type="radio" value="80" name="q5"></td>
  <td><input type="radio" value="90" name="q5"></td>
  <td><input type="radio" value="100" name="q5"></td>
  <td><b>(Always)</b></td>
</tr>
<tr>
<th><p align="left">6. Some people sometimes find that they are approached by people that
 they do not know who call them by another name or insist that they have
 met them before. </p></th></tr>
 <td><b>(Never)</b></td>
 <td><input type="radio" value="0" name="q6"></td>
 <td><input type="radio" value="10" name="q6"></td>
 <td><input type="radio" value="20" name="q6"></td>
 <td><input type="radio" value="30" name="q6"></td>
 <td><input type="radio" value="40" name="q6"></td>
 <td><input type="radio" value="50" name="q6"></td>
 <td><input type="radio" value="60" name="q6"></td>
 <td><input type="radio" value="70" name="q6"></td>
 <td><input type="radio" value="80" name="q6"></td>
 <td><input type="radio" value="90" name="q6"></td>
 <td><input type="radio" value="100" name="q6"></td>
 <td><b>(Always)</b></td>
</tr>
<tr>
<th><p align="left">7. Some people sometimes have the experience of feeling as though
they are standing next to themselves or watching themselves do something
 and they actually see themselves as if they were looking at another
person. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q7"></td>
<td><input type="radio" value="10" name="q7"></td>
<td><input type="radio" value="20" name="q7"></td>
<td><input type="radio" value="30" name="q7"></td>
<td><input type="radio" value="40" name="q7"></td>
<td><input type="radio" value="50" name="q7"></td>
<td><input type="radio" value="60" name="q7"></td>
<td><input type="radio" value="70" name="q7"></td>
<td><input type="radio" value="80" name="q7"></td>
<td><input type="radio" value="90" name="q7"></td>
<td><input type="radio" value="100" name="q7"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">8. Some people are told that they sometimes do not recognize friends or family members. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q8"></td>
<td><input type="radio" value="10" name="q8"></td>
<td><input type="radio" value="20" name="q8"></td>
<td><input type="radio" value="30" name="q8"></td>
<td><input type="radio" value="40" name="q8"></td>
<td><input type="radio" value="50" name="q8"></td>
<td><input type="radio" value="60" name="q8"></td>
<td><input type="radio" value="70" name="q8"></td>
<td><input type="radio" value="80" name="q8"></td>
<td><input type="radio" value="90" name="q8"></td>
<td><input type="radio" value="100" name="q8"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">9. Some people find that they have no memory for some important events in their lives (for example, a wedding or graduation). </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q9"></td>
<td><input type="radio" value="10" name="q9"></td>
<td><input type="radio" value="20" name="q9"></td>
<td><input type="radio" value="30" name="q9"></td>
<td><input type="radio" value="40" name="q9"></td>
<td><input type="radio" value="50" name="q9"></td>
<td><input type="radio" value="60" name="q9"></td>
<td><input type="radio" value="70" name="q9"></td>
<td><input type="radio" value="80" name="q9"></td>
<td><input type="radio" value="90" name="q9"></td>
<td><input type="radio" value="100" name="q9"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">10. Some people have the experience of being accused of lying when they do not think that they have lied. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q10"></td>
<td><input type="radio" value="10" name="q10"></td>
<td><input type="radio" value="20" name="q10"></td>
<td><input type="radio" value="30" name="q10"></td>
<td><input type="radio" value="40" name="q10"></td>
<td><input type="radio" value="50" name="q10"></td>
<td><input type="radio" value="60" name="q10"></td>
<td><input type="radio" value="70" name="q10"></td>
<td><input type="radio" value="80" name="q10"></td>
<td><input type="radio" value="90" name="q10"></td>
<td><input type="radio" value="100" name="q10"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">11. Some people have the experience of looking in a mirror and not recognizing themselves. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q11"></td>
<td><input type="radio" value="10" name="q11"></td>
<td><input type="radio" value="20" name="q11"></td>
<td><input type="radio" value="30" name="q11"></td>
<td><input type="radio" value="40" name="q11"></td>
<td><input type="radio" value="50" name="q11"></td>
<td><input type="radio" value="60" name="q11"></td>
<td><input type="radio" value="70" name="q11"></td>
<td><input type="radio" value="80" name="q11"></td>
<td><input type="radio" value="90" name="q11"></td>
<td><input type="radio" value="100" name="q11"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">12. Some people have the experience of feeling that other people, objects, and the world around them are not real. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q12"></td>
<td><input type="radio" value="10" name="q12"></td>
<td><input type="radio" value="20" name="q12"></td>
<td><input type="radio" value="30" name="q12"></td>
<td><input type="radio" value="40" name="q12"></td>
<td><input type="radio" value="50" name="q12"></td>
<td><input type="radio" value="60" name="q12"></td>
<td><input type="radio" value="70" name="q12"></td>
<td><input type="radio" value="80" name="q12"></td>
<td><input type="radio" value="90" name="q12"></td>
<td><input type="radio" value="100" name="q12"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">13. Some people have the experience of feeling that their body does not seem to belong to them. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q13"></td>
<td><input type="radio" value="10" name="q13"></td>
<td><input type="radio" value="20" name="q13"></td>
<td><input type="radio" value="30" name="q13"></td>
<td><input type="radio" value="40" name="q13"></td>
<td><input type="radio" value="50" name="q13"></td>
<td><input type="radio" value="60" name="q13"></td>
<td><input type="radio" value="70" name="q13"></td>
<td><input type="radio" value="80" name="q13"></td>
<td><input type="radio" value="90" name="q13"></td>
<td><input type="radio" value="100" name="q13"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">14. Some people have the experience of sometimes remembering a past
event so vividly that they feel as if they were reliving that event. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q14"></td>
<td><input type="radio" value="10" name="q14"></td>
<td><input type="radio" value="20" name="q14"></td>
<td><input type="radio" value="30" name="q14"></td>
<td><input type="radio" value="40" name="q14"></td>
<td><input type="radio" value="50" name="q14"></td>
<td><input type="radio" value="60" name="q14"></td>
<td><input type="radio" value="70" name="q14"></td>
<td><input type="radio" value="80" name="q14"></td>
<td><input type="radio" value="90" name="q14"></td>
<td><input type="radio" value="100" name="q14"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">15. Some people have the experience of not being sure whether things
that they remember happening really did happen or whether they just
dreamed them. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q15"></td>
<td><input type="radio" value="10" name="q15"></td>
<td><input type="radio" value="20" name="q15"></td>
<td><input type="radio" value="30" name="q15"></td>
<td><input type="radio" value="40" name="q15"></td>
<td><input type="radio" value="50" name="q15"></td>
<td><input type="radio" value="60" name="q15"></td>
<td><input type="radio" value="70" name="q15"></td>
<td><input type="radio" value="80" name="q15"></td>
<td><input type="radio" value="90" name="q15"></td>
<td><input type="radio" value="100" name="q15"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">16. Some people have the experience of being in a familiar place but finding it strange and unfamiliar. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q16"></td>
<td><input type="radio" value="10" name="q16"></td>
<td><input type="radio" value="20" name="q16"></td>
<td><input type="radio" value="30" name="q16"></td>
<td><input type="radio" value="40" name="q16"></td>
<td><input type="radio" value="50" name="q16"></td>
<td><input type="radio" value="60" name="q16"></td>
<td><input type="radio" value="70" name="q16"></td>
<td><input type="radio" value="80" name="q16"></td>
<td><input type="radio" value="90" name="q16"></td>
<td><input type="radio" value="100" name="q16"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">17. Some people find that when they are watching television or a
movie they become so absorbed in the story that they are unaware of
other events happening around them. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q17"></td>
<td><input type="radio" value="10" name="q17"></td>
<td><input type="radio" value="20" name="q17"></td>
<td><input type="radio" value="30" name="q17"></td>
<td><input type="radio" value="40" name="q17"></td>
<td><input type="radio" value="50" name="q17"></td>
<td><input type="radio" value="60" name="q17"></td>
<td><input type="radio" value="70" name="q17"></td>
<td><input type="radio" value="80" name="q17"></td>
<td><input type="radio" value="90" name="q17"></td>
<td><input type="radio" value="100" name="q17"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">18. Some people find that they become so involved in a fantasy or
daydream that it feels as though it were really happening to them. </p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q18"></td>
<td><input type="radio" value="10" name="q18"></td>
<td><input type="radio" value="20" name="q18"></td>
<td><input type="radio" value="30" name="q18"></td>
<td><input type="radio" value="40" name="q18"></td>
<td><input type="radio" value="50" name="q18"></td>
<td><input type="radio" value="60" name="q18"></td>
<td><input type="radio" value="70" name="q18"></td>
<td><input type="radio" value="80" name="q18"></td>
<td><input type="radio" value="90" name="q18"></td>
<td><input type="radio" value="100" name="q18"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">19. Some people find that they sometimes are able to ignore pain.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q19"></td>
<td><input type="radio" value="10" name="q19"></td>
<td><input type="radio" value="20" name="q19"></td>
<td><input type="radio" value="30" name="q19"></td>
<td><input type="radio" value="40" name="q19"></td>
<td><input type="radio" value="50" name="q19"></td>
<td><input type="radio" value="60" name="q19"></td>
<td><input type="radio" value="70" name="q19"></td>
<td><input type="radio" value="80" name="q19"></td>
<td><input type="radio" value="90" name="q19"></td>
<td><input type="radio" value="100" name="q19"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">20. Some people find that that they sometimes sit staring off into
space, thinking of nothing, and are not aware of the passage of time.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q20"></td>
<td><input type="radio" value="10" name="q20"></td>
<td><input type="radio" value="20" name="q20"></td>
<td><input type="radio" value="30" name="q20"></td>
<td><input type="radio" value="40" name="q20"></td>
<td><input type="radio" value="50" name="q20"></td>
<td><input type="radio" value="60" name="q20"></td>
<td><input type="radio" value="70" name="q20"></td>
<td><input type="radio" value="80" name="q20"></td>
<td><input type="radio" value="90" name="q20"></td>
<td><input type="radio" value="100" name="q20"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">21. Some people sometimes find that when they are alone they talk out loud to themselves.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q21"></td>
<td><input type="radio" value="10" name="q21"></td>
<td><input type="radio" value="20" name="q21"></td>
<td><input type="radio" value="30" name="q21"></td>
<td><input type="radio" value="40" name="q21"></td>
<td><input type="radio" value="50" name="q21"></td>
<td><input type="radio" value="60" name="q21"></td>
<td><input type="radio" value="70" name="q21"></td>
<td><input type="radio" value="80" name="q21"></td>
<td><input type="radio" value="90" name="q21"></td>
<td><input type="radio" value="100" name="q21"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">22. Some people find that in one situation they may act so
differently compared with another situation that they feel almost as if
they were two different people.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q22"></td>
<td><input type="radio" value="10" name="q22"></td>
<td><input type="radio" value="20" name="q22"></td>
<td><input type="radio" value="30" name="q22"></td>
<td><input type="radio" value="40" name="q22"></td>
<td><input type="radio" value="50" name="q22"></td>
<td><input type="radio" value="60" name="q22"></td>
<td><input type="radio" value="70" name="q22"></td>
<td><input type="radio" value="80" name="q22"></td>
<td><input type="radio" value="90" name="q22"></td>
<td><input type="radio" value="100" name="q22"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">23. Some people sometimes find that in certain situations they are
able to do things with amazing ease and spontaneity that would usually
be difficult for them (for example, sports, work, social situations,
etc.).</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q23"></td>
<td><input type="radio" value="10" name="q23"></td>
<td><input type="radio" value="20" name="q23"></td>
<td><input type="radio" value="30" name="q23"></td>
<td><input type="radio" value="40" name="q23"></td>
<td><input type="radio" value="50" name="q23"></td>
<td><input type="radio" value="60" name="q23"></td>
<td><input type="radio" value="70" name="q23"></td>
<td><input type="radio" value="80" name="q23"></td>
<td><input type="radio" value="90" name="q23"></td>
<td><input type="radio" value="100" name="q23"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">24. Some people sometimes find that they cannot remember whether they
 have done something or have just thought about doing that this (for
example, not knowing whether they have just mailed a letter or have just
 thought about mailing it).</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q24"></td>
<td><input type="radio" value="10" name="q24"></td>
<td><input type="radio" value="20" name="q24"></td>
<td><input type="radio" value="30" name="q24"></td>
<td><input type="radio" value="40" name="q24"></td>
<td><input type="radio" value="50" name="q24"></td>
<td><input type="radio" value="60" name="q24"></td>
<td><input type="radio" value="70" name="q24"></td>
<td><input type="radio" value="80" name="q24"></td>
<td><input type="radio" value="90" name="q24"></td>
<td><input type="radio" value="100" name="q24"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">25. Some people find evidence that they have done things that they do not remember doing.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q25"></td>
<td><input type="radio" value="10" name="q25"></td>
<td><input type="radio" value="20" name="q25"></td>
<td><input type="radio" value="30" name="q25"></td>
<td><input type="radio" value="40" name="q25"></td>
<td><input type="radio" value="50" name="q25"></td>
<td><input type="radio" value="60" name="q25"></td>
<td><input type="radio" value="70" name="q25"></td>
<td><input type="radio" value="80" name="q25"></td>
<td><input type="radio" value="90" name="q25"></td>
<td><input type="radio" value="100" name="q25"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">26. Some people sometimes find writings, drawings, or notes among
their belongings that they must have done but cannot remember doing.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q26"></td>
<td><input type="radio" value="10" name="q26"></td>
<td><input type="radio" value="20" name="q26"></td>
<td><input type="radio" value="30" name="q26"></td>
<td><input type="radio" value="40" name="q26"></td>
<td><input type="radio" value="50" name="q26"></td>
<td><input type="radio" value="60" name="q26"></td>
<td><input type="radio" value="70" name="q26"></td>
<td><input type="radio" value="80" name="q26"></td>
<td><input type="radio" value="90" name="q26"></td>
<td><input type="radio" value="100" name="q26"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">27. Some people sometimes find that they hear voices inside their
head that tell them to do things or comment on things that they are
doing.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q27"></td>
<td><input type="radio" value="10" name="q27"></td>
<td><input type="radio" value="20" name="q27"></td>
<td><input type="radio" value="30" name="q27"></td>
<td><input type="radio" value="40" name="q27"></td>
<td><input type="radio" value="50" name="q27"></td>
<td><input type="radio" value="60" name="q27"></td>
<td><input type="radio" value="70" name="q27"></td>
<td><input type="radio" value="80" name="q27"></td>
<td><input type="radio" value="90" name="q27"></td>
<td><input type="radio" value="100" name="q27"></td>
<td><b>(Always)</b></td>
</tr>
<th><p align="left">28. Some people sometimes feel as if they are looking at the world
through a fog so that people and objects appear far away or unclear.</p></th></tr>
<tr>
<td><b>(Never)</b></td>
<td><input type="radio" value="0" name="q28"></td>
<td><input type="radio" value="10" name="q28"></td>
<td><input type="radio" value="20" name="q28"></td>
<td><input type="radio" value="30" name="q28"></td>
<td><input type="radio" value="40" name="q28"></td>
<td><input type="radio" value="50" name="q28"></td>
<td><input type="radio" value="60" name="q28"></td>
<td><input type="radio" value="70" name="q28"></td>
<td><input type="radio" value="80" name="q28"></td>
<td><input type="radio" value="90" name="q28"></td>
<td><input type="radio" value="100" name="q28"></td>
<td><b>(Always)</b></td>
</tr>

<tr>
  <td><input type="button" onclick="calculate(did)" value="Score Answers" id="score"></td>
  <td><input type="reset" value="Clear Form"></td>
</table>
</form>

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
