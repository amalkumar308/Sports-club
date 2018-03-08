<?php
require('function.php');
$notice="MNNIT Sports Club."
//if($_SERVER["REQUEST_METHOD"] == "POST") 
//      // username and password sent from form 
      
      //$notice=$_POST['user_id'];
       
      

       
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Calibri;
            }
            h3
            {
            	font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #EAECEE;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
            h2 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
                     
            
        </style>
	<title>MNNIT Sports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>

    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/jquery.min1.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(bg.jpg)">

	<div style="background-color:none;">
	<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome to MNNIT Sports club" ;?></a>
			</div>
			
		 
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="athlete_home.php">Athlete</a></li>
				<li class="active"><a href="volly_home.php">Volleyball</a></li>
				<li class="active"><a href="basket_home.php">Basketball</a></li>
				<li class="active"><a href="cricket_home.php">Cricket</a></li>
				<li class="active"><a href="ftbll_home.php">Football</a></li>

				<li class="active" class="nav navbar-nav navbar-right"><a href="handler_login.php">Co-ordinator Login</a></li>
				<li class="active"><a href="candi_login.php">Candidate login</a></li>

				<li class="active"><a href="contact.php">Contact Us</a></li>

			</ul>
		</div>
	</nav>
  

	<br><br><br><br><br><br><br>
 
 <h3 align="center">FREQUENTLY ASKED QUESTIONS</h3>
 <br>
	<hr>
	<div>
	 <b>Question 1. How co-ordinator can login first time ?</b><br>
	 Ans. Co-ordinator can login first time through the user id and Password provided by the college.

	 <hr>

	 <b>Question 2. How candidate can login first time ?</b><br>
	 Ans. Candidate have to first sign up and then can login through his/her unique userid.

	 <hr>

	 <b>Question 3. How candidate can register himself/herself for any sport.</b><br>
	 Ans. After login go to the respective page of the sport and simply click on the registration button.

	 <hr>

	 <b>Question 4. How student can get information about events.</b><br>
	 Ans. Student can open the respective sports page after login and can see the venue and timings.
<hr>
	 </div>

	 <br><br><br><br><br>
<hr>
<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		All rights reserved &copy; 2017
	</div>
</footer>


</body>
</html>