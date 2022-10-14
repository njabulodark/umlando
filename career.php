<?php

include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:relogin.php');
    }
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

?>
<section class="careeriers" id="careeriers_page">
    <div class="block-list" style="background-color: orange;">
        <a name="top"></a><h1 >Major's Descriptions</h1>
        <div class="text">
            <div id = 'description'>
                <p>Below is a list of majors and a brief description of what they are. A degree/diploma is conferred to you upon completion of all the requirements for graduation, and your major is the more specific area of study you focused on while completing your degree. Knowing what your major is can help you comprehend the value of your degree and the potential occupations you might pursue after receiving it.  </p></div>
                <ol>
                    <li><a href="#1">wdwd     ca    ree   r 1</a></li>
                    <li><a href="#2">career 2</a></li>
                </ol>
            </div>
        </div>
    </div>

    <?php
    $html = '<div class="career">

    <h1>career %s<a name="%s"></a></h2>
    <div class="row">
        <div class="career-col">
            <h3>Description</h3>
            <p>This major helps prepare students for careers involving the application of engineering principles to agricultural and biological production systems, processing systems, and conservation of land and water resources. The curriculum may include food engineering, postharvest handling and processing of commodities, power and machinery development and applications, resource management and utilization, soil and water management, and structures and their environmental modifications.
Careers for graduates include design, development, and research engineering positions involving food processing, machinery development, irrigation and drainage, soil and water conservation, materials handling, and structural systems for animals, plants, and crop storage. Agricultural and biological engineers are employed in industry, consulting firms, and governmental agencies in the United States and abroad. Graduates may deal with the various engineering aspects associated with production and processing of food, fiber, and other biological materials, within the constraints of environmental protection and natural resource conservation. [ENGINEERING]</p>
        </div>
        <div class="career-col">
            <div class="wrapper" >
                <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg">
            </div>
            <hr>
            <div class="secondpart">
            <h3>High School Subjects</h3>
            <ul style="list-style: none;">
                <li>Maths</li>
                <li>Physical Science</li>
                <li>Life Science</li>
                <li>English</li>
            </ul>
            </div>
        </div>
    </div>
    <div class="top"><a href="#top">back to the top</a></div>
</div>';

        for($i=1; $i<=5; $i++){
            printf($html, $i, $i);
        }
    ?>
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
