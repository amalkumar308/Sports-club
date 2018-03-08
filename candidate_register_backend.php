<?php
session_start();

//include funtion.php file

require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    //get data from form

    $userid = validate($_POST["user_id"]);
    $val = validate($_POST["value"]);
    $session = validate($_POST["session"]);

    $con = con();


    //select data from sports choice table where user_id and value is matched
    echo $query = "SELECT choice FROM sports_choice C where C.user_id='$userid' and C.choice='$val'"  ;
    
    $result = $con->query($query);
   if($result->num_rows>0)
    {
    	

        //if value is matched then display alert "you are already registered"
        echo "<script>alert('YOU are resister for this game');window.location='candidate_athlete_home.php';</script>";
        die();
        
    }  

    

    //if value is not mathced, then insert into table sports choice
    $query = " INSERT INTO sports_choice (user_id,session,choice)
        VALUES ('$userid','$session','$val')";
       
    
    $result = $con->query($query);


//control goes to candidate home page
     echo "<script>alert('You are successfully register up.');window.location='candidate_home.php';</script>";
     die(); 
    }
?>