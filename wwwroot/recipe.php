<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css?v=2">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css?v=27">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/recipe.css">

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
                <h1>recipes</h1>
                <ol class="breadcrumb"> 
                     <li class="active" style=" font-size: 35px;">Select nutrients that you need to eat and we’ll recommend some tasty recipes.</li> 
                </ol>
            <a class="theme_btn" href="#accordion" style="margin-top: 50px;">Get Started</a>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area -->
    
    <!-- Recipe Search Area -->    
    <div id="accordion">
    <div class="container-fluid bgr inside api demo-search">
        <div class="container" id="container">
            <div class="row">
              	<div class="col-md-12 col-md-offset-1">            
                    <div class="col-md-12">                      
                        <div class="row">
                            <div class="col-md-12 loading-area">
                                <div class="loader"></div>
                            </div>
                            <div class="col-md-12 result-area" id="resultarea"></div>
                          	<div class="col-md-12 recipe-area" id="recipearea"></div>
                            <div class="col-md-12 content-area"> <h2>Choose one or more methods for searching</h2>                             
                              <div class="card">
                                <div class="card-header" id="heading3">
                                  <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse3" id="coll3"aria-expanded="false" aria-controls="collapse3">
                                    <button class="btn btn-link">Select the nutrients you need to eat</button>
                                    <span class="glyphicon glyphicon-chevron-down"><img src="img/arrowdown.png"/></span>
                                    <div class="inp"></div>
                                  </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#coll3">
                                  <div class="card-body">
                            		<h3 data-line="3" id="goUp"class="col-md-11">Select the nutrients you need to eat</h3>
                                    <span data-line="3" class="glyphicon glyphicon-chevron-up col-md-1"><img style="float:right"src="img/arrowup.png"/></span>
                                  	<div class="desc">
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input" id="checkbox1"value="&maxProtein=50&maxFat=70&maxCarbs=260">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">Balanced</span>
                                          <span class="mdesc">Protein/Fat/Carb values in 15/35/50 ratio</span>
                                        </label>           
                            		  </div>        
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input" id="checkbox2" value="&maxProtein=70">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">High-Protein</span>
                                          <span class="mdesc">More than 50% of total calories from proteins</span>
                                        </label>           
                            		  </div>		
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input" id="checkbox3"value="&maxCarbs=210">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">Low-Carb</span>
                                          <span class="mdesc">Less than 20% of total calories from carbs</span>
                                        </label>           
                            		  </div>			
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input" id="checkbox4"value="&maxFat=30">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">Low-Fat</span>
                                          <span class="mdesc">Less than 15% of total calories from fat</span>
                                        </label>           
                                      </div>	
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input"  id="checkbox5"value="&minFiber=5">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">High-Fiber</span>
                                          <span class="mdesc">More than 5g fiber per serving</span>
                                        </label>           
                            		  </div>  		
                                      <div class="row">
                                        <label class="checkbox-button">
                                          <input type="checkbox" class="diet checkbox-button__input" id="checkbox6"value="&maxSodium=140">
                                          <span class="checkbox-button__control"></span>
                                          <span class="checkbox-button__label">Low-Sodium</span>
                                          <span class="mdesc">Less than 140mg Na per serving</span>
                                        </label>           
                            		      </div>		
                            		  </div>
                                  </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="heading1">
                                  <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse1" id="coll1"aria-expanded="true" aria-controls="collapse1">
                                    <button class="btn btn-link">Select ingredients</button>
                                    <span class="glyphicon glyphicon-chevron-down"><img src="img/arrowdown.png"/></span>
                                    <div class="inp"></div>
                                  </h5>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#coll1">
                                  <div class="card-body">
                                    <h3 data-line="1" id="goUp1"class="col-md-11">Select ingredients</h3>
                                    <div data-line="1" class="glyphicon glyphicon-chevron-up col-md-1"><img style="float:right" src="img/arrowup.png"/></div>
                                  	<div class="desc col-md-12">Enter a what you have eaten, like <span>"coffee and croissant"</span> or <span>"chicken enchilada"</span> to see how it works. We have accurate data tens of thousands of foods, including international dishes.</div>
                                    <input type="text" class="search q"/>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="search-btn-line">
                              	  <a class="btn btn-primary result_recipe">Search</a>
                              </div>  
                            </div>
                          	</div>
						</div>
                    </div>            
                </div>            
            </div>                
        </div>
    </div>
    <!-- Recipe Search Area -->
    
    <!-- Next Step Button -->
    <div class="search-btn-line">
  	  <a class="btn btn-primary result_recipe" href="map.php">STEP 3: Let’s find the nearest place to buy organic ingredients</a>
    </div>
    <!-- Next Step Button -->

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
    <script src="static/jquery-3.2.1.min.js"></script>
    <script src="js/recipe.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="js/main.js?v=5"></script>
    
</body>

</html>