<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">

    <link rel="stylesheet" href="vendors/animation/animate.css">
    <!-- yemian CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    
    <link rel="stylesheet" href="css/style.css?v=16">
    <link rel="stylesheet" href="css/responsive.css">
    <title>never too late</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="header">
        <a href="index.php"><img src="img/logohealth.png" alt=""></a>
        <div class="container">
            
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto menu">
                    
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="calculator.php">Nutrition Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="recipe.php">recipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="map.php">Map</a></li>
                </ul>
    
            </div>
        </div>
    </nav>
    
    <!--breadcrumb area-->
    <section class="breadcrumb_area parallax_effect"  style="background: url(img/disclaimer.jpg) no-repeat;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Need help?</h1>
                <ol class="breadcrumb"> 
                     <li class="active" style=" font-size: 35px;">Fill out the form and we'll get back to you soon or contact us directly.</li> 
                </ol>
            <a class="theme_btn" href="#accordion" style="margin-top: 50px;">Get Started</a>
            </div>
            
        </div>
    </section>
<!--breadcrumb area-->


<!--get in touch area-->
<section class="get_touch_area bg_color">
    <div class="container">
        <div class="row get_info">
            <div class="col-lg-4 col-md-6"><div class="media get_info_item"><div class="round_icon">
                <i class="flaticon-vibration"></i></div><div class="media-body">
                    <p><a href="tel:0450857123">+061 (04) 5085 7123</a></p></div></div></div>
            <div class="col-lg-4 col-md-6"><div class="media get_info_item"><div class="round_icon">
                <i class="flaticon-home"></i></div><div class="media-body">
                    <p>900 Dandenong Rd, Caulfield East, VIC 3145, Australia</p></div></div></div>
            <div class="col-lg-4 col-md-6"><div class="media get_info_item"><div class="round_icon">
                <i class="flaticon-headset"></i></div><div class="media-body">
                    <p><a href="mailto:healthbeyond@gmail.com">healthbeyond@gmail.com</a>
                        </p></div></div></div></div></div>
</section>

<!--get in touch area-->

<!--Contact area-->
<section class="contact_area"><div class="container">
    <div class="section_tilte">
        <h3 class="comment_title">Leave a Message</h3></div>
        
        <form action="contact_process.php" id="contactForm" class="row contact_form">
            <div class="col-lg-4 col-md-6"><div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="Name"></div></div>
            <div class="col-lg-4 col-md-6"><div class="form-group">
                <input class="form-control" type="email" id="email" name="email" placeholder="Email"></div></div>
            <div class="col-lg-4 col-md-12"><div class="form-group">
                <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject"></div></div>
            <div class="col-lg-12"><div class="form-group">
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></div></div>
                
            <div class="col-lg-12 text-right"><div class="form-group">
                <button type="submit" class="theme_btn">Send Message</button></div></div></form>
            <div id="success">Your message succesfully sent!</div>
            <div id="error">Opps! There is something wrong. Please try again</div>
        </div>
</section>

<!--Contact area-->

    <footer class="footer_area">

        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <p>Copyright © 2020 All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-7 col-md-6 text-right">
                        <ul class="list-unstyled f_menu">
                            <li><a href="calculator.php">Nutrition Calculator</a></li>
                            <li><a href="recipe.php">Recipes</a></li>
                            <li><a href="map.php">Map</a></li>
                            <li><a href="disclaimer.php">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer_area-->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.parallax-scroll.js"></script>
<script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/slick/slick.min.js"></script>
<script src="js/parallaxie.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script>
<script src="vendors/counterup/jquery.waypoints.min.js"></script>
<script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>

<!--Contact Form-->
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/main.js"></script></body></html>