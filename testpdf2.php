<?php 
include 'upload.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    
</head>
<body>
    
<section class="image2pdf">
    <div class="tool">
        <div class="tool_header">
            <h1>Convert Image To PDF</h1>
            <p>The best I can do with our current skills, not really im just lazy</p>


            <iframe name="votar" style="display:none;"></iframe>
            <form action="" method="post" enctype="multipart/form-data" target="votar">\
                Select image to upload:
                <input type="file" name="image" />
                <input type="submit"/>
            </form>
            <?php
           if($_SERVER['REQUEST_METHOD']=='POST')
           {
            echo "<div> Does this work</div>";
            //image();
            //convert();
            //sleep(3);
            //waitfile();
            set_time_limit(0);
      echo "Script began: " . date("d-m-Y h:i:s") . "<br>";
      do {
          if (file_exists("test.txt")) {
              echo "The file was found: " . date("d-m-Y h:i:s") . "<br>";
              echo "<a href='pdf/name.pdf'>Download</a>";
              break;
          }
      } while(true);
           } 
            ?>
            <h2>

            </h2>
        </div>
    </div>
</section>
</body>
</html>