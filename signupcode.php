<?php

include("config.php");

//var_dump($_POST);
if(isset($_POST['s_btn']))
{
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['cnf_password'];

    if($password==$confirm)
    {

        $user_query="INSERT INTO users (name,email,password) VALUES ('$name','$mail','$password')";
        $user_query_run=mysqli_query($con,$user_query);
        
        if($user_query_run) {
            header("location: hompage.php");
        }
        else {
            header("location: loginF.php");
        }
    
    }

    
    else
    {
        echo "failed";
    }

}

?>