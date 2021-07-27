<?php

$server="localhost";
$username="root";
$password="";
$dbname="wow_ji";

if(!$con = mysqli_connect($server,$username,$password,$dbname))
{
    die("Fail To Connect ");
}

?>