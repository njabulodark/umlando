<?php

 //getting uploaded file
$file=$_FILES["file"];


//uploading in uploads folder
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);

//redirecting back
header("Location:".$_SERVER["HTTP_REFERER"]);
