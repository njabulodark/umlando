<?php
session_destroy();
//reset session data
$_SESSION = array();

header('location:index.php');
?>