<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //fetching data from form
    $firstname = validate($_POST["first_name"]);
    $middlename = validate($_POST["middle_name"]);
    $lastname = validate($_POST["last_name"]);
    $userid = validate($_POST["user_id"]);
    $password = validate($_POST["password"]);
    $mob = validate($_POST["mo"]);
    $email = validate($_POST["email"]);
    $branch = validate($_POST["branch"]);
    $year = validate($_POST["year"]);
    

    $con = con();
    
    //query for "this user_id is present or not"

    $query = "SELECT * FROM candi_login C where C.user_id='$userid' "  ;
    
    $result = $con->query($query);

    if($result->num_rows>0)
    {
        echo "<script>alert('User with this user id is exist.');window.location='candi_signup.php';</script>";
        die();
    }  
    else
    {

        //if user_id is not present then insert all data in candidate table in database

        $ins_query = "INSERT INTO candidate (user_id,first_name,middle_name,last_name,mo,email,branch,year)
        VALUES ('$userid','$firstname','$middlename','$lastname','$mob','$email','$branch','$year')";
        $ins_res = $con->query($ins_query);


        //again insert only user_id and password in candi_login table for security purpose

        $ins1_query = "INSERT INTO candi_login(user_id,password)
        VALUES ('$userid','$password')";
        $ins1_res = $con->query($ins1_query);


        //fetching data after insertion into candiate login to start session

        $search_user ="SELECT * FROM candi_login C where C.user_id = '$userid'";
        $search_result =  $con->query($search_user);
        $arr = $search_result->fetch_array();
        $user = $arr['user_id'];
         $_SESSION['user_id'] = $user;

         //control goes to candiadte home page and session start at the time of signup

        echo "<script>alert('successfully signed up.');window.location='candidate_home.php';</script>";
        die(); 





    }
}
?>