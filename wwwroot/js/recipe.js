/* 
 * Linked to recipe.php
 * Last Modified: 27 May 2020
*/

window.onload = function() {
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
    // When users click the "Balanced", they are not able to select the 2,3,4 checkbox, since they are the same thing.
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
  
      //----------- "Select ingredients"" -----------------
      if(searchQuery == ''){
          $('#heading1').find('.inp').html('').css('display', 'none');} 
      else {
          $('#heading1').find('.inp').html('').html(searchQuery).css('display', 'block');}
      
      //----------- "Select the nutrients you need to eat" -------------------
      $('input.diet:checked').each(function () {
          dietStatus = $(this).parent('.checkbox-button').find('.checkbox-button__label').html();
          if(dietStatus != ''){
              dietHTML += dietStatus+' <span>'+$(this).parent('.checkbox-button').find('.mdesc').html()+'</span></br>';}
          });
          if(dietHTML == ''){
            $('#heading3').find('.inp').html('').css('display', 'none');} 
          else {
          $('#heading3').find('.inp').html('').html(dietHTML).css('display', 'block');}      
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
        if(document.getElementById("checkbox1").checked==true) {
          diet =diet +$("#checkbox1").val();}
        if(document.getElementById("checkbox2").checked==true) {
          diet =diet +$("#checkbox2").val();}
        else {diet =diet + "&minProtein=0";}
        if(document.getElementById("checkbox3").checked==true) {
          diet =diet +$("#checkbox3").val();}
        else {diet =diet + "&minCarbs=0";}
        if(document.getElementById("checkbox4").checked==true) {
          diet =diet +$("#checkbox4").val();}
        else {diet =diet + "&minFat=0";}
        if(document.getElementById("checkbox5").checked==true) {
          diet =diet +$("#checkbox5").val();}
        else {diet =diet + "&minFiber=0";}
        if(document.getElementById("checkbox6").checked==true) {
          diet =diet +$("#checkbox6").val();}
        else {diet =diet + "&minSodium=0";}
      		
        	$('.content-area').css('display', 'none');
        	$('.loading-area').css('display', 'block');      
        	$(".result-area").html('');
          var cal, pro, fat, carbs, img, ingrd, ingr, srv;
          var nutri="";
          var html = '<div id="word"><h1>Search Results</h1>'+'<div class="foodresult"></div>'+'<h4>Recipes</h4></div>'; 
          var param = encodeURI(q+healt+diet+calories+nutrients);
          param = param.replace("+", "%2B");
          // Get recipe detail from API
          $.ajax({
        			url: 'https://api.spoonacular.com/recipes/complexSearch?apiKey=204b86d778584216b41ae0d4e51f2b33',
        			type: 'GET',
        			data: param,
        			success: function(data) {
                        console.log(data);
                        console.log(data["results"].length);
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
              if(data["results"].length!=0) {
                for(var i = 0;i<data["results"].length;i++){
                    if (i > 5) {break;}
                    if (typeof(data["results"][i].image) != "undefined") {
                      img = '<img src="'+data["results"][i].image+'">';} 
                    else {img = ''}
                    if (typeof(data["results"][i].title) != "undefined") {
                      ingr = data["results"][i].title;} 
                    else {ingr = ''}
                    if (typeof(data["results"][i]["nutrition"]) != "undefined") {
                      cal=data["results"][i]["nutrition"][0].amount;
                      for(var index = 1;index<data["results"][i]["nutrition"].length;index++ ) {   
                        var unit = data["results"][i]["nutrition"][index].title+': <b class="mes">'+data["results"][i]["nutrition"][index].amount+' g</b></br>';
                        nutri = nutri + unit;
                      }
                      ingr = data["results"][i].title;} 
                    else {cal = ''}
    
                    var j=data["results"][i].id;
                    j=j+"*&"+ingr+"*&"+ data["results"][i].image;
                    html += '<tr>'+
                            '<th>'+img+'</th>'+
                            '<th>'+ingr+'</th>'+
                            '<th >'+cal+'</th>'+
                            '<th class="last">'+nutri+'</th>'+ 
                            '<th >'+ "<button class='btn btn-info btn-search' id ='"+j+ "' style='margin-top:10%' onclick='readmore("+'"'+j+'"'+")'>Read More</button>"+'</th>'+          
                            '</tr>';
                            nutri="";
                    }
    
                    html += '	</tbody>'+'</table>'+"<button class='btn btn-info btn-search' style='margin-top:3%; float:right;' onclick='backtosearch()'>Back To Search</button>";
                    $(".result-area").append(html);
                    $('.loading-area').css('display', 'none');
                    $('.result-area').css('display', 'block'); } 
                    else {					
                      html += '<span class="addition-e">Ooops, nothing in our database matches what you are searching for. Please try again</span>';	
                      html += '	</tbody>'+'</table>'+"<button class='btn btn-info btn-search' style='margin-top:3%; float:right;' onclick='backtosearch()'>Back To Search</button>";        
                      $(".result-area").append(html);
                      $('.loading-area').css('display', 'none');	
                      $('.result-area').css('display', 'block');		
                      }
                    }
                });   
          });  
};

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
          if(data.length!=0) {
            htmldom1=htmldom1+"<h4 class='col-md-12' style='margin-top:3%;font-size: 2.0rem;'>Ingredients:</h4>"
              for(var i=0;i<data["ingredients"].length;i++){
                  htmldom1=htmldom1+"<div class='col-md-6'>"+"<div style='float:left;'>"+data["ingredients"][i].name+"  "
                  +data["ingredients"][i]["amount"]["metric"].value+" "+data["ingredients"][i]["amount"]["metric"].unit+"</div></div>"
              }
              htmldom1 = htmldom1 +"</div>"
              $(".recipe-area").append(htmldom1);}
          else {
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
                      htmldom+='<p class="col-md-12">'+data[0]["steps"][i].step+'</p><br>'; }
              }
              else {
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