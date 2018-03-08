<?php
session_start();

//include funtion.php file
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    
    $userid = validate($_POST["user_id"]);
    $selec = validate($_POST["select_can"]);
    $cho = validate($_POST["choice"]);

    $con = con();
    //update sports choice table
    $query = "UPDATE sports_choice SET selec_stetus='$selec' WHERE user_id='$userid' and choice='$cho'";
    
    $result = $con->query($query);

echo "<script>alert('successfully update up.');window.location='handler_basketball_update.php';</script>";
        die(); 
    }

?>