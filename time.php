<?php
//get current date
$today = date("d-M-Y");
//set date
$date = "25-Sep-2022";

//current date - set date
//$diff = date_diff(date_create($date), date_create($today));

//echo $today;
//date difference from current date to set date if negative then date has passed



$left = strtotime("21 sept 2022")- strtotime($today);
echo $left;

if($left < 0){
    echo "The date has passed";
}
else{
    echo "The date has not passed";
}

$date=date_create("30 September 2022");
echo date_format($date,"d M Y");
?>