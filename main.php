<?php
 
class Singleton {
                 
    private static $instance = null;
<<<<<<< HEAD
    private $random = null;   
    private $conn = null;
=======
    private $random = null;      
>>>>>>> abfb57197b30ab825abb3c0fd4e413f15e5c87fe
    private final function __construct() {
        //echo __CLASS__ . " initialize only once ";
    }

<<<<<<< HEAD
    //********************image to pic part************************ */
=======
>>>>>>> abfb57197b30ab825abb3c0fd4e413f15e5c87fe
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
    
<<<<<<< HEAD

/****************data base*********************/

    function startDB($database){
        $this->conn = mysqli_connect("localhost", "root", "", "{$database}");
        if(!$this->conn){
            die(" Not Connected");
        }
        return $this->conn;
    }

/***************Career part**************************/
    function createTableCareer($conn){
        // sql to create table
        $sql = "CREATE TABLE Career (
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name_tag VARCHAR(100) NOT NULL,
            name_title VARCHAR(100) NOT NULL,
            para TEXT NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if ($conn->query($sql) === TRUE) {
          echo "Table Career created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

    }

    function insertIntoTableCareer($conn, $name_tag, $name_title, $para){
        
        $sql = "INSERT INTO Career (name_tag, name_title, para)
        VALUES ('{$name_tag}', '{$name_title}', '{$para}')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function selectFromTableCareer($conn){
        $query = "select * from Career";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            echo "<h1>{$row['name_tag']}</h1>";
            echo "<h1>{$row['name_title']}</h1>";
            echo "<h1>{$row['para']}</h1>";
        }
    }

    function deleteFromTableCareer($conn, $name_tag){
        $sql = "DELETE FROM Career WHERE name_tag='{$name_tag}'";

        if ($conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
    }
}


=======
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
>>>>>>> abfb57197b30ab825abb3c0fd4e413f15e5c87fe
?>