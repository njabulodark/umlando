<?php
include_once "main.php";
$object = Singleton::getInstance();

$conn = $object->startDB("career");

//$object->insertIntoTableUserRegistration($conn, "nja", "nja", "nja@gmail.com");

?>

<?php

$name = $_POST['User'];
$pass = $_POST['password'];

$state = $object->checkUserExist($conn, $name);
if($state){
    echo "User already exist";
    header('location:createagain.php');
}
else{
    echo "User already exist";
    header('location:createagain.php');
    $object->insertIntoTableUserRegistration($conn, $name, $pass, $name."aa@gmail.com");
    echo "Created Account Succesfully";
    header('location:index.php');
    session_start();
    $_SESSION['username']=$name;  
}
?>