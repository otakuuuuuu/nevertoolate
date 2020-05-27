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
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/slick/slick-theme.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css?v=27">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
    <link rel="stylesheet" href="css/map.css">
    
    <title>never too late</title>
    
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg" id="header">
        <div class="container">
         <a href="index.php"><img src="img/logohealth.png" alt=""></a>
            
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
    <!-- Navigation Bar -->
    
    <!-- Breadcrumb Area -->
    <section class="breadcrumb_area parallax_effect"  style="background: url(img/slider_img2.jpg) no-repeat;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Map</h1>
                <ol class="breadcrumb"> 
                  <li class="active" style=" font-size: 35px;">Enter your location to locate nearest dietitians, farmers markets and health food stores.</li> 
                </ol>
                  <a class="theme_btn" href="#mp" style="margin-top: 50px;">Get Started</a>
            </div>
        </div>
        <div id="mp"></div>
    </section>
    <!-- Breadcrumb Area -->

    <!-- Map Area -->
    <div class="row col-md-12" id="mp">
      <div class='sidebar col-md-3'>
        <div class='heading'>
          <div class="dropdown" id="mapaa"><img src="img/filter.png"> &nbsp
          <button type="button" class="btn btn-primary dropdown-toggle" id="drop" data-toggle="dropdown">Category</button>
          
              <div class="dropdown-menu">
                  <a class="dropdown-item" id="location1">Dietitian</a>
                  <a class="dropdown-item" id="location2">Farmers Market</a>
                  <a class="dropdown-item" id="location3">Health Food Store</a>
                  <a class="dropdown-item" id="location">Show All</a>
              </div>
          </div>
        </div>
        <div id='listings' class='listings'></div>
      </div>
      <div id='map' class='map col-md-9'></div>
    </div>
    <!-- Map Area -->

    <!-- Footer Area -->
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
    <!-- Footer Area -->
    
    <!-- JavaScript -->
    <script>
      <?php include 'Dietitian.php';include 'Farmers.php';include 'HealthFood.php';?>
      var place1 = <?php echo($Dietitian);?>;
      var place2 = <?php echo($Farmers);?>;
      var place3= <?php echo($HealthFood);?>;
    </script>
    <script src="js/map.js"></script>  
    <script src="static/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>   
    <script src="js/main.js?v=5"></script>
    
</body>

</html>