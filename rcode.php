<?php
session_start();
include("config.php");

if (isset($_SESSION['auth'])) {

   $uid = $_SESSION['auth_user']['user_id']; 
    echo $uid;
}
else {
  echo "Not Logged In";
}


if(isset($_POST['r_btn']))
{
    $id= $uid; 
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $profile=$_POST['profile'];
    $gender=$_POST['gender'];
    $ename=$_POST['email'];
    $pno=$_POST['ph'];
    $address=$_POST['address'];
    $mtongue=$_POST['mt'];
    $dob=$_POST['dob'];
    $religion=$_POST['rel'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $pincode=$_POST['pin'];

    $user_query="INSERT INTO register (id,first_name,last_name,profile_of,gender,email,ph_number,address,mother_tongue,dob,religion,state,city,pincode) 
    VALUES ('$id','$fname','$lname','$profile','$gender','$ename','$pno','$address','$mtongue','$dob','$religion','$state','$city','$pincode')";
    $user_query_run=mysqli_query($con,$user_query);
        
    if($user_query_run) {
        header("location: register2.php");
    }  
    else {
        echo "hello";
    }
} else {
    echo "Hii";
}

?>