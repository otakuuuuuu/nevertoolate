<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">   
    <link rel="stylesheet" href="css/style.css?v=27">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/calculator.css?v=2">
 
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
                    <li class="nav-item"><a class="nav-link" href="recipe.php">Recipe</a></li>
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
                <h1>nutrition calculator</h1>
                <ol class="breadcrumb"> 
                     <li class="active" style=" font-size: 35px;">Enter the ingredients of the meals you ate today and get a free analysis of the nutritional content of your diet.</li> 
                </ol>
            <a class="theme_btn" href="#menu" style="margin-top: 50px;">Get Started</a>
            </div>       
        </div>
    </section>
    <!-- Breadcrumb Area -->
    
    <!-- Calculator Instructions Area -->
    <section class="service_area bg_color sec_pad" ><div class="container" >
        <div id="menu"></div>
        <div class="section_tilte text-center">
        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Calculator Instructions</h2></div>
        <div class="row">            
            <div class="col-lg-4 col-md-6"><div class="service_item wow fadeInUp" data-wow-delay="0.3s">
                <i class="flaticon-search"></i>
                <div class="br_bottom"></div><h6>Step 1</h6>
                <p>Enter the ingredients of your <b>whole day’s</b> meals and click on “Add to List”.</p></div></div>
            <div class="col-lg-4 col-md-6"><div class="service_item wow fadeInUp" data-wow-delay="0.5s">
                <i class="flaticon-enter"></i>
                <div class="br_bottom"></div><h6>Step 2</h6>
                <p>Click on the ingredient to enter quantity(servings*).</p></div></div>
            <div class="col-lg-4 col-md-6"><div class="service_item wow fadeInUp" data-wow-delay="0.6s">
                <i class="flaticon-heart"></i>
                <div class="br_bottom"></div><h6>Step 3</h6>
                <p>Click the “Calculate” button.</p></div></div>
            </div>
        </div>
    </section>
    <!-- Calculator Instructions Area -->
    
    <!-- Nutrition Calculator -->
    <div class="input-group col-md-12" style="margin-top:0px positon:relative display:inline-block ">
        <img src="img/searchicon.png">
        <input type="text" autocomplete="off"style="z-index:80;"class="form-control" style="border: 1px solid #CCCCCC;"placeholder='Search for a food, a brand or an ingredient. Use comma "," to seperate your keywords.' aria-describedby="basic-addon1" id="stuSearch" name="stuSearch" />
        <div style="position:absolute;right:150px;top:2px;cursor:pointer;display:none;z-index:100;" class="input_clear">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="canc" style="font-size:30px;"  >
					×
                    </button></div>
                    <span class="input-group-btn">
                        <button id="searchbox"class="btn btn-info btn-search" style="margin-left:3px" onclick="add()">Add to List</button>
                        <br>
                        </span></div>
                        <ul id="autoBox" class="col-md-12"></ul>
                        <input style="display:none;" id="idcount" type="text" value="0"></input>
                        <div class="row" id="father">
                        <div class="row" id="start" ></div>
                        <div class="row" id="result" style="display:none;">
                            <div class="listings col-md-3" style="inset -1px 1px 1px #444;padding-top:10px;" id="listings">
                        </div>
                        <div class="col-md-6" style="background-color: #dedef8;"id="tb"></div>
                        <div class="col-md-3" style="text-align:center;"> 
                           <div class="col-md-12"> 
                              <button class="btn btn-info btn-search" style="text-align:center; margin-top:50%;" onclick="count()">Calculate</button> </div>
                           <div class="col-md-12"> 
                              <button class="btn btn-info btn-search" style="text-align:center; margin-top:50%;" onclick="clearList()">Clear List</button>
                           </div>
                        </div>
                    </div>
                    <div class="row" id="calculator_area" style="display:none;">
                        <div class="col-md-9" style="inset -1px 1px 1px #444;"id="tbs">
                              <div class="row col-md-12" style="height:10%;"> 
                                  <p class="col-md-12">Energy(Calories)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(1)"/></p>
                                <div class="progress col-md-8" id="pro"></div>
                                  <div class="col-md-3 text-center"> <p id="value" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards" ><p id="standard" style="text-align:center; color:black;"></p> </div>
                                 </div>
                              <div class="row col-md-12"style="height:10%"> 
                                  <p class="col-md-12">Protein(g)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(2)"/></p>
                                  <div class="progress col-md-8" id="pro1"></div>
                                  <div class="col-md-3 text-center"> <p id="value1" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards1"><p id="standard1" style="text-align:center; color:black;"></p> </div>
                                 </div>
                              <div class="row col-md-12"style="height:10%"> 
                                  <p class="col-md-12">Fat(g)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(3)"/></p>
                                  <div class="progress col-md-8" id="pro2"></div>
                                  <div class="col-md-3 text-center"> <p id="value2" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards2" ><p id="standard2" style="text-align:center; color:black;"></p> </div>
                                 </div>
                              <div class="row col-md-12"style="height:10%"> 
                                  <p class="col-md-12">Carbohydrates(g)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(4)"/></p>
                                  <div class="progress col-md-8" id="pro3"></div>
                                  <div class="col-md-3 text-center"> <p id="value3" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards3"><p id="standard3" style="text-align:center; color:black;"></p> </div>
                                 </div>
                              <div class="row col-md-12"style="height:10%"> 
                                  <p class="col-md-12">Sugar(g)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(5)"/></p>
                                  <div class="progress col-md-8" id="pro4"></div>
                                  <div class="col-md-3 text-center"> <p id="value4" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards4" ><p id="standard4" style="text-align:center; color:black;"></p> </div>
                                 </div>
                              <div class="row col-md-12"style="height:10%"> 
                                  <p class="col-md-12">Fiber(g)&nbsp;<img src="img/bookgreen.png" id="shabi" alt="" onclick="CheckValueDetail(6)"/></p>
                                  <div class="progress col-md-8" id="pro5"></div>
                                  <div class="col-md-3 text-center"> <p id="value5" ></p> </div>
                                  <div class="col-md-1 text-center" id="standards5"><p id="standard5" style="text-align:center; color:black;"></p> </div>
                                 </div>
                             </div>
                             <div class="col-md-3" style="text-align:center;"> 
                                 <div class="col-md-12"> 
                                  <button class="btn btn-info btn-search" style="text-align:center; margin-top:50%;" onclick="detail()">Detail View</button> </div>
                                  <div class="col-md-12"> 
                                  <button class="btn btn-info btn-search" style="text-align:center; margin-top:50%;" onclick="clearList1()">Clear List</button>
                                  </div>
                             </div>    
                         </div>
    </div>
    <!-- Nutrition Calculator -->
 
    <!-- Next Step Button -->
    <div class="search-btn-line">
  	  <a class="btn btn-primary result_recipe" href="recipe.php">STEP 2: WHAT TO EAT INSTEAD?</a>
    </div>
    <p class="col-md-12" style="line-height:10px;"><center>When you proceed to STEP 2, select the nutrients based on the above results.</center></p>
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
    <script src="js/calculator.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
     <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    
    <script src="js/main.js?v=5"></script>
</body>

</html>