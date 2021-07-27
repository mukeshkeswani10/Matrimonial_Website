<?php
session_start();

include('config.php');


if(isset($_POST['logout_btn'])){

    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status']="Logged Out Successfully";
    header('location: LoginF.php');
    exit(0);
}

?>