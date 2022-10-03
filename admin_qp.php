<style>
    h4{
        text-align: center;
    }
    form{
        text-align: center;
    }
    p{
        text-align: center;
    }

</style>
<h4>Upload Previous question papers </h4> 
<form method="POST" action="insert.php" enctype="multipart/form-data">
    <input type="file" name="file" accept=".pdf">
    <input type="submit" name="upload">

</form>
<?php 
include_once "template/adminnav.php";

$files=scandir("uploads");
for($a=2;$a<count($files);$a++){


    ?>
    <p>
        <?php echo $files[$a]; ?> 
        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files [$a];?>" >
        Download
        </a>  
        <a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color:red;">
        Delete
    </a>
    </p>
    <?php

}
?>