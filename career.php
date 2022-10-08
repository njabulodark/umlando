<?php

include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:login.php');
    }
}
else{
    $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
}

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

<?php
include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}

if(isset($_SESSION['logged_in'])){
    echo '<section class="career" >';
}
else{
    include_once "template/overlay.php";
	header('Refresh: 10; URL=login.php');
    echo '<section class="career" style="filter: blur(4px)" >';

}
?>
        <a name="top"></a>
        <h1>Major's Descriptions</h1>
        <div class="text">
          <div id = 'description'>
          <p>Below is a list of majors and a brief description of what they are. A degree/diploma is conferred to you upon completion of all the requirements for graduation, and your major is the more specific area of study you focused on while completing your degree. Knowing what your major is can help you comprehend the value of your degree and the potential occupations you might pursue after receiving it.  </p></div>
          <ol>
          <?php
        
            $query = "select * from Career";
            $result = mysqli_query($conn, $query);
    
            while($row = mysqli_fetch_assoc($result)){
                echo "<li><a href='#{$row['name_title']}'>{$row['name_title']}</a></li>";
                
            }
            
            ?>
          </ol>

          <?php
          $result = mysqli_query($conn, $query);
    
          while($row = mysqli_fetch_assoc($result)){
              //echo "<li><a href='#{$row['name_title']}'>{$row['name_title']}</a></li>";
              echo "<h2>{$row['name_title']}<a name='{$row['name_title']}'></a></h2>";
              echo "<p>{$row['para']}</p>";
              echo '<div class="top"  ><a href="#top" id="hero-btn">back to the top</a></div>';
          }
          ?>
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
