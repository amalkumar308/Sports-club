<?php
session_start();

require('function.php');
$con = con();

if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];

//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM handler H where H.user_id = '$userid'";

$result = $con->query($query);

$arr = $result->fetch_array();

//$sno = $arr["user_no"];
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
	 
     <script type = "text/javascript" >
       function preventBack() { window.history.forward(); }
       setTimeout("preventBack()", 0);
       window.onunload = function () { null };
     </script>


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
				<li class="active"><a href="handler_athlete_home.php">Athlete</a></li>
				<li class="active"><a href="handler_volly_home.php">Volleyball</a></li>
				<li class="active"><a href="handler_basket_home.php">Basketball</a></li>
				<li class="active"><a href="handler_crick_home.php">Cricket</a></li>
				<li class="active"><a href="handler_ftbll_home.php">Football</a></li>
			    <li class="active"><a href="handler_all_see.php">See all candidate</a></li>
				<li class="active"><a href="#"><?php echo "Hi $firstname" ;?></a></li>
                <li class="active"><a href="logout.php">logout</a></li>
   			</ul>
		</div>

	</nav>
	
	<!-- End-->
	<div class="container-fluid" style="margin-top: 70px">
		<div class="container">
			<div class="jumbotron">
				<html>
		<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</html>
<div class="div1"><h2></h2>
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