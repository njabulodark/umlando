<?php
echo '<section class="nav">
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
            <li><a href="college.php">College</a></li>
            <li><a href="career.php">Career Guidance</a></li>
            <li><a href="img2py.php">Pic to PDF</a></li>
            <li><a href="">G12 Exam Papers</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="addCareer.php">ADMIN</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
</section>';
?>