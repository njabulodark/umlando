<?php
include_once "main.php";
$object = Singleton::getInstance();

$conn = $object->startDB("userregistration");

//$object->insertIntoTableUserRegistration($conn, "nja", "nja", "nja@gmail.com");

?>

<?php

$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['user_email'];

$state = $object->checkUserExist($conn, $name);
if($state){
    echo "User already exist";
    header('location:createagain.php');
}
else{
    echo "User already exist";
    header('location:createagain.php');
    $object->insertIntoTableUserRegistration($conn, $name, $pass, $email, "nonadmin");
    echo "Created Account Succesfully";
    header('location:index.php');
    session_start();
    $_SESSION['username']=$name;  
}
?>