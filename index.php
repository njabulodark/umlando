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
                    <li><a href="">HOME</a></li>
                    <li><a href="">University</a></li>
                    <li><a href="">Collage</a></li>
                    <li><a href="">Pic to PDF</a></li>
                    <li><a href="">Edit PDF</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <section class="header">
        <div class="text-box">
            <h1>All South African highest institution of learning</h1>
            <p>Download prospectus, do online applications,
                visit their websites and also find all useful information that
                 you need about every public highest institution of learning in South Africa.</p>
        </div>
        
    </section>

    <section class="universities">
    <div class="university">

        <h1>University</h1>
        <div class="row">
            <div class="course-col">
                <h3>Cape Peninsula University of Technology (CPUT)</h3>
                <p>Website: <a href="https://www.cput.ac.za/" target="_blank">cput.ac.za</a></p>
                <p>Online application: <a href="https://enroll.cut.ac.za/pls/prodi41/w99pkg.mi_login" target="_blank">click here</a></p>
				<p>Application Fee: R100</p>
				<p style="color:#00d500">Applications: OPEN</p>
				<p>Open/Closing Date: 31 August 2022</p>
				<p>Contact: 021 959 6767</p>
				<p>Email: <a href="mailto:info@cput.ac.za">info@cput.ac.za</a></p>
				<p>Location: Western Cape, Cape Town</p>
            </div>
            <div class="course-col">
            <h3>Durban University of Technology (DUT)</h3>
				<p>Application form NOT available</p>
				<p>Website: <a href="more-info/durban-university-of-technology.html" target="_blank"> dut.ac.za</a></p>
				<p>Online application: <a href="https://mercury.dut.ac.za/pls/prodi41/w03pkg.call_dyn_val" target="_blank">click here</a></p>
				<p>Application Fee: R220</p>
				<p style="color:#00d500">Applications: OPEN</p>
				<p>Open/Closing Date: September 2022</p>
				<p>Contact: 031 373 2000</p>
				<p>Email: <a href="mailto:info@dut.ac.za">info@dut.ac.za</a></p>
				<p>Location: KwaZulu Natal, Durban &amp; Pietermaritzburg</p>
            </div>
            <div class="course-col">
            <h3>University of Johannesburg (UJ)</h3>
				<p><a href="forms/UJ-2022-Application-Form.pdf" target="_blank">Click here to download 2021/22 Application form</a></p>
				<p>Website: <a href="https://www.uj.ac.za" target="_blank">uj.ac.za</a></p>
				<p>Online application: <a href="https://apply.online.uj.ac.za/Start-Now/Apply-Now" target="_blank">click here</a></p>
				<p>Application Fee: R200, Online: Free</p>
				<p style="color:#00d500">Applications: OPEN</p>
				<p>Open/Closing Date: 30 September 2022</p>
				<p>Contact: 011 559 3129</p>
				<p>Email: <a href="mailto:mylife@uj.ac.za">mylife@uj.ac.za</a></p>
				<p>Location: Gauteng, Johannesburg</p>
            </div>
        </div>
        <a href="" class="hero-btn">Click here for more</a>
        <h1 class="space"></h1>
    </div>
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