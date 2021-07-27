<?php

include("config.php");

if(isset($_POST['c_btn']))
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $pno= $_POST['phone_no'];
    $message= $_POST['message'];


    $user_query="INSERT INTO contact (name, email, phone_no, message) 
    VALUES ('$name', '$email', '$pno', '$message')";
    $user_query_run=mysqli_query($con,$user_query);
        
    if($user_query_run) {
        header("location: hompage.php");
    }
     else{
        //  echo "ERROR 404:Submission Error";
        header("location: hompage.php");
     }
    
    
} else {
    echo "NOT";
}

?>