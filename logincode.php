<?php


session_start();
include ('config.php');

if(isset($_POST['login_btn'])){
    $email = $_POST['mail'];
    $password = $_POST['pword'];

    $log_query = "SELECT * FROM users WHERE email= '$email' AND password= '$password' LIMIT 1";

    $log_query_run = mysqli_query($con, $log_query);

    if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row) {
            $user_id =$row['id'];
            $user_name =$row['name'];
            $user_email =$row['email'];
        }

        $_SESSION['auth']= true;
        
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email
        ];   

        header('location: hompage.php');
    }
    else {
        $_SESSION['status']= "Invalid Email or Password";
        header('location: LoginF.php');
    }
}
else {
    $_SESSION['status']= "Access Denied";
    header('location: LoginF.php');

}



?>