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


$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];


//fetch data from candidate to future use at this page
$query = "SELECT * FROM candidate C where C.user_id = '$userid'";

$result = $con->query($query);

$arr = $result->fetch_array();

$firstname = $arr["first_name"]; 


//QUERY TO FETCH ALL details of co-ordinator

$ca_detail = "SELECT * FROM handler";
$ca_result = $con->query($ca_detail);

//QUERY TO FETCH ALL details of candidate

$candi_detail = "SELECT * FROM sports_choice S,candidate C where S.user_id = '$userid' and S.user_id=C.user_id";
$candi_result = $con->query($candi_detail);

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
<br>
<br>
<div class="container" >
			<div class="col-sm-12" >
<h2><marquee>welcome in Volleyball page</marquee></h2>
<hr>
</div>
</div>
<!--print details of candidate -->
	<div class="container">    
				

                      <?php

		                  echo "<table class='table' border='1' align='center'>";
		                  echo "<caption>YOUR DETAILS</capiton>";
                          echo "<tr><th>User_id</th><th>Session</th><th>Sports</th><th>First name</th><th>Middle name</th><th>Last name</th><th>Contact no</th><th>Email</th><th>Branch</th><th>Year</th><th>Status</th></tr>";
		 
                         while($row=$candi_result->fetch_array())
                           {
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[3]</td></tr>";
	                        }
		                 echo "</table>";
		                ?>

	</div>

<!--below div is used for registraion for volleyball and displaying information -->

<div class="container-fluid" style="margin-top: 70px">
		<div class="container">
			<div align="center"class="jumbotron">
              Pratice Timing:- 6 A.M. - 9 A.M.
              <br>Venue:- Crickrt Ground
              <form id="signupform" class="form-horizontal" role="form" action="candidate_register_backend.php" method="post">
                 <div class="form-group">
							                                             
							     <div class="col-md-offset-3 col-md-6">
							     	<input type="hidden" name="user_id" value="<?php echo $userid ?>"></label>
							     	<input type="hidden" name="value" value="volleyball"></label>
							     	 <div class="form-group">
							    <label for="year" class="col-md-2 control-label">session</label>
							     <div class="col-md-8">
								   <select class="form-control" name="session" >
								   	<option>2017-18</option>
								   	<option>2016-17</option>
								   	<option>2015-16</option>
								   	<option>2014-15</option>
								   	
								   	</select>
							     </div>
						      </div>
								     <input type="submit" id="btn-signup" value="Click To Register"class="btn btn-info"><i class="icon-hand-right"></i>
							     </div>
						      </div>              
			</div>
		</div>


<!--print contact details of co-ordinators -->
	<div class="container">    
				

                      <?php

		                  echo "<table class='table' border='1' align='center'>";
		                  echo "<caption> CO-ORDINATERS CONTACTS</capiton>";
                          echo "<tr><th>First name</th><th>Middle name</th><th>Last name</th><th>Contact no</th><th>Email</th><th>Speci.Sports</th></tr>";
		 
                         while($row=$ca_result->fetch_array())
                           {
                            echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[8]</td></tr>";
	                        }
		                 echo "</table>";
		                ?>

                                  

					          				          
			              



 
		              
     </div>

	
	


<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		All rights reserved &copy; 2017
	</div>
</footer>


</body>
</html>