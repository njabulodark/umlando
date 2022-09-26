<?php

include_once "main.php";
$object = Singleton::getInstance();
//create a data base called career
$object->createDbt("career");

//start the database
$conn = $object->startDB("career");

//create a table called Career
$object->createTableCareer($conn);

//create a table called stat it for changing of dates feature
$object->createTableStat($conn);


?>

<?php

//add initial dates  from a json file on the python folder
if ($object->checkStat($conn)){
  $string = file_get_contents("python/data.json");
  $json_a = json_decode($string,true);
  
  foreach ($json_a as $key => $value){
    //echo  $value. '<br><br>';
    $date=date_create($value);
    echo date_format($date,"d M Y"). '<br><br>';
    $object->insertIntoTableStat($conn, "{$key}","{$value}");
  }
}
/*
$string = file_get_contents("C:/xampp/htdocs/umlando/python/data.json");
$json_a = json_decode($string,true);

foreach ($json_a as $key => $value){
  //echo  $value. '<br><br>';
  $date=date_create($value);
  echo date_format($date,"d M Y"). '<br><br>';
  $object->insertIntoTableStat($conn, "{$key}","{$value}");
}
*/
?>

<?php
$object->createTableUserRegistration($conn);
?>