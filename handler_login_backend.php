<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $myusername = mysqli_real_escape_string($con,$_POST['user_id']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 

       
      
      $sql = "SELECT user_id FROM handler_login WHERE user_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) 
      {
         //session_register("myusername");
         $_SESSION['user_id'] = $row['user_id'];
         
         header("location: handler_home.php");
      }
      else 
      {
        // $error = "Your Login Name or Password is invalid";
         echo "<script>alert('invalid id and password');window.location='handler_login.php';</script>";
         die();
      }   
}


?>