<?php

$serverName = "localhost";
$username = "root";
$password = "";
$database = "userregistration";
session_start();


$con = mysqli_connect($serverName,$username,$password,$database);
mysqli_select_db($con,$database);
$name = $_POST['User'];
$pass = $_POST['password'];

$s = "select*from usertable where name = '$name'  && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$name;
    header('location:index.php');
}else{
    header('location:relogin.php');
}

?>