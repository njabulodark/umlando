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
<section class="nav">
    <nav>
        <div class="logo" id="logo">
            <h1>
                <a href="index.php">University Guardian</a>
            </h1>
        </div>
        <div class="nave-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li id="active"><a href="index.php">HOME</a></li>
                <li><a href="university.php">University</a></li>
                <li><a href="">Collage</a></li>
                <li><a href="">Pic to PDF</a></li>
                <li><a href="">Edit PDF</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>

<section class="image2pdf">
    <div class="tool">
        <div class="tool_header">
            <h1>Convert Image To PDF</h1>
            <p>The best I can do with our current skills, not really im just lazy</p>
            <p><?PHP
                echo shell_exec("python test.py 'hello'");
            ?></p>

            <form action="upload.php" method="post" enctype="multipart/form-data">
              Select image to upload:
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
    </div>
</section>

<section class="footers">
    <div id="pic"></div>
    <footer>
        <div class="list">
            <p id="founder">Contact details of the creators</p>
            <ul>
                <li id="names"><b>NA KHUMALO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
            <ul>
                <li id="names"><b>NS MZOBE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>T SIBEKO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>BN HLOPHE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>MI PHIRI  <b>    </b></b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
    
</section>
<script>

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-300px";
}
</script>
</body>
</html>
