<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    
    $userid = validate($_POST["user_id"]);


    $con = con();
    //get data from candidate table where userid match
    $query = "SELECT * FROM candidate WHERE user_id='$userid'";
    
    $result = $con->query($query);

    $row=$result->fetch_array();

    $useri=$row[0];
    $first_name=$row[1];
    $middle_name=$row[2];
    $last_name=$row[3];
    $mo=$row[4];
    $email=$row[5];
    $branch=$row[6];
    $year=$row[7];
//get data from sports table where userid match
    $query1 = "SELECT * FROM sports_choice WHERE user_id='$userid'";
     $result1 = $con->query($query1);

    $row1=$result1->fetch_array();

    $session=$row1[1];
    $choice=$row1[2];
    $selec=$row1[3];
//insert data in delete candidate table for future use...
    $ins_query = "INSERT INTO delete_candidate (user_id,first_name,middle_name,last_name,mo,email,branch,year,session,choice,select_stetus)
        VALUES ('$useri','$first_name','$middle_name','$last_name','$mo','$email','$branch','$year','$session','$choice','$selec')";
        $ins_res = $con->query($ins_query);
//delete from candidate table
       $sql="DELETE FROM candidate where user_id='$userid'"; 
       $result2 = $con->query($sql);

       //delete from candi logon table
       $sql1="DELETE FROM candi_login where user_id='$userid'"; 
       $result3 = $con->query($sql1);

       //delete from sports choice table
       $sql2="DELETE FROM sports_choice where user_id='$userid'"; 
       $result4 = $con->query($sql2);


echo "<script>alert('Candidate Delete successfully ');window.location='handler_home.php';</script>";
        die(); 
    }

?>