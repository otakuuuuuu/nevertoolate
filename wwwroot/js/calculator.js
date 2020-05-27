//
var foodList=new Array();
window.onload = (function(){
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
                    var idLength = $("#idcount").val();
                    var b = parseFloat(idLength)
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
                            serving="<p id='appends1'>* Serving size may vary according to ingredient. Click <a href='https://www.eatforhealth.gov.au/food-essentials/how-much-do-we-need-each-day/serve-sizes'><u>here</u></a> to understand serving size better.</p>";
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