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

	<script>

function ncheck()
{
var na,nc,n;
nc=/^[a-zA-Z ]+$/;
n=document.getElementById("na");
na=document.getElementById("na").value;
if(!n.value.match(nc) || na.charAt(0)==' ')
{
document.getElementById("spn").innerHTML="Invalid Name";
}
else
{
document.getElementById("spn").innerHTML="";
}
}

function mncheck()
{
var mna,mnc,mn;
mnc=/^[a-zA-Z ]+$/;
mn=document.getElementById("mna");
mna=document.getElementById("mna").value;
if(!mn.value.match(mnc) || mna.charAt(0)==' ')
{
document.getElementById("mspn").innerHTML="";
}
else
{
document.getElementById("mspn").innerHTML="";
}
}

function lncheck()
{
var lna,lnc,ln;
lnc=/^[a-zA-Z ]+$/;
ln=document.getElementById("lna");
lna=document.getElementById("lna").value;
if(!ln.value.match(lnc) || lna.charAt(0)==' ')
{
document.getElementById("lspn").innerHTML="Invalid Name";
}
else
{
document.getElementById("lspn").innerHTML="";
}
}

function echeck()
{
var ea,ec;
ec=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-Z.]{2,6}$/;
ea=document.getElementById("ea");
if(!ea.value.match(ec))
{
document.getElementById("spe").innerHTML="Invalid Email";
}
else
{
document.getElementById("spe").innerHTML="";
}
}

function pcheck()
{
var co,pc;
pc=/^[0-9]{10,10}$/;
co=document.getElementById("co");
if(!co.value.match(pc))
{
document.getElementById("spp").innerHTML="Invalid Phone";
}
else
{
document.getElementById("spp").innerHTML="";
}
}
</script>
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

<!--Signup form  -->
	<div class="container">    
				<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-                       3 col-sm-8 col-sm-offset-2">
			          <div class="panel panel-info">
				         <div class="panel-heading">
				         	<div class="panel-title">Handler Sign Up</div>
					           <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="handler_login.php">log in</a></div>
				           </div>  
				           <div class="panel-body" >
					           <form id="signupform" class="form-horizontal" role="form" action="handler_signup_backend.php" method="post">





						      <div class="form-group">
							   <label for="first_name" class="col-md-3 control-label">First Name</label>
							    <div class="col-md-9">
								   <input type="text" class="form-control" name="first_name" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
							    </div>
						      </div>

						      <div class="form-group">
							    <label for="middle_name" class="col-md-3 control-label">Middle Name</label>
							      <div class="col-md-9">
								    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
							      </div>
						      </div>
						      <div class="form-group">
							    <label for="last_name" class="col-md-3 control-label">Last Name</label>
							      <div class="col-md-9">
							       	<input type="text" class="form-control" name="last_name" placeholder="Last Name" id="lna" onblur="lncheck();"><span id="lspn" style="color:red"></span>
							    </div>
						      </div>
						      <div class="form-group">
							    <label for="user_id" class="col-md-3 control-label">User Id</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="user_id" placeholder="User Id">
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="password" class="col-md-3 control-label">Password</label>
							     <div class="col-md-9">
								   <input type="password" class="form-control" name="password" placeholder="Password">
							     </div>
						      </div>
                              <div class="form-group">
							    <label for="mo" class="col-md-3 control-label">Mo. Number</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="mo" placeholder="Mobile number" id="co" onblur="pcheck();" maxlength="10"><span id="spp" style="color:red"></span>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="email" class="col-md-3 control-label">Email</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="email" placeholder="Email Address" id="ea" onblur="echeck();"><span id="spe" style="color:red"></span>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="branch" class="col-md-3 control-label">Branch</label>
							     <div class="col-md-9">
								   <select  class="form-control" name="branch" >
								   	<option>Choice</option>
								   	<option>MCA</option>
								   	<option>B.TECH</option>
								   	<option>M.TECH</option>
								   	<option>MBA</option>
								   	<option>MS.c</option>
								   	</select>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="year" class="col-md-3 control-label">Year</label>
							     <div class="col-md-9">
								   <select class="form-control" name="year" >
								   	<option>Choice</option>
								   	<option>1st year</option>
								   	<option>2nd year</option>
								   	<option>3rd year</option>
								   	<option>4th year</option>
								   	
								   	</select>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="speci" class="col-md-3 control-label">Speciligetion</label>
							     <div class="col-md-9">
								   <select class="form-control" name="speci">
								   	<option>Choice</option>
								   	<option>athlete</option>
								   	<option>volley ball</option>
								   	<option>basket ball</option>
								   	<option>cricket</option>
								   	<option>football</option>
								   	</select>
							     </div>
						      </div>


						     <div class="form-group">
							          

							          <!--Reset Button -->                                     
							     <div class=" col-md-offset-4 col-md-2">
								     <input type="reset" id="btn-reset" class="btn btn-info"><i class="icon-hand-right" value="Reset" onclick="#"></i>
							     </div>
						       
						

						       
							      <!--Submit Button -->                                        
							     <div class="col-md-offset-2 col-md-2">
								     <input type="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i>
							     </div>
						      </div>




					           </form>
				           </div>
			              </div>



 
		                </div> 
	                 </div>
                    </div>







	
</body>
</html>