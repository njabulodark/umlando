<?php

   function image(){
      if(isset($_FILES['image'])){
         $errors= array();
      
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"temp/"."name.jpg");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   }

   //image();

   function convert(){
      echo shell_exec("python pdf.py ");
   }

   //convert();

   function waitfile(){
      print_r("kwenzakala");
      set_time_limit(0);
      //echo "Script began: " . date("d-m-Y h:i:s") . "<br>";
      do {
          if (file_exists("test.txt")) {
              echo "The file was found: " . date("d-m-Y h:i:s") . "<br>";
              echo "<a href='pdf/name.pdf'>Download</a>";
              break;
          }
      } while(true);
   }


?>