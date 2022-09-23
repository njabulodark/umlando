<?php

include "main.php";

try {
  $object = Singleton::getInstance();
} finally {
  //echo "something is wrong with your database";
}

$name_tag = $name_title = $describe = $message = "";
$conn = $object->startDB("career");
$error= 0;

if(isset($_POST["submit"])) {
    $name_tag = $_POST["name_tag"];
    $name_title =  ($_POST["name_title"]);
    $describe =  ($_POST["Description"]);
    $object->insertIntoTableCareer($conn, "{$name_tag}", "{$name_title}", "{$describe}");
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
    <link rel="stylesheet" href="career.css">
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

<section class="nav">
    <nav>
        <div class="logo" id="logo">
            <h1>
                <a href="index.php">University Guardian</a>
            </h1>
        </div>
        <div class="nave-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li id="active"><a href="index.php">HOME</a></li>
                <li><a href="university.php">University</a></li>
                <li><a href="college.php">College</a></li>
                <li><a href="career.php">Career Guidance</a></li>
                <li><a href="img2py.php">Pic to PDF</a></li>
				<li><a href="">G12 Exam Papers</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>
<section class="addcareer">
    <div class="add">
        <h1>Add Career</h1>
        <form action="" method="post">
            <input type="text" name="name_tag" placeholder="Name Tag" style='width:20em' required><br>
            <input type="text" name="name_title" placeholder="Name Title" size="50" style='width:20em' required><br>
            <textarea name="Description" placeholder="Description" style='width:20em' required></textarea><br>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>

</section>
    
<?php
echo $message;
?>

</section>


<section class="footers">
    <div id="pic"></div>
    <footer>
        <div class="list">
            <p id="founder">Contact details of the creators</p>
            <ul>
                <li id="names"><b>NA KHUMALO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
            <ul>
                <li id="names"><b>NS MZOBE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>T SIBEKO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>BN HLOPHE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>MI PHIRI  <b>    </b></b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
            </ul><ul>
                <li id="names"><b>T Mashaba</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
        </div>
    </footer>
    
</section>
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
