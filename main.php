<?php
 
class Singleton {
                 
    private static $instance = null;
    private $random = null;      
    private final function __construct() {
        //echo __CLASS__ . " initialize only once ";
    }

    public function generate(){
        $this->random = rand(1,30);
    }
     
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
        }
         
        return self::$instance;
    }

    public function image(){
        if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose an Image extension eg JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"temp/"."name".$this->random.".jpg");
        }else{
           //print_r($errors);
           return $errors[0];
            }
        }
    }

    public function waitfile(){
        do {
            if (file_exists("pdf/name".$this->random.".pdf")) {
                echo "<div id='submit'><a href='pdf/name".$this->random.".pdf'>Download</a></div>";
                break;
            }
        } while(true);
    }

    public function convert(){
        echo shell_exec("python pdf.py ");
    }

    public function deletefiles(){
        echo shell_exec("python deletefiles.py");
    }
    
}

/*
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

*/
?>