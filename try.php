<?php


$str = "maths,english,LO";

//separate the srring by ,
$str = explode(",", $str);

foreach($str as $key => $value){
    echo $value;
}


?>