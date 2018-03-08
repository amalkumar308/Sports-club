<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //catch data from form
    $firstname = validate($_POST["first_name"]);
    $middlename = validate($_POST["middle_name"]);
    $lastname = validate($_POST["last_name"]);
    $userid = validate($_POST["user_id"]);
    $password = validate($_POST["password"]);
    $mob = validate($_POST["mo"]);
    $email = validate($_POST["email"]);
    $branch = validate($_POST["branch"]);
    $year = validate($_POST["year"]);
    $speci = validate($_POST["speci"]);

    $con = con();
    //query to chchk user id is persent or not
    $query = "SELECT * FROM handler_login H where H.user_id='$userid' "  ;
    
    $result = $con->query($query);

    if($result->num_rows>0)
    {
        //if user id is persent control goes to handler signup page with appropriate massege
        echo "<script>alert('User with this user id is exist.');window.location='handler_signup.php';</script>";
        die();
    }  
    else
    {
        //insert into handler table if user id is not persent
        $ins_query = "INSERT INTO handler (user_id,handler_first_name,handler_middle_name,handler_last_name,handler_mo,handler_email,handler_branch,handler_year,handler_speci_sports)
        VALUES ('$userid','$firstname','$middlename','$lastname','$mob','$email','$branch','$year','$speci')";
        $ins_res = $con->query($ins_query);

        //insert into handler login table for security purposse
        $ins1_query = "INSERT INTO handler_login(user_id,password)
        VALUES ('$userid','$password')";
        $ins1_res = $con->query($ins1_query);




        $search_user ="SELECT * FROM handler_login H where h.user_id = '$userid'";
        $search_result =  $con->query($search_user);
        $arr = $search_result->fetch_array();
        $user = $arr['user_id'];
         $_SESSION['user_id'] = $user;

        echo "<script>alert('successfully signed up.');window.location='handler_home.php';</script>";
        die(); 





    }
}
?>