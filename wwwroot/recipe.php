<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css?v=2">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css"> 
    <link rel="stylesheet" href="css/style.css?v=22">
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
    
    #steprecipe{
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack:justify ;
      justify-content: space-between;
    }
    
    #goUp{
      cursor: pointer;
    }
    
    #goUp1{
      cursor: pointer;
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
                <h1>recipes</h1>
                <ol class="breadcrumb"> 
                     <li class="active" style=" font-size: 35px;">Select nutrients that you need to eat and we’ll recommend some tasty recipes.</li> 
                </ol>
            <a class="theme_btn" href="#accordion" style="margin-top: 50px;">Get Started</a>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area -->
    
    <!-- Search Area -->
    <div id="accordion">
      <div class="container-fluid bgr inside api demo-search">
        <div class="container" id="container">
            <div class="row">
              	<div class="col-md-12 col-md-offset-1">            
                    <div class="col-md-12"><div class="row"><div class="col-md-12 loading-area">
                      <div class="loader"></div>
                    </div>
                    <div class="col-md-12 result-area" id="resultarea"></div>
                    <div class="col-md-12 recipe-area" id="recipearea"></div>
                    <div class="col-md-12 content-area">
                      <h2>Choose one or more methods for searching</h2>
                      <div class="card">
                        <div class="card-header" id="heading3">
                          <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse3" id="coll3"aria-expanded="false" aria-controls="collapse3">
                          <button class="btn btn-link">Select the nutrients you need to eat</button>
                          <span class="glyphicon glyphicon-chevron-down"><img src="img/arrowdown.png"/></span>
                          <div class="inp"></div></h5>
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
    <!-- Search Area -->
    
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


<script src="static/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
 $(function(){
    $("#collapse1").on("show.bs.collapse", function () {
        $('#heading1').css('display', 'none');
    })
    $('#collapse3').on('show.bs.collapse', function () {
        $('#heading3').css('display', 'none');
    })
    $("#collapse4").on("show.bs.collapse", function () {
        $('#heading4').css('display', 'none');
    })
    $('.glyphicon-chevron-up').on('click', function() { 
		collapseMenu($(this).data('line'));
    }); 
        $('#goUp').on('click', function() { 
		collapseMenu($(this).data('line'));
    }); 
    $('#goUp1').on('click', function() { 
		collapseMenu($(this).data('line'));
    }); 
    $("#checkbox1").on("click", function () {
        document.getElementById("checkbox2").checked=false;
        document.getElementById("checkbox3").checked=false;
        document.getElementById("checkbox4").checked=false;
    })
    $("#checkbox2").on("click", function () {
        document.getElementById("checkbox1").checked=false;
    })
    $("#checkbox3").on("click", function () {
        document.getElementById("checkbox1").checked=false;    
    })
    $("#checkbox4").on("click", function () {
        document.getElementById("checkbox1").checked=false;   
    })
 })
 function collapseMenu(selector){    
        $('#heading'+selector).css('display', 'block');
        $('#collapse'+selector).removeClass('show');     
      	addToHeader();      
    }
function addToHeader(){
      
      var searchQuery	= $('.search.q').val(),
        healtHTML 	= '',
        healtStatus	= '',
        dietHTML	= '',
        dietStatus	= '',
        calQuery	= $('.search.cal').val(),
        nutrHTML	= '',
        nutrStatus	= '',
        nutrValueMin	= '',
          nutrValueMax	= '';
  
      //----------- Search -----------------
      if(searchQuery == ''){
          $('#heading1').find('.inp').html('').css('display', 'none');
    } else {
          $('#heading1').find('.inp').html('').html(searchQuery).css('display', 'block');
    }
      
      //----------- Healt ------------------
    $('input.healt:checked').each(function () {
          healtStatus = $(this).parent('.checkbox-button').find('.checkbox-button__label').html();
        if(healtStatus != ''){
            healtHTML += healtStatus+' <span>'+$(this).parent('.checkbox-button').find('.mdesc').html()+'</span></br>';
        }
    });
      if(healtHTML == ''){
          $('#heading2').find('.inp').html('').css('display', 'none');
    } else {
          $('#heading2').find('.inp').html('').html(healtHTML).css('display', 'block');
    }

      //----------- Diet -------------------
    $('input.diet:checked').each(function () {
          dietStatus = $(this).parent('.checkbox-button').find('.checkbox-button__label').html();
        if(dietStatus != ''){
            dietHTML += dietStatus+' <span>'+$(this).parent('.checkbox-button').find('.mdesc').html()+'</span></br>';
        }
    });
      if(dietHTML == ''){
          $('#heading3').find('.inp').html('').css('display', 'none');
    } else {
          $('#heading3').find('.inp').html('').html(dietHTML).css('display', 'block');
    }
      //----------- Calories ---------------
      if(calQuery == ''){
          $('#heading4').find('.inp').html('').css('display', 'none');
    } else {
          $('#heading4').find('.inp').html('').html(calQuery+' kcal per 100g').css('display', 'block');
    }
      //----------- Nutrients --------------
    $('input.nutrient:checked').each(function () {
          nutrStatus = $(this).parent('.checkbox-button').find('.checkbox-button__label').html();
        nutrValueMin = $(this).parent('.checkbox-button').find('.min').val();
          nutrValueMax = $(this).parent('.checkbox-button').find('.max').val();
          if(nutrStatus != ''){
              if((nutrValueMin != '')&&(nutrValueMax != '')){
                  //nutrHTML += nutrStatus+' '+nutrValueMin+' '+$(this).parent('.checkbox-button').find('.mdesc').text()+'</br>';
                  nutrHTML += nutrStatus+' / min <b>'+nutrValueMin+'</b> and max <b>'+nutrValueMax+'</b> quantity per serving</br>';
            } else if((nutrValueMin == '')&&(nutrValueMax != '')){
                nutrHTML += nutrStatus+' / max <b>'+nutrValueMax+'</b> quantity per serving</br>';
            } else if((nutrValueMin != '')&&(nutrValueMax == '')){
                nutrHTML += nutrStatus+' / min <b>'+nutrValueMin+'</b> quantity per serving</br>';
            } else if((nutrValueMin == '')&&(nutrValueMax == '')){
                nutrHTML += nutrStatus+'</br>';
            }
        }
    });
      if(nutrHTML == ''){
          $('#heading5').find('.inp').html('').css('display', 'none');
    } else {
          $('#heading5').find('.inp').html('').html(nutrHTML).css('display', 'block');
    }      
}
$('.result_recipe').on("click", function() {
      	var q 			= '',
            healt 		= '', 
            diet 		= '',
            calories	= '&minCalories=0',
            nutrients	= '';
      
      
      	if($('.search.q').val() != ''){
          	q = "&query="+$('.search.q').val();
        } 
        if(document.getElementById("checkbox1").checked==true){
          diet =diet +$("#checkbox1").val();
        }
        if(document.getElementById("checkbox2").checked==true){
          diet =diet +$("#checkbox2").val();
       
           }
        else{
          diet =diet + "&minProtein=0";
        }
        if(document.getElementById("checkbox3").checked==true){
          diet =diet +$("#checkbox3").val();
           }
        else{
          diet =diet + "&minCarbs=0";
        }
        if(document.getElementById("checkbox4").checked==true){
          diet =diet +$("#checkbox4").val();
           }
        else{
          diet =diet + "&minFat=0";
        }
        if(document.getElementById("checkbox5").checked==true){
          diet =diet +$("#checkbox5").val();
           }
        else{
          diet =diet + "&minFiber=0";
        }
        if(document.getElementById("checkbox6").checked==true){
          diet =diet +$("#checkbox6").val();
           }
        else{
          diet =diet + "&minSodium=0";
        }
       
		
      	$('.content-area').css('display', 'none');
      	$('.loading-area').css('display', 'block');
      
      	$(".result-area").html('');
          var cal, pro, fat, carbs, img, ingrd, ingr, srv;
          var nutri="";
          
      	var html = '<div id="word"><h1>Search Results</h1>'+
				   '<div class="foodresult"></div>'+
            	   '<h4>Recipes</h4></div>'; 
      
        var param = encodeURI(q+healt+diet+calories+nutrients);
            param = param.replace("+", "%2B");
            $.ajax({
			url: 'https://api.spoonacular.com/recipes/complexSearch?apiKey=204b86d778584216b41ae0d4e51f2b33',
			type: 'GET',
			data: param,
			success: function(data) {
                console.log(data);
                console.log(data["results"].length);
                console.log(data["results"][1].image);
                if(data.hits != "") {

html += '<table class="table-res-recipe" id="tableOfRecipe">'+
        '  <thead>'+
        '    <tr>'+
        '      <th >Image</th>'+               
        '      <th >Title</th>'+
        '      <th>Energy</th>'+
        '      <th>Nutrients</th>'+
        '      <th>Cook Step</th>'+              
        '    </tr>'+
        '  </thead>'+
        '  <tbody>';					

    for(var i=0;i<data["results"].length;i++){
        if (i > 5) {
            break;
        }
        if (typeof(data["results"][i].image) != "undefined") {
        img = '<img src="'+data["results"][i].image+'">';
    } else {img = ''}
    if (typeof(data["results"][i].title) != "undefined") {
        ingr = data["results"][i].title;
    } else {ingr = ''}
    if (typeof(data["results"][i]["nutrition"]) != "undefined") {
        cal=data["results"][i]["nutrition"][0].amount;
 //       if(typeof(data["results"][i]["nutrition"][1].amount) != "undefined"){
 //       pro='Protein: <b class="mes">'+data["results"][i]["nutrition"][1].amount+' g</b></br>';
  //  }   
        for(var index = 1;index<data["results"][i]["nutrition"].length;index++ )
        {   var unit = data["results"][i]["nutrition"][index].title+': <b class="mes">'+data["results"][i]["nutrition"][index].amount+' g</b></br>';
            nutri = nutri + unit;
        }
     //   fat='Fat: <b class="mes">'+data["results"][i]["nutrition"][2].amount+' g</b></br>';
    //    carbs='Carbs: <b class="mes">'+data["results"][i]["nutrition"][3].amount+' g</b></br>';
        ingr = data["results"][i].title;
    } else {cal = ''}
    
    var j=data["results"][i].id;
    j=j+"*&"+ingr+"*&"+ data["results"][i].image;
    html += '<tr>'+'<th>'+img+'</th>'+'<th>'+ingr+'</th>'+'<th >'+cal+'</th>'+'<th class="last">'+nutri+'</th>'+ 
            '<th >'+ "<button class='btn btn-info btn-search' id ='"+j+ "' style='margin-top:10%' onclick='readmore("+'"'+j+'"'+")'>Read More</button>"+'</th>'+'</tr>';
            nutri="";
    }
    html += '	</tbody>'+'</table>'+"<button class='btn btn-info btn-search' style='margin-top:3%; float:right;' onclick='backtosearch()'>Back To Search</button>";
            $(".result-area").append(html);
            $('.loading-area').css('display', 'none');
            $('.result-area').css('display', 'block');} 
    else {					
      html += '<span class="addition-e">Ooops, nothing in our database matches what you are searching for. Please try again</span>';
      $(".result-area").append(html);
      $('.loading-area').css('display', 'none');	
      $('.result-area').css('display', 'block');		
    }         
  }
});     
});

    function readmore(readlist){
        $('.result-area').css('display', 'none');
      	$('.loading-area').css('display', 'block');
        var strs = new Array(); 
        strs = readlist.split("*&");
        var id =strs[0];
        var  title = strs[1];
        var  urls = strs[2];
    var content="https://api.spoonacular.com/recipes/"+id+"/ingredientWidget.json?apiKey=0f1fc3994a2c4483b69941398b537a51"
    $.ajax({
        url: content,
        type: 'GET',
        success: function(data) {
                console.log(data);
                getsteps(id);
                var htmldom1="<div class='row col-md-12' id='recipecontent'>";
                htmldom1=htmldom1+"<div class='col-md-12'style='text-align:center; margin-top:3%;'>"+"<h4 style='font-size: 2.0rem;'>"+title+"</h4>"+"</div>";
                htmldom1=htmldom1+"<div class='col-md-12'style='display:flex; justify-content:center;margin-top:3%;'>"+'<img style="width: 250px;border: 1px solid #ddd;"src="'+urls+'">'+"</div>";
               // col-md-6
                if(data.length!=0) {
                  htmldom1=htmldom1+"<h4 class='col-md-12' style='margin-top:3%;font-size: 2.0rem;'>Ingredients:</h4>"
                    for(var i=0;i<data["ingredients"].length;i++){
                        htmldom1=htmldom1+"<div class='col-md-6'>"+"<div style='float:left;'>"+data["ingredients"][i].name+"  "
                        +data["ingredients"][i]["amount"]["metric"].value
                        +" "+data["ingredients"][i]["amount"]["metric"].unit+"</div></div>"
                    }
                    htmldom1 = htmldom1 +"</div>"
                    $(".recipe-area").append(htmldom1);
                }
                else{
                    htmldom1+='<span class="addition-e">Sorry, we don not have a description of the composition of the unit in our database.</span>';
                }
            }
    });
}
   function getsteps(id){
    var recipeurl ="https://api.spoonacular.com/recipes/"+id+"/analyzedInstructions/?apiKey=e5b766023be14c5a85cb3dbcbd1fa03a";
    $.ajax({
			url: recipeurl,
			type: 'GET',
            success: function(data) {
                console.log(data);
                var htmldom="<div class='row col-md-12' style='margin-top:3%;' id='steprecipe'>";
                if(data.length!=0) {
                  htmldom+="<h4 class='col-md-12' style='font-size: 2.0rem;'>Steps:</h4>"
                    for(var i=0;i<data[0]["steps"].length;i++){
                        var StepNumber = i+1;
                        htmldom+='<b class="col-md-12" style="font-size: 1.7rem;">Step'+StepNumber+'</b><br>';
                        htmldom+='<p class="col-md-12">'+data[0]["steps"][i].step+'</p><br>';
                    }
                }
                else{
                    htmldom+='<span class="addition-e col-md-12">Sorry, there is no step description for this unit in our database.</span>';
                }
                htmldom+="<button class='btn btn-info btn-search' style='margin-top:3%;' onclick='backtoreicpe()'>Back To Reicpe List</button>";
                htmldom+="<button class='btn btn-info btn-search' style='margin-top:3%;' onclick='backtosearch1()'>Back To Search</button>";
                htmldom+="</div>"
                    $(".recipe-area").append(htmldom);
                    $('.loading-area').css('display', 'none');
                    $('.recipe-area').css('display', 'block');
                }
        });
} 
  function backtosearch(){
    var parent=document.getElementById("resultarea");
    var child=document.getElementById("word");
    parent.removeChild(child);
    child=document.getElementById("tableOfRecipe");
    parent.removeChild(child);
    $('.result-area').css('display', 'none');
    $('.content-area').css('display', 'block');
}      
  function backtoreicpe(){
    var parent=document.getElementById("recipearea");
    var child=document.getElementById("recipecontent");
    parent.removeChild(child);
    child=document.getElementById("steprecipe");
    parent.removeChild(child);
    $('.result-area').css('display', 'block');
    $('.recipe-area').css('display', 'none');
}
  function backtosearch1(){
    var parent=document.getElementById("resultarea");
    var child=document.getElementById("word");
    parent.removeChild(child);
    child=document.getElementById("tableOfRecipe");
    parent.removeChild(child);
    parent=document.getElementById("recipearea");
    child=document.getElementById("recipecontent");
    parent.removeChild(child);
    child=document.getElementById("steprecipe");
    parent.removeChild(child);
    $('.recipe-area').css('display', 'none');
    $('.content-area').css('display', 'block');
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
    
    <script src="js/main.js?v=3"></script>
</body>

</html>