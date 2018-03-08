<?php
session_start();


//include funtion.php file

require('function.php');
$con = con();
$notice='No notice publised yet';

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

$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];

//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM candidate C where C.user_id = '$userid'";

$result = $con->query($query);

$arr = $result->fetch_array();


$firstname = $arr["first_name"]; 
$middlename = $arr["middle_name"];
$lastname = $arr["last_name"];
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">

	<!--style for h2,h3-->

	<style type="text/css">
            
            h3
            {
            	font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #A3A3A3;
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
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/drop.css" rel="stylesheet">
	<link href="generic.css" rel="stylesheet" type="text/css" />
	<link href="./assets/css/index.css" rel="stylesheet">
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	
    

</head>
<body>
	<!-- Static navbar -->
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome in MNNIT Sports club" ;?></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="candidate_home.php">Home</a></li>
				<li class="active"><a href="candidate_athlete_home.php">Athlete</a></li>
				<li class="active"><a href="candidate_volleyball_home.php">Volleyball</a></li>
				<li class="active"><a href="candidate_basketball_home.php">Basketball</a></li>
				<li class="active"><a href="candidate_cricket_home.php">Cricket</a></li>
				<li class="active"><a href="candidate_football_home.php">Football</a></li>
				<li class="active"><a href="#"><?php echo "welcome $firstname" ;?></a></li>
                <li class="active"><a href="logout.php">logout</a></li>
   			</ul>
		</div>

	</nav>

	<br><br>
	<div class="modal-body">
        <form method="POST" align="center" action="">
          <div class="form-group">
            <h3><label for="blog title" align="center" style="color:#FFFFFF">NOTICE</label>
            <div style="display:block;"><marquee><?php echo $notice; ?> </marquee></div></h3>
          </div>

        </form>
      </div>
	
	<!-- End-->
	<div class="container-fluid" style="margin-top: 70px">
		<div class="container">
			<div class="jumbotron">
			
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