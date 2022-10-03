<?php
include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}
?>
<link rel="stylesheet" href="style.css">
<style>
    h4{
        text-align: center;
    }
    form{
        text-align: center;
    }
    p{
        text-align: center;
    }

</style>
<br><br><br><br><br><br>
<h4>Download Previous question papers </h4> 
<?php 


$files=scandir("uploads");
for($a=2;$a<count($files);$a++){


    ?>
    <p>
        <?php echo $files[$a]; ?> 
        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files [$a];?>" >
        Download
        </a>  
       
    </p>
    <?php

}
?>
<br><br><br><br><br><br>
<?php
include_once "template/footer.php";
?>