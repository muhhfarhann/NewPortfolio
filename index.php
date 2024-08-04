<?php 
require 'functions.php';
$alert = false;

if (isset($_POST["submit"])) {

    if (isset($_POST["message"]) && strlen($_POST["message"]) === 26) {
        echo $alert = true;
    } elseif (isset($_POST["message"]) && insert($_POST) > 0) {
        echo "
        <script>
            alert('Success!');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Failed!');
        </script>
        ";
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/img/logo/logo.png" type="image/x-icon">
    <title>My Portfolio</title>
    <!-- MyCss -->
    <link rel="stylesheet" href="Css/style.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Data Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <!-- data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000" -->
    <!-- Navbar Start -->
        <div class="navbar" id="navbar">
            
            <div class="navbar-nav">
                <li><a href="#hero">Home</i></a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#certif">Certificate</a></li>
                <li><a href="#contact">Contact</a></li>
            </div>
            
            <div class="navbar-extra">
                <li class="list"><a href="" id="menu-button"><i data-feather="menu"></i></a></li>
            </div>
        </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
        <section class="hero" id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-f">
                        <img src="Assets/img/mee.png" alt="" width="250">
                    </div>
                    <div class="col">
                        <h1>HELLO!</h1>
                        <h4>So I'm <span> Farhan </span>, I'm Developer based in Jakarta.</h4>
                    </div>
                </div>
                <div class="row-2">
                    <div class="col-1">
                        <h1>Tech Stack</h1>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="Assets/img/html.png" alt="" width="50px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/css.png" alt="" width="80px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/b.png" alt="" width="70px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/js.png" alt="" width="70px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/php.png" alt="" width="150px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/laravel.png" alt="" width="150px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/py.png" alt="" width="50px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/java.png" alt="" width="150px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/my.png" alt="" width="100px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/w.png" alt="" width="80px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/git.png" alt="" width="80px">
                        </div>
                        <div class="card">
                            <img src="Assets/img/f.png" alt="" width="80px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Hero Start -->

    <!-- Service Start -->
    <section class="service" id="service">
        <div class="container">
            <div class="row">
                <h1>Service <span>&raquo;</span></h1>
            </div>
        </div>
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Assets/img/logo/web.png" alt="" width="50">
                    <p>Website Development</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/engineer.png" alt="" width="50">
                    <p>Website Engineer</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/front.png" alt="" width="40">
                    <p>FrontEnd Developer</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/back.png" alt="" width="40">
                    <p>BackEnd Developer</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/sql.png" alt="" width="50">
                    <p>Sql Developer</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/db.png" alt="" width="50">
                    <p>Database Engineer</p>
                </div>
                <div class="carousel-item">
                    <img src="Assets/img/logo/ui.png" alt="" width="40">
                    <p>Design</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Projects Start -->
    <section class="projects" id="projects">
        <div class="title">
            <h1>Website-Sample</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>PBL.</h1>
                    <p>(Project best learning)</p>
                </div>
                <div class="col">
                    <h4>This is some project in my college.</h4>
                    <a href="">VIEW PROJECT <span class="icon-container"><i data-feather="corner-right-down"></i></span></a>
                </div>
            </div>
            <div class="row-2">
                <div class="row">
                    <h2>E-Commerce</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="Assets/img/U-W.png" alt="" width="500">
                        </div>
                        <div class="card-1">
                            <img src="Assets/img/U.png" alt="" width="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-2">
                <div class="row">
                    <h2>Expert-System</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="Assets/img/Sistem.png" alt="" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2">
            <div class="row">
                <div class="col">
                    <h1>Course.</h1>
                    <p>(Bootcamp Project)</p>
                </div>
                <div class="col">
                    <h4>This is some projects.</h4>
                    <a href="">VIEW PROJECT<i data-feather="corner-right-down"></i></a>
                </div>
            </div>
            <div class="row-2">
                <div class="row">
                    <h1>E-Commerce</h1>
                </div>
                <div class="row-2">
                    <div class="col">
                        <div class="card">
                            <img src="Assets/img/cloth-2.png" alt="" width="500">
                        </div>
                        <div class="card-1">
                            <img src="Assets/img/cloth-w.png" alt="" width="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects End -->

    <!-- Certificate Start -->
     <section class="certif" id="certif">
        <div class="container">
            <div class="row">
                <h1>Certificate</h1>
            </div>
            <div class="carousel">
                <button class="carousel-btn left">&lt;</button>
                <div class="carousel-items">
                    <div class="item">
                        <img src="Assets/img/C/zahir.png" alt="">
                        <div class="col">
                            <h2>Zahir Certified Basis Data</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="Assets/img/C/btcmp2.png" alt="">
                        <div class="col">
                            <h2>Software Development</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="Assets/img/C/btcmp.png" alt="">
                        <div class="col">
                            <h2>Software Development</h2>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>
                <button class="carousel-btn right">&gt;</button>
            </div>
        </div>
     </section>
    <!-- Certificate End -->

    <!-- Contact Start-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Muhammad Farhan</h1>
                </div>
                <div class="col">
                    <img src="Assets/img/pin.png" alt="" width="40">
                    <p>Jakarta, Indonesia.</p>
                </div>
                <div class="col">
                    <img src="Assets/img/wa.png" alt="" width="40">
                    <p class="whatsapp">+6281010060268</p>
                </div>
                <div class="col">
                    <img src="Assets/img/g.png" alt="" width="40">
                    <p>mfarhan5224@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <form action="" method="post">
                    <label for="contactForm">
                        Drop Your Message here!
                    </label>
                    <textarea name="message" id="message" cols="50" rows="10" class="rounded">Tulis pesan anda disini...</textarea>
                    <button type="submit" name="submit" class="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="copy-item">
                <p><span>&copy; 2024</span> Muhammad Farhan. All rights reserved.</p>
            </div>
            <div class="copy-logo">
                <img src="Assets/img/ins.png" alt="">
                <p class="p">@muuhfarhann</p>
            </div>
        </div>
    </section>
    <!-- Contact End-->

    <!-- alert start -->
    <div class="alert <?php if($alert) echo 'visible' ; ?> ">
        <div class="alert-message">
            <i data-feather="alert-triangle"></i>
            <i data-feather="x-octagon" id="x"></i>
            <p>Masukan Pesan Terlebih Dahulu!</p>
        </div>
    </div>
    <!-- alert end -->

<!-- Data Aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Feather Icons -->
<script>
    feather.replace();
</script>
<!-- MyJavascript -->
<script src="Js/script.js"></script>
</body>
</html>