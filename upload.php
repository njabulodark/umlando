<?php

   function image(){
      if(isset($_FILES['image'])){
         $errors= array();
      
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"temp/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   }

   image();

   function convert(){
      $command = escapeshellcmd('C:\xampp\htdocs\umlando\test.py');
      $output = shell_exec($command);
      echo $output;
   }
?>