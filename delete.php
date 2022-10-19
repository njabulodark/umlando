<?php

include "main.php";

try {
    $object = Singleton::getInstance();
} finally {
    //echo "something is wrong with your database";
}


if(isset($_GET["name"])) {
    $name_title =  ($_GET["name"]);
    $object->deleteFromTableCareer($conn, "{$name_title}");
}

//redirecting back
header("Location:".$_SERVER["HTTP_REFERER"]);

unlink($_GET["name"]);
?>