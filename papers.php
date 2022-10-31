<?php

include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

$careers = $object->getCareer($conn);

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:login.php');
    }
	else{
		$_SESSION['expire'] = time() + 60*60;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
    
<?php
$arr = array();
$names = array();
foreach(glob('./uploads/*.*') as $filename){
    $tmp = array();
    $new = "";
    $filename = basename($filename);
    
    $filename = explode(" ", $filename);

    for($i = 0; $i < 2; $i++){
        if("P1" == $filename[$i] || "P2" == $filename[$i] || "Nov" == $filename[$i]){
            continue;
        }
        else{
            $new .=$filename[$i]." ";
        }
        
    }
    
    if(!in_array($new, $names)){
        
        array_push($names, $new);
    }
    
}
foreach($names as $name){
    foreach(glob('uploads/*.*') as $filename){
        if(strpos($filename, $name)){
            $arr[$name][] = $filename;
        }
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

<section class="papers">

<div class="block-list" style="background-color: orange;">
        <a name="top" ></a><h1 >Download Previous question papers</h1>
        <div class="text">
            <div id = 'description'>
                <p>Below is a list of Grade 12 past examination papers of varous subjects.  </p></div>
                <ol>
                    <?php
                    foreach(array_keys($arr) as $key){
                        $key = str_replace(" ", "", $key);
                        echo "<li ><a href='#".$key."' style='text-decoration: none;'>".$key."</a></li>";
                    }
                    ?>
                </ol>
            </div>
        </div>
    </div>

    <div class="paper-block" style="background-color: grey;">

        <?php

        foreach(array_keys($arr) as $key){
            $key1 = str_replace(" ", "", $key);

            echo "<h1 style='padding: 2%;'>".$key1."<a name='".$key1."'></a></h1>";
            foreach($arr[$key] as $file){
                $html = "<a href='{$file}' download='{$file}' style='padding-left: 20px; font-size: 20px;'".$file."'> %s</a><br>";
                printf($html, basename($file));
            }

            echo '<br>'.'<div class="top" style="padding-left: 20%;" ><a href="#top">back to the top</a></div>'.'<br><hr>';
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
