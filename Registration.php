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

$s = "select*from usertable where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Username aready exists";
    header('location:Createagain.php');
}else{
    $reg = "insert into usertable(name,password) values('$name' , '$pass')";
    mysqli_query($con,$reg);
    echo "Created Account Succesfully";
    header('location:login.php');

}
?>