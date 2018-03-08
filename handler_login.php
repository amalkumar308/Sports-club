
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="favicon.ico">
	<title>
		Login/Signup
	</title>


	<!-- LINKS WITH THE LOCATION TO YOUR FILES -->

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>

<html lang="en">

<body>
	<!-- Static navbar -->
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome in MNNIT Sports club" ;?></a>
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




 
       <br><br><br><br>




<!--login form  -->

	<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Cordinater Sign In</div>

				</div>     

				<div style="padding-top:30px" class="panel-body" >

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<form id="loginform" class="form-horizontal" role="form" action="handler_login_backend.php" method="post">

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="user_id" type="text" class="form-control" name="user_id" value="" placeholder="userId">                                        
						</div>

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
						</div>


						<div style="margin-top:10px" class="form-group">
							<!-- Button -->

							<div class="col-sm-12 controls">
								<input type="submit" id="btn-login" action="handler_login_backend.php" class="btn btn-success"></a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									Don't have an account! 
									<a href="first_login.php">
										Sign Up Here
									</a>
								</div>
							</div>
						</div>    
					</form>     



				</div>                     
			</div>  
		</div>
	</div>		
</body>
</html>