<?php
session_start();


//include funtion.php file

require('function.php');
$con = con();


//here check, where "session with user_id" is set or not

if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}
else
{


//if session is not set then control goes to homepage
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}


$handlerid = $_GET["user_id"];
$userid = $_SESSION['user_id'];
//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM handler H where H.user_id = '$userid'";

$result = $con->query($query);

$arr = $result->fetch_array();


$firstname = $arr["handler_first_name"]; 
$middlename = $arr["handler_middle_name"];
$lastname = $arr["handler_last_name"];
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<title>MNNIT Sports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/drop.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<style type="text/css">
            
            
            h2 {

                font-weight: 300;
                font-size: 2em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
                     
            
        </style>
	
</head>
<body>
	<!-- Static navbar -->
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome in MNNIT Sports club" ;?></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="handler_home.php">Home</a></li>
				<li class="active"  data-toggle="modal" data-target="#add_blog_modal"><a href="handler_athlete_home.php">Athlete</a></li>
				<li class="active"><a href="handler_volly_home.php">Volleyball</a></li>
				<li class="active"><a href="handler_basket_home.php">Basketball</a></li>
				<li class="active"><a href="handler_crick_home.php">Cricket</a></li>
				<li class="active"><a href="handler_ftbll_home.php">Football</a></li>
				<li class="active"><div class="dropdown">
  				<button class="dropbtn">Handle</button>
  				<div class="dropdown-content">
   				 	<a href="handler_cricket_see.php">See all candidates</a>
    				<a href="handler_cricket_see_select.php">See selected candidates</a>
    				<a href="handler_cricket_delet.php">Delete any candidate from database</a>
    				<a href="handler_cricket_update.php">Update candidate</a>
 				</div>


				<li class="active"><a href="#"><?php echo "Hi $firstname" ;?></a></li>
                <li class="active"><a href="logout.php">logout</a></li>
   			</ul>
		</div>

	</nav>
	<br>

<br>
<div class="container" >
			<div class="col-sm-12" >
<h2><marquee>welcome in Cricket page</marquee></h2>
<hr>
</div>
</div>
	<!-- End-->
	<div class="container-fluid" style="margin-top: 70px">
		<div class="container">
			<div class="jumbotron">
				<html>
		<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</html>
<div class="div1">
        <p>
    </div>
    <div id="sliderFrame">
        <div id="slider">
		
	
                <img src="images/image-slider-1.jpg" alt="Welcome to MNNIT Sports Club" />
            </a>
			
            <img src="images/image-slider-2.jpg" alt="" />
            <img src="images/image-slider-3.jpg" alt="" />
            <img src="images/image-slider-4.jpg" alt="" />
            <img src="images/image-slider-5.jpg" />
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>
		<div class="container">
			<div class="col-sm-12">
									
		    </div>
	    </div>
		</div>
	</div>
</div>


<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		All rights reserved &copy; 2017
	</div>
</footer>


</body>
</html>