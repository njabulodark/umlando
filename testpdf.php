<?php

$hell = "mina loh";
?>

<?php
set_time_limit(0);

echo "Script began: " . date("d-m-Y h:i:s") . "<br>";

do {
    if (file_exists("test.txt")) {
        echo "The file was found: " . date("d-m-Y h:i:s") . "<br>";
        break;
    }
} while(true);
?>