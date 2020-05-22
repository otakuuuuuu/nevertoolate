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
    <!-- Page CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">   
    <link rel="stylesheet" href="css/style.css?v=20">
    <link rel="stylesheet" href="css/responsive.css">
    <style type="text/css">

    #autoBox
    {
      margin: 0px;
      padding: 0px;
      border: 1px solid #CCCCCC;
    }

    #autoBox li
    {
      clear: both;
      background-color: white;
      color: black;
      position: relative;
      top: 0px;
      left: 0px;
      line-height: 25px;
      text-align: left;
      overflow: hidden;
    }

    #autoBox li:hover
    {
      background-color: gray;
      color: yellow;
      cursor: pointer;
    }
    
    #menu
    {
       height:220px;
       padding: 0px;
    }
    
    #shabi:hover
    {
      background-color: gray;
      color: yellow;
      cursor: pointer;
    }
    
    * 
    {
      -webkit-box-sizing:border-box;
      -moz-box-sizing:border-box;
      box-sizing:border-box;
    }

    .sidebar {
      position:absolute;
      margin-top: 700px;
      width:25%;
      height:633px;
      top:520px;
      left:0px;
      overflow:hidden;
      border-right:1px solid rgba(0,0,0,0.25);
    }
    
    .pad2 {
      padding:20px;
    }

    .map {
      border:5px solid black;
      margin-top: 700px;
      position:absolute;
      left:25%;
      width:75%;
      height:633px;
      top:520px;
    }

    h1 {
      font-size:25px;
      margin:0;
      font:400;
      line-height: 20px;
      padding: 20px 2px;
    }

    a {
      color:#404040;
      text-decoration:none;
    }

    a:hover {
      color:#101010;
    }

    .heading {
      background:#fff;
      border-bottom:1px solid #eee;
      min-height:60px;
      line-height:60px;
      padding:0 10px;
      background-color: rgb(223, 238, 240);
      color: #fff;
    }

    .listings {
       height:100%;
       overflow:auto;
       padding-bottom:60px;
       weight:100%;
    }

    .listings .item {
       display:block;
       border-bottom:1px solid #eee;
       padding:10px;
       text-decoration:none;
    }

    .listings .item:last-child { border-bottom:none; }
    
    .listings .item .title {
       display:block;
       color:#00853e;
       font-weight:700;
     }

     .listings .item .title small { font-weight:400; }
     
     .listings .item.actives .title,
     
     .listings .item .title:hover { color:#8cc63f; }
     
     .listings .item.actives {
       background-color:#f8f8f8;
     }
        
     #result{
       height:100%;
       width:75%;          
     }
     
     #calculator_area{
       height:100%;
       width:75%;
     }
     
     #start{
       height:100%;
       width:75%;
     }
        
    #father{
       display:flex; 
       justify-content:center;
       height:100%;
       width:100%;
       margin-top:5%;
    }
</style>
    
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
                <h1>nutrition calculator</h1>
                <ol class="breadcrumb"> 
                     <li class="active" style=" font-size: 35px;">Enter the ingredients of the meals you ate today and get a free analysis of the nutritional content of your diet.</li> 
                </ol>
            <a class="theme_btn" href="#menu" style="margin-top: 50px;">Get Started</a>
            </div>       
        </div>
    </section>
    <!-- Breadcrumb Area -->
    
    <!-- How to Use -->
    <div id="menu" class="col-md-12">
        <br /><br /><br />
        <p class="col-md-12" style="line-height:10px;"><b>How to view nutritional content of your diet:</b></p>
        <p class="col-md-12" style="line-height:10px;"><b>Step 1:</b> Enter the ingredients of your <b>whole day’s</b> meals and click on “Add to List”.</p>
        <p class="col-md-12" style="line-height:10px;"><b>Step 2:</b> Click on the ingredient to enter quantity(servings*).</p>
        <p class="col-md-12" style="line-height:10px;"><b>Step 3:</b> Click the “Calculate” button.</p>          
    </div> 
    <!-- How to Use -->
    
    <!-- Nutrition Calculator -->
    <div class="input-group col-md-12" style="margin-top:0px positon:relative display:inline-block ">
        <img src="img/searchicon.png">
        <input type="text" autocomplete="off"style="z-index:80;"class="form-control" style="border: 1px solid #CCCCCC;"placeholder="Search for a food, a brand or an ingredient" aria-describedby="basic-addon1" id="stuSearch" name="stuSearch" />
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

<script src="js/ruler.js"></script>
<script src="static/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
var foodList=new Array();
$(function(){
    $(".input_clear").click(function(){  
    $(this).parent().find('input').val('');  
    $(this).hide();
    $("#autoBox").hide();  
});
$.ajaxSetup({cache:false});
$("#autoBox").hide(); 
$("#stuSearch").keyup(function(){ 
    $("#autoBox").html(""); 
    if($("#stuSearch").val().length>0) {
        $("input").parent().children(".input_clear").show();  
        document.getElementById("searchbox").style.display="inline";
        $.ajax({ 
          type:"post",
          url:"stuSearch.php",
          dataType:"json",
          data:{keywords:$("#stuSearch").val()},
          success:function(feedbackdata) {
              $("#autoBox").html(""); 
              $("#autoBox").show();
              for(i = 0;i < feedbackdata.length;i++) {
                  $("#autoBox").append("<li class='col-md-12'>"+feedbackdata[i]['Descrip']+"</li>");
              }
              $("#autoBox li").on("click",function(){
                  $("#stuSearch").val($(this).text());
                  $("#autoBox").hide();
              })
              $("#autoBox").append("<li style='text-align:right'>close</li>");
              $("#autoBox li:last").on("click",function(){
              $("#autoBox").hide();
              })
            },
        });
      }
    })
  })

function add(){
     if (document.getElementById("total")!=null) {
        totaldelete()
        }
        $.ajaxSetup({cache:false}) ;
        $.ajax({ 
            type:"post",
            url:"tableadd.php",
            dataType:"json",
            data:{keywords:$("#stuSearch").val()},
            success:function(feedbackdata) {
                console.log(feedbackdata);
                feedbackdata[0].quantity=1;
                foodList.push(feedbackdata);
                for(i = 0;i < feedbackdata.length;i++) {      
                    var countofid = $("#idcount").val();
                    var b = parseFloat(countofid)
                    var j = b; 
                    var listings = document.getElementById('listings');
                    var listing = listings.appendChild(document.createElement('div'));
                    listing.className = 'item ';
                    listing.id = j;
                    var link = listing.appendChild(document.createElement('a'));
                    link.className = 'title';
                    link.dataPosition = j;
                    $("#idcount").val(j + 1);
                    link.innerHTML = feedbackdata[i]['Descrip'];
                    var quality1 = listing.appendChild(document.createElement('p'));
                    quality1.innerHTML="Quantity: "+feedbackdata[i].quantity;
                    link.addEventListener('click', function(e) {
                        if (document.getElementById("appends")!=null) {
                            var parent=document.getElementById("tb");
                            var child=document.getElementById("appends");
                            parent.removeChild(child);
                            child=document.getElementById("appends1");
                            parent.removeChild(child);
                            }
                            // Update the currentFeature to the place associated with the clicked link
                            var clickedListing = foodList[this.dataPosition];
                            var quantity = 0;
                            if(!clickedListing[0].quantity){
                                quantity = 0;
                            }
                            else {
                                quantity = clickedListing[0].quantity;
                            }
                            x = "<table class='table table-bordered col-md-12' id='appends'><tr><td>Energy(Calories)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(1)'/>"
                            +"</td><td>"+clickedListing[0]['Energy_kcal']+ "</td></tr>"+"<tr><td>Protein(g)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(2)'/>"
                            +"</td><td>"+clickedListing[0]['Protein_g'] + "</td></tr>"+"<tr><td>Fat(g)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(3)'/>"
                            +"</td><td>"+clickedListing[0]['Fat_g'] + "</td></tr>"+"<tr><td>Carbohydrates(g)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(4)'/>"
                            +"</td><td>"+clickedListing[0]['Carb_g']+ "</td></tr>"+"<tr><td>Sugar(g)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(5)'/>"
                            +"</td><td>"+clickedListing[0]['Sugar_g']+ "</td></tr>"+"<tr><td>Fiber(g)"+"&nbsp;<img src='img/bookgreen.png' id='shabi' alt='' onclick='CheckValueDetail(6)'/>"
                            +"</td><td>"+clickedListing[0]['Fiber_g']+ "</td></tr><tr><td>Quantity(*serving)"+"</td><td>"+"<input type='text' id ='food' value='"+quantity+"'/>"+ "</td></tr>"
                            +"<tr><td>"+ "<button class='btn btn-info btn-search' id ='"+j+"' style='margin-left:3px' onclick='tabledelete("+j +")'>Delete</button>"+ "</td></tr></table>";
                            $("#tb").append(x);
                            var serving;
                            serving="<p id='appends1'>Serving size may vary according to ingredient. Click <a href='https://www.eatforhealth.gov.au/food-essentials/how-much-do-we-need-each-day/serve-sizes'>here</a> to understand serving size better.</p>";
                            $("#tb").append(serving);
                            $("#food").keyup(function(){  
                            if($("#food").val().length>0) {
                                var index =$("#food").val();
                                var nu = parseFloat(index)
                            if (!nu) {
                                alert("Please input a number")
                                $("#food").val()="1";          
                            }
                            else if(nu < 0.0) {
                                alert("Please input a positive number")
                                $("#food").val()="1";
                            }
                            else {
                                clickedListing[0].quantity = nu; 
                                quality1.innerHTML="Quantity: "+nu; 
                            }
                            }
                            })
                            // 3. Highlight listing in sidebar (and remove highlight for all other listings)
                            var activeItem = document.getElementsByClassName('actives');
                            if (activeItem[0]) {
                               activeItem[0].classList.remove('actives');
                            }
                            this.parentNode.classList.add('actives');
                          });
                       }
                       $("#calculator_area").hide();
                       $("#result").show();
                       $("#start").hide();
                     }
                 });
            }
            function count(){
                if (document.getElementById("deleteindex") != null) {
                    deletecount();
                }
                var Energy_kcal = 0.0;
                var Protein_g = 0.0;
                var Fat_g = 0.0;
                var Carb_g = 0.0;
                var Sugar_g = 0.0;
                var Fiber_g = 0.0;
                var VitA_mcg = 0.0;
                var VitC_mg = 0.0;
                var VitE_mg = 0.0;
                var Calcium_mg = 0.0;
                for(var i = 0,rows=foodList.length; i < rows; i++) {
                    var kcal = parseFloat(foodList[i][0]['Energy_kcal']);
                    var nu = parseFloat(foodList[i][0]['quantity']);
                    Energy_kcal = Energy_kcal + kcal*nu;
                    var count = parseFloat(foodList[i][0]['Protein_g']);
                    Protein_g = Protein_g + count*nu;
                    count = parseFloat(foodList[i][0]['Fat_g']);
                    Fat_g = Fat_g + count*nu;
                    count = parseFloat(foodList[i][0]['Carb_g']);
                    Carb_g = Carb_g+ count*nu;
                    count = parseFloat(foodList[i][0]['Sugar_g']);
                    Sugar_g = Sugar_g+ count*nu;
                    count = parseFloat(foodList[i][0]['Fiber_g']);
                    Fiber_g = Fiber_g + count*nu;
                }
                Energy_kcal = Energy_kcal.toFixed(2);
                        if (Energy_kcal == 0.00)
                        {Energy_kcal = "<0.01"}
                        if (Protein_g == 0) {Protein_g = 0}
                        else {
                        Protein_g = Protein_g.toFixed(2);
                        if (Protein_g == 0.00)
                            {Protein_g = "<0.01"}
                        }
                        if (Fat_g == 0) {Fat_g = 0}
                        else {
                        Fat_g = Fat_g.toFixed(2);
                        if (Fat_g == 0.00)
                            {Fat_g = "<0.01"}
                        }
                        if (Carb_g == 0) {Carb_g = 0}
                        else {
                        Carb_g = Carb_g.toFixed(2);
                        if (Carb_g == 0.00)
                            {Carb_g = "<0.01"}
                        }
                        if (Sugar_g == 0) {Sugar_g = 0}
                        else {
                        Sugar_g = Sugar_g.toFixed(2);
                        if (Sugar_g == 0.00)
                            {Sugar_g = "<0.01"}
                        }
                        if (Fiber_g == 0) {Fiber_g = 0}
                        else {
                        Fiber_g = Fiber_g.toFixed(2);
                        if (Fiber_g == 0.00)
                            {Fiber_g = "<0.01"}
                         }
                         var floatNumber = parseFloat(Energy_kcal); 
                         var eng = "";
                         var eng1 = "";
                         if(!floatNumber) {
                            eng="danger";
                            eng1 = "Insufficient";  
                         }
                         else {         
                         if(2000.00<Energy_kcal&&Energy_kcal<2600) {
                             eng="success";
                             eng1 = "Ideal"; 
                         } 
                         else if(1600.00<Energy_kcal&&Energy_kcal<2000.00) {
                              eng="warning";
                              eng1 = "Insufficient"; 
                         }
                         else if(2600.00<Energy_kcal&&Energy_kcal<3000.00){
                              eng="warning";
                              eng1 = "Excessive"; 
                         }
                         else if(1600.00>Energy_kcal){
                              eng="danger";
                              eng1 = "Insufficient"; 
                         }
                         else{
                              eng="danger";
                              eng1 = "Excessive"; 
                         }
                         }
                         floatNumber = parseFloat(Protein_g); 
                         var prot = "";
                         var prot1 = "";
                          if(!floatNumber){
                            prot="danger";
                            prot1 = "Insufficient";  
                         }
                         else{
                          if(45.00<Protein_g&&Protein_g<80.00 ){
                              prot="success";
                              prot1 = "Ideal"; 
                         } 
                         else if(35.00<Protein_g&&Protein_g<45.00){
                               prot="warning";
                               prot1 = "Insufficient"; 
                         }
                         else if(80.00<Protein_g&&Protein_g<150.00){
                               prot="warning";
                               prot1 = "Excessive"; 
                         }
                         else if(35.00>Protein_g){
                               prot="danger";
                               prot1 = "Insufficient"; 
                         }
                         else{
                               prot="danger";
                               prot1 = "Excessive";      
                         }
                         }
                         floatNumber = parseFloat(Fat_g); 
                         var fat = "";
                         var fat1 = "";
                          if(!floatNumber){
                            fat="danger";
                            fat1 = "Insufficient";
                         }
                         else{
                          if(70.00<Fat_g&&Fat_g<90.00 ){
                              fat="success";
                              fat1 = "Ideal";
                         } 
                         else if(30.00<Fat_g&&Fat_g<70.00){
                               fat="warning";
                               fat1 = "Insufficient";
                         }
                         else if(90.00<Fat_g&&Fat_g<130.00){
                               fat="warning";
                               fat1 = "Excessive";
                         }
                         else if(30.00>Fat_g){
                                fat="danger";
                               fat1 = "Insufficient"; 
                         }
                         else{
                               fat="danger";
                               fat1 = "Excessive";
                         }
                         }
                          floatNumber = parseFloat(Carb_g); 
                         var Carb = "";
                         var Carb1 = "";
                          if(!floatNumber){
                            Carb="danger";
                            Carb1 = "Insufficient";  
                         }
                         else{
                          if(260.00<Carb_g&&Carb_g<310.00 ){
                              Carb="success";
                              Carb1 = "Ideal"; 
                         } 
                         else if(210.00<Carb_g&&Carb_g<260.00){
                               Carb="warning";
                               Carb1 = "Insufficient"; 
                         }
                         else if(310.00<Carb_g&&Carb_g<360.00){
                               Carb="warning";
                               Carb1 = "Excessive";
                         }
                         else if(210.00>Carb_g){
                               Carb="danger";
                               Carb1 = "Insufficient";
                         }
                         else{
                               Carb="danger";
                               Carb1 = "Excessive";
                         }
                         } 
                           floatNumber = parseFloat(Sugar_g); 
                         var Sugar = "";
                         var Sugar1 = "";
                          if(!floatNumber){
                            Sugar="success";  
                            Sugar1 = "Ideal";
                         }
                         else{
                          if(0<=Sugar_g&&Sugar_g<40.00 ){
                              Sugar="success";
                              Sugar1 = "Ideal";
                         } 
                         else if(40.00<Sugar_g&&Sugar_g<80.00){
                               Sugar="warning";
                               Sugar1 = "Excessive";
                         }
                         else{
                               Sugar="danger";
                               Sugar1 = "Excessive";
                         }
                         } 
                          floatNumber = parseFloat(Fiber_g); 
                         var Fiber = "";
                         var Fiber1 = "";
                          if(!floatNumber){
                            Fiber="danger";  
                            Fiber1 = "Insufficient";
                         }
                         else{
                          if(25.00<Fiber_g&&Fiber_g<45.00 ){
                              Fiber="success";
                              Fiber1 = "Ideal";
                         } 
                         else if(10.00<Fiber_g&&Fiber_g<25.00){
                               Fiber="warning";
                               Fiber1 = "Insufficient";
                         }
                         else if(45.00<Fiber_g&&Fiber_g<600.00){
                               Fiber="warning";
                               Fiber1 = "Excessive";
                         }
                         else if(10.00>Fiber_g){
                               Fiber="danger";
                               Fiber1 = "Insufficient";
                         }
                         else{
                               Fiber="danger";
                               Fiber1 = "Excessive";
                         }
                    }  
                    document.getElementById("value").innerHTML=Energy_kcal;
                    var prec = Energy_kcal/3000;
                    prec = prec.toFixed(2);
                    prec = prec*100;
                    if(prec > 100) {
                        prec=100; 
                    }
                    var pre = prec+"%";
                    var cal="<div id='deleteindex'class='progress-bar bg-"+eng+" progress-bar-striped' style='width:" + pre+";'></div>";
                    $("#pro").append(cal);
                    
                    document.getElementById("standard").innerHTML=eng1;
                    document.getElementById("value1").innerHTML=Protein_g;
                    if(Protein_g=="<0.01") {
                        Protein_g=0;
                    }
                    var protein = Protein_g/150;
                    protein = protein.toFixed(2);
                    protein = protein*100;
                    if(protein > 100) {
                        protein=100; 
                    }
                    var protein1 = protein+"%";
                    var cal="<div id='deleteindex1' class='progress-bar bg-"+prot+" progress-bar-striped' style='width:" + protein1 +";'></div>";
                    $("#pro1").append(cal);
                    
                    document.getElementById("standard1").innerHTML=prot1;
                    document.getElementById("value2").innerHTML=Fat_g;
                    if(Fat_g=="<0.01") {
                        Fat_g=0;
                    }
                    var Fat = Fat_g/130;
                    Fat = Fat.toFixed(2);
                    Fat = Fat*100;
                    if(Fat > 100) {
                        Fat=100; 
                    }
                    var Fat1 = Fat+"%";
                    var cal="<div  id='deleteindex2' class='progress-bar bg-"+fat+" progress-bar-striped' style='width:" + Fat1 +";'></div>";
                    $("#pro2").append(cal);

                    document.getElementById("standard2").innerHTML=fat1;
                    document.getElementById("value3").innerHTML=Carb_g;
                    if(Carb_g=="<0.01"){
                        Carb_g=0;
                    }
                    var Carbg = Carb_g/360;
                    Carbg = Carbg.toFixed(2);
                    Carbg = Carbg*100;
                    if(Carbg > 100) {
                        Carbg=100; 
                    }
                    var Carbg1 = Carbg+"%";
                    var cal="<div id='deleteindex3' class='progress-bar bg-"+Carb+" progress-bar-striped' style='width:" + Carbg1 +";'></div>";
                    $("#pro3").append(cal);
   
                    document.getElementById("standard3").innerHTML=Carb1;
                    document.getElementById("value4").innerHTML=Sugar_g;
                    if(Sugar_g=="<0.01") {
                        Sugar_g=0;
                    }
                    var Sugarg = Sugar_g/80;
                    Sugarg = Sugarg.toFixed(2);
                    Sugarg = Sugarg*100;
                    if(Sugarg > 100) {
                        Sugarg=100; 
                    }
                    var Sugarg1 = Sugarg+"%";
                    var cal="<div id='deleteindex4' class='progress-bar bg-"+Sugar+" progress-bar-striped' style='width:" + Sugarg1 +";'></div>";
                    $("#pro4").append(cal);

                    document.getElementById("standard4").innerHTML=Sugar1;
                    document.getElementById("value5").innerHTML=Fiber_g;
                    if(Fiber_g=="<0.01"){
                        Fiber_g=0;
                    }
                    var Fiberg = Fiber_g/600;
                    Fiberg = Fiberg.toFixed(2);
                    Fiberg = Fiberg*100;
                    if(Fiberg > 100) {
                        Fiberg=100; 
                    }
                    var Fiberg1 = Fiberg+"%";
                    var cal="<div id='deleteindex5' class='progress-bar bg-"+Fiber+" progress-bar-striped' style='width:" + Fiberg1 +";'></div>";
                    $("#pro5").append(cal);
 
                    document.getElementById("standard5").innerHTML=Fiber1;
                    $("#result").hide();
                    $("#calculator_area").show();
                }
                function totaldelete(){
                    var parent=document.getElementById("tablebody");
                    var child=document.getElementById("total");
                    parent.removeChild(child);
                }
                function deletecount(){
                    var parent=document.getElementById("pro");
                    var child=document.getElementById("deleteindex");
                    parent.removeChild(child);
                    parent=document.getElementById("pro1");
                    child=document.getElementById("deleteindex1");
                    parent.removeChild(child);
                    var parent=document.getElementById("pro2");
                    var child=document.getElementById("deleteindex2");
                    parent.removeChild(child);
                    var parent=document.getElementById("pro3");
                    var child=document.getElementById("deleteindex3");
                    parent.removeChild(child);
                    var parent=document.getElementById("pro4");
                    var child=document.getElementById("deleteindex4");
                    parent.removeChild(child);
                    var parent=document.getElementById("pro5");
                    var child=document.getElementById("deleteindex5");
                    parent.removeChild(child);
                }
                function tabledelete(x){
                    var table = x;
                    var parent=document.getElementById("listings");
                    var child=document.getElementById(table);
                    parent.removeChild(child);
                    var clickedListing = foodList[x];
                        clickedListing[0]['Energy_kcal']="0";
                        clickedListing[0]['Protein_g'] ="0";
                        clickedListing[0]['Fat_g']="0";
                        clickedListing[0]['Carb_g']="0";
                        clickedListing[0]['Sugar_g']="0";
                        clickedListing[0]['Fiber_g']="0";
                        clickedListing[0].quantity="0";
                        if (document.getElementById("appends")!=null){
                            var parent=document.getElementById("tb");
                            var child=document.getElementById("appends");
                            parent.removeChild(child);
                            child=document.getElementById("appends1");
                            parent.removeChild(child);
                        }
                }
                function clearList(){
                    foodList=new Array();
                    $("#idcount").val("0");
                    $("#calculator_area").hide();
                    $("#result").hide();
                    $("#start").show();
                    if (document.getElementById("appends")!=null){
                            var parent=document.getElementById("tb");
                            var child=document.getElementById("appends");
                            parent.removeChild(child);
                            child=document.getElementById("appends1");
                            parent.removeChild(child);
                        }
                   var re = document.getElementsByClassName('item'); 
                for (var i = re.length-1;i >=0;i--) { 
                    re[i].remove(); 
                    console.log(i); 
                }
            }
            function detail() {
                $("#result").show();
                $("#calculator_area").hide();
            }
            function clearList1(){
                foodList=new Array();
                $("#idcount").val("0");
                $("#result").hide();
                $("#calculator_area").hide();
                $("#start").show();
                if (document.getElementById("appends")!=null){
                        var parent=document.getElementById("tb");
                        var child=document.getElementById("appends");
                        parent.removeChild(child);
                        child=document.getElementById("appends1");
                        parent.removeChild(child);
                    }
                    var re = document.getElementsByClassName('item'); 
                    for (var i = re.length-1;i >=0;i--) { 
                        re[i].remove(); 
                        console.log(i); 
                        }
                }

                function CheckValueDetail(e){
                    if(e==1){
                    alert("Energy is not a nutrient but is required in the body for metabolic processes, physiological functions, muscular activity, heat production, growth and synthesis of new tissues. It is released from food components by oxidation. The main sources of energy are carbohydrates, proteins, fats and, to a lesser degree, alcohol.")
                    }
                    else if (e==2){
                           alert("Protein occurs in all living cells and has both functional and structural properties. Amino acids, assembled in long chains, are the building blocks of protein. Of the 20 amino acids found in proteins, some can be made by the body while others are essential in the diet. Amino acids are used for the synthesis of body proteins and other metabolites and can also be used as a source of dietary energy. The proteins of the body are continually being broken down and resynthesised in a process called protein turnover.")
                    }
                        else if (e==3){
                          alert("There are three major types of naturally-occurring fatty acids - saturated, cis-monounsaturated and cis-polyunsaturated. A fourth form, the trans fatty acids, are produced by partial hydrogenation of polyunsaturated oils in food processing and they also occur naturally in ruminant animal foods. Saturated fats are found mainly in animal-based foods and polyunsaturates and monounsaturates predominate in plant-based foods.")
                    }
                        else if (e==4){
                         alert("The primary role of dietary carbohydrate is the provision of energy to cells, particularly the brain that requires glucose for its metabolism. Other nutrients (eg fat , protein and alcohol) can provide energy but there are good reasons to limit the proportion of energy provided by these nutrients as discussed in the chronic disease section. Carbohydrate is also necessary to avoid ketoacidosis.")
                    }
                        else if (e==5){
                            alert("Eating sugar gives your brain a huge surge of a feel-good chemical called dopamine, which explains why you’re more likely to crave a candy bar at 3 p.m. than an apple or a carrot. Because whole foods like fruits and veggies don’t cause the brain to release as much dopamine, your brain starts to need more and more sugar to get that same feeling of pleasure. This causes those “gotta-have-it” feelings for your after-dinner ice cream that are so hard to tame.")
                    }
                        else if (e==6){
                            alert("Fiber is a type of carbohydrate that the body can't digest. Though most carbohydrates are broken down into sugar molecules, fiber cannot be broken down into sugar molecules, and instead it passes through the body undigested. Fiber helps regulate the body's use of sugars, helping to keep hunger and blood sugar in check. Adequate dietary fibre is essential for proper functioning of the gut and has also been related to risk reduction for a number of chronic diseases including heart disease, certain cancers and diabetes.")
                    }
}

</script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
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
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <!--Contact Form-->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</html>