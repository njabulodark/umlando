<?php
include_once "main.php";
$object = Singleton::getInstance();

$conn = $object->startDB("career");

//$object->insertIntoTableUserRegistration($conn, "nja", "nja", "nja@gmail.com");

?>
<?php

$name = $_POST['User'];
$pass = $_POST['password'];

$sate = $object->signInUser($conn, $name, $pass);

if($sate){
    $_SESSION['username']=$name;
    header('location:index.php');
}else{
    header('location:relogin.php');
}



?>