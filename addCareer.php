<?php

include "main.php";

try {
  $object = Singleton::getInstance();
} finally {
  //echo "something is wrong with your database";
}


$name_tag = $name_title = $describe = $message = "";
$conn = $object->startDB("userregistration");
$error= 0;

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:relogin.php');
    }
}
else{
    header('location:login.php');
}



if(isset($_POST["submit"])) {
    $name_title =  ($_POST["name_title"]);
    $describe =  ($_POST["Description"]);
    $object->insertIntoTableCareer($conn, "{$name_title}", "{$describe}");
}





//$object = Singleton::getInstance();
//$object->insertIntoTableCareer($conn, "accounting", "accounting", "<p>s prepare students for careers in public, industrial, or governmental accounting and also provides an appropriate background for those planning to enter law school or graduate school. Public accounting is carried on by independent practitioners, most of whom are certified public accountants. <strong>[BUSINESS]</strong></p>");
//$object->insertIntoTableCareer($conn, "accounting", "accounting", "<p>s prepare students for careers in public, industrial, or governmental accounting and also provides an appropriate background for those planning to enter law school or graduate school. Public accounting is carried on by independent practitioners, most of whom are certified public accountants. <strong>[BUSINESS]</strong></p>");
//$object->insertIntoTableCareer($conn, "accounting", "accounting", "<p>s prepare students for careers in public, industrial, or governmental accounting and also provides an appropriate background for those planning to enter law school or graduate school. Public accounting is carried on by independent practitioners, most of whom are certified public accountants. <strong>[BUSINESS]</strong></p>");

//$object->selectFromTableCareer($conn);
//$object->deleteFromTableCareer($conn, "accounting");

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <title>Major's Descriptions</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content=" The Jackson Vocational Interest Survey 
    combines a highly regarded career interest test with valuable career and
    education resources and advice.">
    <link rel="stylesheet" href="css/career.css" type="text/css">
    <script language="JavaScript" type="text/javascript" src="../javascript/googlytics.js"></script>
</head>
<body>
<?php
include_once "template/nav.php"
?>
<section class="adminnav">
    <div class="admindiv"></div>
    <?php
    include_once "template/adminnav.php";
    ?>
</section>
<section class="addcareer">
    <div class="add">
        <h1>Add Career</h1>
        <form action="" method="post">
            
            <input type="text" name="name_title" placeholder="Name Title" size="50" style='width:20em' required><br>
            <textarea name="Description" placeholder="Description" style='width:20em' required></textarea><br>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>

</section>

    
<?php
//footer
include_once "template/footer.php";
?>


<script>

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-300px";
}
</script>
</body>
</html>
