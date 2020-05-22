$(document).ready(function() {
  
  	if ($(".container-fluid").hasClass("home")) {
      $("body").addClass('home');
      //$("#menu-center").remove();
    }

  	if ($(".container-fluid").hasClass("inside")) {
      $("body").addClass('inside');
      $("#menu-center").fadeIn();
    }  

  	if ($(".container-fluid").hasClass("api")) {
      $("#menu-center").find(".api").addClass("active");
    }
  	if ($(".container-fluid").hasClass("docs")) {
      $("#menu-center").find(".docs").addClass("active");
    }
  	if ($(".container-fluid").hasClass("cases")) {
      $("#menu-center").find(".cases").addClass("active");
    }  
  	if ($(".container-fluid").hasClass("faq")) {
      $("#menu-center").find(".faq").addClass("active");
    }  
  	if ($(".container-fluid").hasClass("key")) {
      $("#menu-center").find(".key").addClass("active");
    } 
  	if ($(".container-fluid").hasClass("forum")) {
      $("#menu-center").find(".forum").addClass("active");
    }  
  	if ($(".container-fluid").hasClass("apps")) {
      $("#menu-center").find(".apps").addClass("active");
    } 
	if ($(".container-fluid").hasClass("services")) {
      $("#menu-center").find(".services").addClass("active");
    }  
  	if ($(".container-fluid").hasClass("msgs")) {
      $("#menu-center").find(".msgs").addClass("active");
    }   
  	if ($(".container-fluid").hasClass("stat")) {
      $("#menu-center").find(".stats").addClass("active");
    }  
  	if ($(".container-fluid").hasClass("acc")) {
      $("#menu-center").find(".acc").addClass("active");
    }   
  
  	if ($("#addCC").hasClass("openNow")) {
      	$("#addCC").find('#formUser').remove();
      	$("#addCC").find('#sendCC').text('Add Card');
      	$('#addCC').find('#formCard').attr('id', 'formCardAdd');
      	$("#addCC").find('#formCard').css("display", "block");
      	$("#addCC").find("#prev").css("display", "none");
      	$("#addCC").modal('show');
    }     
  
  	var orgName,
        userName,
        email,
        password,
        ccToken,
        ccCardNumber,
        ccExpYear,
        ccExpMonth,
        billingName,
        billingAddress,
        billingCity,
        billingCountry,
        applicationPlanId,
        servicePlanId,
        accountId,
        list;
  
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
  
  	var passwd = getUrlParameter('passwd');

    function recordConversion(){
        oImg = new Image();
        oImg.src="https://www.googleadservices.com/pagead/conversion/1002728966/?label=AaKvCPWoz1oQhtyR3gM&amp;guid=ON&amp;script=0";
        oImg.height=1;
        oImg.width=1;
        document.body.appendChild(oImg);
        return true;
    }

    function addMailChimp(service, email){

		if(service == '2357355820566'){ 
            //Nutrition Analysis API
            list = 'eb13dcc0a4';
        }
        if(service == '2357355820567'){ 
            //Recipe Search API
            list = '1e71aa6cba';
        }
        if(service == '2357355942325'){ 
            //Food Database API
            list = '38be731a18';
        }
			  
        $.ajax({
            url: 'https://www.edamam.com/api/b2b/mail-list/members',
            type: 'POST', 
            data: {
                email	: email,
                list	: list
            },
            contentType: "application/x-www-form-urlencoded",
            success: function() {
                //console.log('success');
            },
            error: function() {
                //console.log('error');
            }
        });		
    }
	
  	function checkForm(selector){   
		$("#"+selector).find(".err").find('div.help-block').html('');
        $("#"+selector).find('#formUser').validator('validate');
        var validator = $("#"+selector).find("#formUser").data("bs.validator");
        validator.validate();    
        if (!validator.hasErrors()){
                     
            //$("#"+selector).find('#sendUser').button('loading');
            orgName = $("#"+selector).find('#formUser').find('#inputOrgName').val();
            userName = $("#"+selector).find('#formUser').find('#inputUsername').val();
            email = $("#"+selector).find('#formUser').find('#inputEmail').val();
            password = $("#"+selector).find('#formUser').find('#inputPassword').val(); 
          
           	applicationPlanId = $.parseJSON($("#"+selector).find('#formUser').find('#inputPlans').val()).applicationPlanId;
            servicePlanId = $.parseJSON($("#"+selector).find('#formUser').find('#inputPlans').val()).servicePlanId; 

			if((applicationPlanId == '2357355959141')||(applicationPlanId == '2357355903225')||(applicationPlanId == '2357355950726')){
			
				$("#"+selector).find('#formUser').css("display", "none");
				$("#"+selector).find('#formCard').fadeIn();
			
			} else {

              	$("#"+selector).find('#formUser').css("display", "none");
              	$("#"+selector).find('.loader').css("display", "block");
              
				$.ajax({
					url: 'https://www.edamam.com/api/b2b/account',
					headers: {"Origin": "https://developer.edamam.com"},
					type: 'POST', 
					data: JSON.stringify({ 
						"orgInfo": {
							"orgName": orgName,
							"userName": userName,
							"email": email,
							"password": password
						},
						"creditCardInfo": {
							"token": "",
							"expYear": "",
							"expMonth": ""
						},
						"billingInfo": {
							"name": "",
							"address": "",
							"city": "",
							"country": ""
						},                    
						"plans": {
							"servicePlanId": servicePlanId,
							"applicationPlanId":  applicationPlanId
						}                              
					}),                          
					dataType:'JSON',
					contentType: "application/json; charset=UTF-8",
					success: function(data) {
						$("#"+selector).find('#sendUser').button('reset');
                      	$("#"+selector).find('.loader').css("display", "none");
						recordConversion();
						addMailChimp(servicePlanId, email);
						$('#thanksModal').modal('show');
						$('#registrationModal').modal('hide');
					},
					error: function(data) {
						$("#"+selector).find('#sendUser').button('reset');
              			$("#"+selector).find('#formUser').css("display", "block");
              			$("#"+selector).find('.loader').css("display", "none");                      
						if(data.responseJSON.httpStatus == '422'){                        	
							var variable = '', s = data.responseJSON.param, match = s.split(', ');
							for (var a in match){
								variable += '<li>'+match[a]+'</li>';
							} 
							$("#"+selector).find(".err").find('div.help-block').html('<ul class="list-unstyled">'+variable+'</ul>');
						}                         
					}      
				});
			}
        }
    }

  	function checkFormCC(selector){   
      	var isValid = $("#"+selector).find('#formCard').data('bootstrapValidator').isValid();
      
      	$("#"+selector).find(".err").find('div.help-block').html('');
		$("#"+selector).find('#formCard').validator('validate');
      
        var validator = $("#"+selector).find("#formCard").data("bs.validator");
        validator.validate();    
  	  
      	if ((!validator.hasErrors())&&(isValid == true)){         
          	
  			$("#"+selector).find('#sendCC').button('loading');
			orgName = $("#"+selector).find('#formUser').find('#inputOrgName').val();
            userName = $("#"+selector).find('#inputUsername').val();
            email = $("#"+selector).find('#inputEmail').val();
            password = $("#"+selector).find('#inputPassword').val(); 
          	ccCardNumber = $("#"+selector).find('#cardNumberCC').val();
            ccExpYear = $("#"+selector).find('#expYearCC').val();
            ccExpMonth = $("#"+selector).find('#expMonthCC').val();
            billingName = $("#"+selector).find('#firstNameCC').val()+' '+$("#"+selector).find('#lastNameCC').val();
            billingAddress = $("#"+selector).find('#addressCC').val();
            billingCity = $("#"+selector).find('#cityCC').val();
            billingCountry = $("#"+selector).find('#countryCC').val();
          	applicationPlanId = $.parseJSON($("#"+selector).find('#formUser').find('#inputPlans').val()).applicationPlanId;
          	servicePlanId = $.parseJSON($("#"+selector).find('#formUser').find('#inputPlans').val()).servicePlanId;
          
            $.ajax({
                url: 'https://www.edamam.com/api/b2b/account/token',
                headers: {"Origin": "https://developer.edamam.com"},
                type: 'GET', 
                data: {paymentGateway: 'braintree'},
                dataType:'JSON',
                success: function(data) {
                  
					var client = new braintree.api.Client({clientToken: data.token});
                 
                   	client.tokenizeCard({
                      	number: ccCardNumber,
                      	expirationDate: ccExpMonth+'/'+ccExpYear
                   	}, function (err, nonce) {
						if(err == null){
                        	ccToken = nonce;
                        } else {
                        	$("#"+selector).find(".err").find('div.help-block').html('<ul class="list-unstyled"><li>'+err+'</li></ul>');
                          	return false
                        }

              			$("#"+selector).find('#formCard').css("display", "none");
              			$("#"+selector).find('.loader').css("display", "block");

                        $.ajax({
                            url: 'https://www.edamam.com/api/b2b/account',
                            headers: {"Origin": "https://developer.edamam.com"},
                            type: 'POST', 
                            data: JSON.stringify({ 
                                    "orgInfo": {
                                      "orgName": orgName,
                                      "userName": userName,
                                      "email": email,
                                      "password": password
                                    },
                              		"creditCardInfo": {
                                    	"token": ccToken,
                                    	"expYear": ccExpYear,
                                    	"expMonth": ccExpMonth
                                    },
                                    "billingInfo": {
                                      	"name": billingName,
                                      	"address": billingAddress,
                                      	"city": billingCity,
                                      	"country": billingCountry
                                    },
                                    "plans": {
                                      "servicePlanId": servicePlanId,
                                      "applicationPlanId":  applicationPlanId
                                    }                              
								  }),                          
                            dataType:'JSON',
                          	contentType: "application/json; charset=UTF-8",
                            success: function(data) {
                              	$("#"+selector).find('.loader').css("display", "none");
                                $("#"+selector).find('#sendCC').button('reset');
								addMailChimp(servicePlanId, email);
                              	$('#thanksModal').modal('show');
                              	$('#registrationModal').modal('hide');
                            },
                            error: function(data) {
              					$("#"+selector).find('#formCard').css("display", "block");
              					$("#"+selector).find('.loader').css("display", "none");
                                $("#"+selector).find('#sendCC').button('reset');
                                if(data.responseJSON.httpStatus == '422'){                        	
                                    var variable = '', s = data.responseJSON.param, match = s.split(', ');
                                    for (var a in match){
                                        variable += '<li>'+match[a]+'</li>';
                                    } 
                                    $("#"+selector).find(".err").find('div.help-block').html('<ul class="list-unstyled">'+variable+'</ul>');
                                }                         
                            }      
                        });                                                                  
                   	})                                                                      
                },
                error: function(data) {
               	  //console.log('error');
                  $("#"+selector).find('#sendCC').button('reset');
                }      
            });          
		}   
    }

  	function addCardCC(selector){   
      	var isValid = $("#"+selector).find('#formCardAdd').data('bootstrapValidator').isValid();
      
      	$("#"+selector).find(".err").find('div.help-block').html('');
		$("#"+selector).find('#formCardAdd').validator('validate');
      
        var validator = $("#"+selector).find("#formCardAdd").data("bs.validator");
        validator.validate();    
      
      	if ((!validator.hasErrors())&&(isValid == true)){         
          	
  			$("#"+selector).find('#sendCC').button('loading');
          	ccCardNumber = $("#"+selector).find('#cardNumberCC').val();
            ccExpYear = $("#"+selector).find('#expYearCC').val();
            ccExpMonth = $("#"+selector).find('#expMonthCC').val();
            billingName = $("#"+selector).find('#firstNameCC').val()+' '+$("#"+selector).find('#lastNameCC').val();
            billingAddress = $("#"+selector).find('#addressCC').val();
            billingCity = $("#"+selector).find('#cityCC').val();
            billingCountry = $("#"+selector).find('#countryCC').val();
          	accountId = $("#addCC").data("acc");
          
            $.ajax({
                url: 'https://www.edamam.com/api/b2b/account/token',
                headers: {"Origin": "https://developer.edamam.com"},
                type: 'GET', 
                data: {paymentGateway: 'braintree'},
                dataType:'JSON',
                success: function(data) {
                  
					var client = new braintree.api.Client({clientToken: data.token});
                 
                   	client.tokenizeCard({
                      	number: ccCardNumber,
                      	expirationDate: ccExpMonth+'/'+ccExpYear
                   	}, function (err, nonce) {
						if(err == null){
                        	ccToken = nonce;
                        } else {
                        	$("#"+selector).find(".err").find('div.help-block').html('<ul class="list-unstyled"><li>'+err+'</li></ul>');
                          	return false
                        }

                        $.ajax({
                            url: 'https://www.edamam.com/api/b2b/account/'+accountId+'/creditcard',
                            headers: {"Origin": "https://developer.edamam.com"},
                            type: 'PUT', 
                            data: JSON.stringify({ 
                              		"creditCardInfo": {
                                    	"token": ccToken,
                                    	"expYear": ccExpYear,
                                    	"expMonth": ccExpMonth
                                    },
                                    "billingInfo": {
                                      	"name": billingName,
                                      	"address": billingAddress,
                                      	"city": billingCity,
                                      	"country": billingCountry
                                    }                              
								  }),
                            dataType:'JSON',
                          	contentType: "application/json; charset=UTF-8",
                            success: function(data) {
                                $("#"+selector).find('#sendCC').button('reset');
                              	location.reload();
                            },
                            error: function(data) {
                                $("#"+selector).find('#sendCC').button('reset');
                                if(data.responseJSON.httpStatus == '422'){                        	
                                    var variable = '', s = data.responseJSON.param, match = s.split(', ');
                                    for (var a in match){
                                        variable += '<li>'+match[a]+'</li>';
                                    } 
                                    $("#"+selector).find(".err").find('div.help-block').html('<ul class="list-unstyled">'+variable+'</ul>');
                                }                         
                            }      
                        });                                                                  
                   	})                                                                      
                },
                error: function(data) {
               	  //console.log('error');
                  $("#"+selector).find('#sendCC').button('reset');
                }      
            });          
		}   
    }  
  
	function prevForm(selector){
      	$("#"+selector).find(".err").find('div.help-block').html('');
    	$("#"+selector).find('#formUser').fadeIn();
        $("#"+selector).find('#formCard').css("display", "none");      
    }
  
    $("#registrationModal").find("#sendPlan").on( "click", function() {       	
		$("#registrationModal").find(".err").find('div.help-block').html('');
        $("#registrationModal").find('#choosePlan').validator('validate');
        var validator = $("#registrationModal").find("#choosePlan").data("bs.validator");
        validator.validate(); 
      	var choice = $("#registrationModal").find("#inputPlansChoice").val();
        if ((!validator.hasErrors())&&(choice != '')){          
          var email = $("#registrationModal").find('#inputEmailFirst').val();
          if((choice == 'freeAnalysis')||(choice == 'freeSearch')){
            if(choice == 'freeAnalysis'){
              
                $('#formUser ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formUser ul.dropdown-menu li:eq(1)').addClass('selected');      
                $('#formUser #inputPlans option:eq(1)').attr('selected', true);
  
            } else if(choice == 'freeSearch'){

                $('#formUser ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formUser ul.dropdown-menu li:eq(3)').addClass('selected');
                $('#formUser #inputPlans option:eq(3)').attr('selected', true);
 
            }            
            $("#registrationModal").find('#inputEmail').val(email);
            $("#registrationModal").find('#formUser').fadeIn();                       
          } else { 
            if(choice == 'StartupAnalysis'){
                $('#formContact #inputPlans').find('option').attr('selected', false);
                $('#formContact ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formContact ul.dropdown-menu li:eq(1)').addClass('selected');              
            	$('#formContact #inputPlans option[value="StartupAnalysis"]').prop('selected', 'selected').change();  
            } else if(choice == 'EnterpriseAnalysis'){              
                $('#formContact #inputPlans').find('option').attr('selected', false);
                $('#formContact ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formContact ul.dropdown-menu li:eq(2)').addClass('selected');              
              	$('#formContact #inputPlans option[value="EnterpriseAnalysis"]').prop('selected', 'selected').change();
            } else if(choice == 'StartupSearch'){
                $('#formContact #inputPlans').find('option').attr('selected', false);
                $('#formContact ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formContact ul.dropdown-menu li:eq(4)').addClass('selected');              
             	$('#formContact #inputPlans option[value="StartupSearch"]').prop('selected', 'selected').change(); 
            } else if(choice == 'EnterpriseSearch'){
                $('#formContact #inputPlans').find('option').attr('selected', false);
                $('#formContact ul.dropdown-menu').find('li.selected').removeClass("selected");
                $('#formContact ul.dropdown-menu li:eq(5)').addClass('selected');              
            	$('#formContact #inputPlans option[value="EnterpriseSearch"]').prop('selected', 'selected').change();  
            }           
            $("#registrationModal").find('#inputEmailPlan').val(email);
            $("#registrationModal").find('#formContact').fadeIn();          	
          }
          $("#registrationModal").find('#choosePlan').css("display", "none");
        }       
    });   

	function selectDropDown(selector, value){
      	$('#formContact #inputPlans').find('option').attr('selected', false);
        $('#formContact ul.dropdown-menu').find('li.selected').removeClass("selected");
      	$('#formContact ul.dropdown-menu li:eq('+selector+')').addClass('selected');
      	$('#formContact #inputPlans option[value="'+value+'"]').prop('selected', 'selected').change();
        $("#registrationModal").find('#formContact').css("display", "block");
        $("#registrationModal").find('#choosePlan').css("display", "none");
      	$("#registrationModal").find('#formUser').css("display", "none");
      	$("#registrationModal").find('#formLicensing').css("display", "none");
    }
	function selectDropDownPlan(selector){
        //console.log($('#formUser #inputPlans option:eq('+selector+')').val());
      	var value = $('#formUser #inputPlans option:eq('+selector+')').val();
      	$('#formUser #inputPlans').find('option').attr('selected', false);
        $('#formUser ul.dropdown-menu').find('li.selected').removeClass("selected");
      	$('#formUser ul.dropdown-menu li:eq('+selector+')').addClass('selected');      
		$('#formUser #inputPlans option:eq('+selector+')').attr('selected', true);   
      $("#formUser #inputPlans option[value='"+value+"']").prop("selected", "selected").change();
        $("#registrationModal").find('#formUser').css("display", "block");
        $("#registrationModal").find('#choosePlan').css("display", "none");
      	$("#registrationModal").find('#formContact').css("display", "none");
      	$("#registrationModal").find('#formLicensing').css("display", "none");
    }
  
    $("#analysisDeveloper").on( "click", function() {
      	selectDropDownPlan(1);
    });
    $("#analysisEnterprise").on( "click", function() {
      	selectDropDownPlan(2);
    });  
    $("#searchDeveloper").on( "click", function() { 
      	selectDropDownPlan(4);
    });
    $("#searchEnterprise").on( "click", function() {
      	selectDropDownPlan(5);
    });  
    $("#databaseDeveloper").on( "click", function() { 
      	selectDropDownPlan(7);
    });
    $("#databaseEnterprise").on( "click", function() {
      	selectDropDownPlan(8);
    }); 
  
	$(".analysisDeveloper").on( "click", function() {
      	selectDropDownPlan(1);
    });
    $(".searchDeveloper").on( "click", function() {
      	selectDropDownPlan(4);
    });
    $(".databaseDeveloper").on( "click", function() {
      	selectDropDownPlan(4);
    });
  
    $("#analysisStartup").on( "click", function() { 
      	selectDropDown(1, 'StartupAnalysis');
    });
    $("#searchStartup").on( "click", function() { 
      	selectDropDown(4, 'StartupSearch');
    });
	$("#databaseStartup").on( "click", function() { 
      	selectDropDown(7, 'StartupDatabase');
    });
	$("#databaseUnlimited").on( "click", function() { 
      	selectDropDown(8, 'UnlimitedDatabase');
    });
  
	$("#recipeLicensing").on( "click", function() {
      	$("#registrationModal").find('#formLicensing').css("display", "block");
		$("#registrationModal").find('#formContact').css("display", "none");
        $("#registrationModal").find('#choosePlan').css("display", "none");
      	$("#registrationModal").find('#formUser').css("display", "none");      	
    });
  
	$(".open").on( "click", function() {
     	$("#registrationModal").find('#formLicensing').css("display", "none");
    	$("#registrationModal").find('#choosePlan').css("display", "block");
      	$("#registrationModal").find('#formContact').css("display", "none");
      	$("#registrationModal").find('#formUser').css("display", "none");
    });  

    $("#container").find("#sendUser").on( "click", function() { 
      	checkForm('container');
    }); 

    $("#registrationModal").find("#sendUser").on( "click", function() { 
		checkForm('registrationModal');
    });   
  
    $("#container").find("#prev").on( "click", function() {   
        prevForm('container');  
    });   

    $("#registrationModal").find("#prev").on( "click", function() {   
        prevForm('registrationModal');  
    });   
  
    $('#container #formCard, #registrationModal #formCard, #addCC #formCardAdd').bootstrapValidator({
        fields: {
            cc: {
                validators: {
                    creditCard: {
                        message: 'The credit card number is not valid'
                    }
                }
            },
            cvc: {
                validators: {
                    cvv: {
                        creditCardField: 'cc',
                        message: 'The CVV number is not valid'
                    }
                }
            }          
        }
    }); 

    $("#container").find("#sendCC").on( "click", function() { 
      	checkFormCC('container');
    }); 

    $("#registrationModal").find("#sendCC").on( "click", function() { 
		checkFormCC('registrationModal');
    });   
  
    $("#addCC").find("#sendCC").on( "click", function() { 
		addCardCC('addCC');
    });   
  
    $('#thanksModal').on('hidden.bs.modal', function () {
		window.location.replace("/login");
    });
  
    $(".back-btn").on( "click", function() { 
		window.location.href = "/";
    });
  
    $('#registrationModal').on('show.bs.modal', function () {
		$('#formCard').css("display", "none");
      	$('#registrationModal').find("#inputPassword").addClass('inputPassword');
      	$('#registrationModal').find("#inputPasswordConfirm").attr('data-match', '.inputPassword');
      	$('#registrationModal').find('#checkbox').attr('id', 'checkboxModal');
      	$('#registrationModal').find('.checkbox').find('label').attr('for', 'checkboxModal');
      	$('#confirmModal').modal('hide');
    });  
  
    $("#loginButon").on( "click", function() { 
        $('#loginForm').find('#new_session').validator('validate');
        var validator = $('#loginForm').find("#new_session").data("bs.validator");
        validator.validate();    
        if (!validator.hasErrors()){
            $('#loginForm').find("#new_session").submit();           
        }
    });

    $("#loginButonMenu").on( "click", function() { 
        $('#loginFormMenu').find('#new_session').validator('validate');
        var validator = $('#loginFormMenu').find("#new_session").data("bs.validator");
        validator.validate();    
        if (!validator.hasErrors()){
            $('#loginFormMenu').find("#new_session").submit();           
        }
    });   
  
    $("#forgotButon").on( "click", function() { 
        $("#forgotForm").find('.login-form').validator('validate');
        var validator = $("#forgotForm").find('.login-form').data("bs.validator");
        validator.validate();    
        if (!validator.hasErrors()){
            $("#forgotForm").find('.login-form').submit();           
        }
    });
  
    $("#forgotPass").on( "click", function() { 
    	$('#loginForm').css("display", "none");
        $('#forgotForm').fadeIn();           
    });  

    $("#forgotPassMenu").on( "click", function() { 
    	location.href = "/login?passwd=forgot";           
    });    
  
  	if(passwd == 'forgot'){
    	$('#loginForm').css("display", "none");
        $('#forgotForm').css("display", "block");       
    } 

    $('#signOut').on( "click", function() {
		location.href = "/logout";
    }); 
  
  	$("#dashboard").on( "click", function() { 
    	location.href = "/admin";           
    });
  
    $(".login-buttons").find('.dropdown-menu').click(function(event){
         event.stopPropagation();
    });  
  
/*
  	var contribute = '<div id="contribute"><div class="context"><div class="line-one">Help us build the best nutrition analysis app!</div><div class="line-two">Learn more and <span id="contUrl">CONTRIBUTE</span></div></div></div>';    

  	$(".container-fluid.bgr").prepend(contribute);
  
	$("#contribute").find(".context").on( "click", function() {
    window.open(
      'http://pieshell.com/projects/edamam',
      '_blank'
    );    
	});   
*/ 
  
    var url = document.location.pathname;
    var meta = $("meta[name='description']");

    if(url === "/about/terms"){
      meta.attr('content', 'Terms of use for Nutrrition Analysis, Food Database and Recipe Search APIs. License, fees for commercial use and proprietary rights.');
    } else if(url === "/attribution"){
      meta.attr('content', 'Attribution guidelines for Nutrrition Analysis, Food Database and Recipe Search APIs. Requirements, official badge, examples.');
    } else if(url === "/edamam-recipe-api"){
      meta.attr('content', 'Subscription plans for Recipe Search API. Integrate over 1.5m English and 200k Spanish recipes and faceted recipe search into your websites or mobile applications.');
    } else if(url === "/food-database-api-docs"){
      meta.attr('content', 'Documentation for Food Database API. This API provides you with tools to find nutrition and diet data for generic foods, packaged foods and restaurant meals.');
    } else if(url === "/recipe-database-licensing"){
      meta.attr('content', 'Recipe Search API Licensing. Integrate over 1.5m English and 200k Spanish recipes and faceted recipe search into your websites or mobile applications.');
    } else if(url === "/edamam-docs-nutrition-api"){
      meta.attr('content', 'Documentation for Nutrition Analysis API. The API uses Natural Language Processing and semantically structured data.');
    } else if(url === "/edamam-docs-recipe-api"){
      meta.attr('content', 'Documentation for Recipe Search API. Integrate over 1.5m English and 200k Spanish recipes and faceted recipe search into your websites or mobile applications.');
    } else if(url === "/edamam-nutrition-api"){
      meta.attr('content', 'Nutrition Analysis API. The API uses Natural Language Processing, semantically structured data and nutrition data output.');
    } else if(url === "/api/faq"){
      meta.attr('content', 'FAQ for Nutrrition Analysis, Food Database and Recipe Search APIs. For more questions check the Forum or email us.');
    } else if(url === "/food-database-api"){
      meta.attr('content', 'Food Database API. This API provides you with tools to find nutrition and diet data for generic foods, packaged foods and restaurant meals.');
    } else if(url === "/login"){
      meta.attr('content', 'Log into API developer portal for Nutrition Analysis, Food Database Lookup, Recipe Search API and others.');
    } else{
      meta.attr('content', 'API developer portal for Nutrition Analysis, Food Database Lookup, Recipe Search API and others. Choose the API license you need.');
    }

    $(".calc").on( "click", function() { 
      	$(".demo-result").html('');
    	var demoData = $('#demoFoodDB').val();
      	var cal, pro, fat, carbs, quantity, mlabel, flabel, brand;
      	var html = '<table class="table">'+
                   '  <thead>'+
                   '    <tr>'+
                   '      <th>Qty</th>'+
                   '      <th>Unit</th>'+
                   '      <th>Food</th>'+
            	   '      <th>Nutrients</th>'+          
                   '    </tr>'+
                   '  </thead>'+
                   '  <tbody>';
		$.ajax({
			url: 'https://api.edamam.com/api/food-database/parser?nutrition-type=logging&app_id=07d50733&app_key=80fcb49b500737827a9a23f7049653b9',
			type: 'GET',
			data: {ingr: demoData},
			success: function(data) {
              
              if((data.parsed == "")&&(data.hints == "")){
                html = '<span class="addition-e">Ooops, nothing in our database matches what you are searching for. Please try again</span>';
              } else if((data.parsed == "")&&(data.hints != "")) {
                html = '<span class="addition-i">We could not find what you were searching for but maybe some of this suggestions will do the job?</span>';
                
                html+= '<table class="table">'+
                       '  <thead>'+
                       '    <tr>'+
                       '      <th>Qty</th>'+
                       '      <th>Unit</th>'+
                       '      <th>Food</th>'+
                       '      <th>Nutrients</th>'+
                       '    </tr>'+
                       '  </thead>'+
                       '  <tbody>';                

                      $.each(data.hints, function(i) {
                          if (i > 2) {return false};
                          console.log(data.hints[i].food.label);
                        
                          if (typeof(data.hints[i].food.nutrients.ENERC_KCAL) != "undefined") {
                              cal = 'Energy: <b>'+Math.floor(data.hints[i].food.nutrients.ENERC_KCAL)+' kcal</b></br>';
                          } else {cal = ''}
                          if (typeof(data.hints[i].food.nutrients.PROCNT) != "undefined") {
                              pro = 'Protein: <b>'+Math.floor(data.hints[i].food.nutrients.PROCNT)+' g</b></br>';
                          } else {pro = ''}
                          if (typeof(data.hints[i].food.nutrients.FAT) != "undefined") {
                              fat = 'Fat: <b>'+Math.floor(data.hints[i].food.nutrients.FAT)+' g</b></br>';
                          } else {fat = ''}
                          if (typeof(data.hints[i].food.nutrients.CHOCDF) != "undefined") {
                              carbs = 'Carbs: <b>'+Math.floor(data.hints[i].food.nutrients.CHOCDF)+' g</b></br>';
                          } else {carbs = ''}

                          if (typeof(data.hints[i].food.brand) != "undefined") {
                              brand = data.hints[i].food.brand+' - ';
                          } else {brand = ''}
                          if (typeof(data.hints[i].food.label) != "undefined") {
                              flabel = data.hints[i].food.label;
                          } else {flabel = ''}                        

                          html += '<tr>'+
                                  '	<th>100</th>'+
                                  '   <th>g</th>'+
                                  '   <th>'+brand+flabel+'</th>'+
                                  '   <th>'+cal+pro+fat+carbs+'</th>'+           
                                  '</tr>';                        
                        
                      });
                
                      html += '	</tbody>'+
                              '</table>';                
              } else {
                
				$.each(data.parsed, function(i) {
                    if (typeof(data.parsed[i].food.nutrients.ENERC_KCAL) != "undefined") {
                    	cal = 'Energy: <b>'+Math.floor(data.parsed[i].food.nutrients.ENERC_KCAL)+' kcal</b></br>';
                    } else {cal = ''}
                    if (typeof(data.parsed[i].food.nutrients.PROCNT) != "undefined") {
                        pro = 'Protein: <b>'+Math.floor(data.parsed[i].food.nutrients.PROCNT)+' g</b></br>';
                    } else {pro = ''}
                    if (typeof(data.parsed[i].food.nutrients.FAT) != "undefined") {
                        fat = 'Fat: <b>'+Math.floor(data.parsed[i].food.nutrients.FAT)+' g</b></br>';
                    } else {fat = ''}
                    if (typeof(data.parsed[i].food.nutrients.CHOCDF) != "undefined") {
                        carbs = 'Carbs: <b>'+Math.floor(data.parsed[i].food.nutrients.CHOCDF)+' g</b></br>';
                    } else {carbs = ''}

                    if (typeof(data.parsed[i].quantity) != "undefined") {
                        quantity = data.parsed[i].quantity;
                    } else {quantity = '100'}
                    if (typeof(data.parsed[i].measure) != "undefined") {
                        mlabel = data.parsed[i].measure.label;
                    } else {mlabel = 'g'}
                  	if (typeof(data.parsed[i].food.label) != "undefined") {
                        flabel = data.parsed[i].food.label;
                    } else {flabel = ''}
                  
                    html += '<tr>'+
                            '	<th>'+quantity+'</th>'+
                            '   <th>'+mlabel+'</th>'+
                            '   <th>'+flabel+'</th>'+
                            '   <th>'+cal+pro+fat+carbs+'</th>'+           
                            '</tr>';
                });
              
                html += '	</tbody>'+
                        '</table>';
                html += '<span class="addition">In addition to the data displayed, the API provides full ingredient list, 28 nutrients and 40 diet/health labels for each food.</span>';  
              }
              
              $(".demo-result").append(html);
              
			}
		});	
    });
  	
  	var ind, sum, fprice, all, all0, all1, all2, all3, dd0, dd1, dd2, dd3, di0, di1, di2, di3 = 0;
    
  	$('#calcAPI').on("click", function() {
		all1 = parseInt($('#allergy-1').val());
      	all2 = parseInt($('#allergy-2').val());
      	all3 = parseInt($('#allergy-3').val());
      	all0 = all1 + all2 + all3;
      
		dd1 = parseInt($('#diet-1').val());
      	dd2 = parseInt($('#diet-2').val());
      	dd3 = parseInt($('#diet-3').val());  
		dd0 = dd1 + dd2 + dd3;
      	
     	all = all0 + dd0;
          
      	di1 = parseInt($('#dish-1').val());
      	di2 = parseInt($('#dish-2').val());
      	di3 = parseInt($('#dish-3').val());
      	
      	di0 = di1 + di2 + di3;

      	
        if(all >= di0){
          sum = all;
        } else if(di0 >= all){
          sum = di0;
        }
      
    	if(sum >= 1000){
        	fprice = sum*2.5;
        } else {
        	fprice = sum*3;
        }
      	
      	var html = "";
      	$(".calres-title").text(html);
      
        html = "Monthly license fee: <span>$"+fprice+"</span>";
      	$(".calres-title").append(html);
      
      	$(".calcres").css("display", "block");

    });  
  
  
    $(".calc-analysis-api").on( "click", function() { 
      
      	$('.content-area').css('display', 'none');
      	$('.loading-area').css('display', 'block');      
      
      	$(".demo-result").html('');
      	$(".err-result").html('');
      	$(".demo-result-label").html('');
      
		var arr = { 
					"ingr": $('#demoAnalysis').val().split(/\n|\r/)
				  };
      	var quantity, measure, weight, foodMatch, unit;
      	var totalCal, FAT, totalDailyFAT, FASAT, totalDailyFASAT, FATRN, CHOLE, totalDailyCHOLE, NA, totalDailyNA, CHOCDF, totalDailyCHOCDF, FIBTG, totalDailyFIBTG, SUGAR, SUGARadded, PROCNT, totalDailyPROCNT, VITD, totalDailyVITD, CA, totalDailyCA, FE, totalDailyFE, K, totalDailyK, err;
      	var html = '<div class="col-md-12"><table class="table">'+
                   '  <thead>'+
                   '    <tr>'+
                   '      <th>Qty</th>'+
                   '      <th>Unit</th>'+
                   '      <th>Food</th>'+
            	   '      <th>Calories</th>'+
            	   '	  <th>Weight</th>'+
                   '    </tr>'+
                   '  </thead>'+
                   '  <tbody></div>';
		$.ajax({
			url: 'https://api.edamam.com/api/nutrition-details?app_id=47379841&app_key=d28718060b8adfd39783ead254df7f92',          
			type: 'POST',
			data: JSON.stringify(arr),
			contentType: 'application/json',
			success: function(data) {
              
			if (typeof(data.totalNutrients.ENERC_KCAL) != "undefined") {
				totalCal = Math.round(data.totalNutrients.ENERC_KCAL.quantity);
			} else {totalCal = '0'};
			
			if (typeof(data.totalNutrients.FAT) != "undefined") {
				FAT = Math.round(data.totalNutrients.FAT.quantity*10)/10+' '+data.totalNutrients.FAT.unit;
			} else {FAT = '-'};
			if (typeof(data.totalDaily.FAT) != "undefined") {
				totalDailyFAT = Math.round(data.totalDaily.FAT.quantity)+' '+data.totalDaily.FAT.unit;
			} else {totalDailyFAT = '-'};	
			
			if (typeof(data.totalNutrients.FASAT) != "undefined") {
				FASAT = Math.round(data.totalNutrients.FASAT.quantity*10)/10+' '+data.totalNutrients.FASAT.unit;
			} else {FASAT = '-'};
			if (typeof(data.totalDaily.FASAT) != "undefined") {
				totalDailyFASAT = Math.round(data.totalDaily.FASAT.quantity)+' '+data.totalDaily.FASAT.unit;
			} else {totalDailyFASAT = '-'};	
			
			if (typeof(data.totalNutrients.FATRN) != "undefined") {
				FATRN = Math.round(data.totalNutrients.FATRN.quantity*10)/10+' '+data.totalNutrients.FATRN.unit;
			} else {FATRN = '-'};	

			if (typeof(data.totalNutrients.CHOLE) != "undefined") {
				CHOLE = Math.round(data.totalNutrients.CHOLE.quantity*10)/10+' '+data.totalNutrients.CHOLE.unit;
			} else {CHOLE = '-'};
			if (typeof(data.totalDaily.CHOLE) != "undefined") {
				totalDailyCHOLE = Math.round(data.totalDaily.CHOLE.quantity)+' '+data.totalDaily.CHOLE.unit;
			} else {totalDailyCHOLE = '-'};	

			if (typeof(data.totalNutrients.NA) != "undefined") {
				NA = Math.round(data.totalNutrients.NA.quantity*10)/10+' '+data.totalNutrients.NA.unit;
			} else {NA = '-'};
			if (typeof(data.totalDaily.NA) != "undefined") {
				totalDailyNA = Math.round(data.totalDaily.NA.quantity)+' '+data.totalDaily.NA.unit;
			} else {totalDailyNA = '-'};	

			if (typeof(data.totalNutrients.CHOCDF) != "undefined") {
				CHOCDF = Math.round(data.totalNutrients.CHOCDF.quantity*10)/10+' '+data.totalNutrients.CHOCDF.unit;
			} else {CHOCDF = '-'};
			if (typeof(data.totalDaily.CHOCDF) != "undefined") {
				totalDailyCHOCDF = Math.round(data.totalDaily.CHOCDF.quantity)+' '+data.totalDaily.CHOCDF.unit;
			} else {totalDailyCHOCDF = '-'};	

			if (typeof(data.totalNutrients.FIBTG) != "undefined") {
				FIBTG = Math.round(data.totalNutrients.FIBTG.quantity*10)/10+' '+data.totalNutrients.FIBTG.unit;
			} else {FIBTG = '-'};
			if (typeof(data.totalDaily.FIBTG) != "undefined") {
				totalDailyFIBTG = Math.round(data.totalDaily.FIBTG.quantity)+' '+data.totalDaily.FIBTG.unit;
			} else {totalDailyFIBTG = '-'};	

			if (typeof(data.totalNutrients.SUGAR) != "undefined") {
				SUGAR = Math.round(data.totalNutrients.SUGAR.quantity*10)/10+' '+data.totalNutrients.SUGAR.unit;
			} else {SUGAR = '-'};

			if (typeof(data.totalNutrients.SUGARadded) != "undefined") {
				SUGARadded = Math.round(data.totalNutrients.SUGARadded.quantity*10)/10+' '+data.totalNutrients.SUGARadded.unit;
			} else {SUGARadded = '-'};

			if (typeof(data.totalNutrients.PROCNT) != "undefined") {
				PROCNT = Math.round(data.totalNutrients.PROCNT.quantity*10)/10+' '+data.totalNutrients.PROCNT.unit;
			} else {PROCNT = '-'};
			if (typeof(data.totalDaily.PROCNT) != "undefined") {
				totalDailyPROCNT = Math.round(data.totalDaily.PROCNT.quantity)+' '+data.totalDaily.PROCNT.unit;
			} else {totalDailyPROCNT = '-'};	

			if (typeof(data.totalNutrients.VITD) != "undefined") {
				VITD = Math.round(data.totalNutrients.VITD.quantity*10)/10+' '+data.totalNutrients.VITD.unit;
			} else {VITD = '-'};
			if (typeof(data.totalDaily.VITD) != "undefined") {
				totalDailyVITD = Math.round(data.totalDaily.VITD.quantity)+' '+data.totalDaily.VITD.unit;
			} else {totalDailyVITD = '-'};	

			if (typeof(data.totalNutrients.CA) != "undefined") {
				CA = Math.round(data.totalNutrients.CA.quantity*10)/10+' '+data.totalNutrients.CA.unit;
			} else {CA = '-'};
			if (typeof(data.totalDaily.CA) != "undefined") {
				totalDailyCA = Math.round(data.totalDaily.CA.quantity)+' '+data.totalDaily.CA.unit;
			} else {totalDailyCA = '-'};	

			if (typeof(data.totalNutrients.FE) != "undefined") {
				FE = Math.round(data.totalNutrients.FE.quantity*10)/10+' '+data.totalNutrients.FE.unit;
			} else {FE = '-'};
			if (typeof(data.totalDaily.FE) != "undefined") {
				totalDailyFE = Math.round(data.totalDaily.FE.quantity)+' '+data.totalDaily.FE.unit;
			} else {totalDailyFE = '-'};	
			
			if (typeof(data.totalNutrients.K) != "undefined") {
				K = Math.round(data.totalNutrients.K.quantity*10)/10+' '+data.totalNutrients.K.unit;
			} else {K = '-'};
			if (typeof(data.totalDaily.K) != "undefined") {
				totalDailyK = Math.round(data.totalDaily.K.quantity)+' '+data.totalDaily.K.unit;
			} else {totalDailyK = '-'};

			var $msg = $('<div class="col-12"></div>');
			$msg.append('<section class="performance-facts" id="performance-facts">'+
						'	<div class="performance-facts__header">'+
						'		<h1 class="performance-facts__title">Nutrition Facts</h1>'+
						'		<p><span id="lnumser">0</span> servings per container</p>'+
						'	</div>'+
						'	<table class="performance-facts__table">'+
						'		<thead>'+
						'			<tr>'+
						'				<th colspan="3" class="amps">Amount Per Serving</th>'+
						'			</tr>'+
						'		</thead>'+
						'		<tbody>'+
						'			<tr>'+
						'				<th colspan="2" id="lkcal-val-cal"><b>Calories</b></th>'+
						'				<td class="nob">'+totalCal+'</td>'+
						'			</tr>'+
						'			<tr class="thick-row">'+
						'				<td colspan="3" class="small-info"><b>% Daily Value*</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th colspan="2"><b>Total Fat</b> '+FAT+'</th>'+
						'				<td><b>'+totalDailyFAT+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<td class="blank-cell"></td>'+
						'				<th>Saturated Fat '+FASAT+'</th>'+
						'				<td><b>'+totalDailyFASAT+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<td class="blank-cell"></td>'+
						'				<th>Trans Fat '+FATRN+'</th>'+
						'				<td></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th colspan="2"><b>Cholesterol</b> '+CHOLE+'</th>'+
						'				<td><b>'+totalDailyCHOLE+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th colspan="2"><b>Sodium</b> '+NA+'</th>'+
						'				<td><b>'+totalDailyNA+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th colspan="2"><b>Total Carbohydrate</b> '+CHOCDF+'</th>'+
						'				<td><b>'+totalDailyCHOCDF+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<td class="blank-cell"></td>'+
						'				<th>Dietary Fiber '+FIBTG+'</th>'+
						'				<td><b>'+totalDailyFIBTG+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<td class="blank-cell"></td>'+
						'				<th>Total Sugars '+SUGAR+'</th>'+
						'				<td></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<td class="blank-cell"></td>'+
						'				<th>Includes '+SUGARadded+' Added Sugars</th>'+
						'				<td></td>'+
						'			</tr>'+	  
						'			<tr class="thick-end">'+
						'				<th colspan="2"><b>Protein</b> '+PROCNT+'</th>'+
						'				<td><b>'+totalDailyPROCNT+'</b></td>'+
						'			</tr>'+
						'		</tbody>'+
						'	</table>'+
						'	<table class="performance-facts__table--grid">'+
						'		<tbody>'+
						'			<tr>'+			  
						'				<th>Vitamin D '+VITD+'</th>'+
						'				<td><b>'+totalDailyVITD+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th>Calcium '+CA+'</th>'+
						'				<td><b>'+totalDailyCA+'</b></td>'+
						'			</tr>'+
						'			<tr>'+
						'				<th>Iron '+FE+'</th>'+
						'				<td><b>'+totalDailyFE+'</b></td>'+			  
						'			</tr>'+
						'			<tr class="thin-end">'+
						'				<th>Potassium '+K+'</th>'+
						'				<td><b>'+totalDailyK+'</b></td>'+
						'			</tr>'+
						'		</tbody>'+
						'	</table>'+
						'	<p class="small-info" id="small-nutrition-info">*Percent Daily Values are based on a 2000 calorie diet</p>'+
						'</section>');

                if(data.ingredients != ""){
              		$.each(data.ingredients, function(i) {

                      if(typeof(data.ingredients[i].parsed) != "undefined"){
                      
                        if (typeof(data.ingredients[i].parsed[0].quantity) != "undefined") {
                            quantity = data.ingredients[i].parsed[0].quantity;
                        } else {quantity = '-'};
                        if (typeof(data.ingredients[i].parsed[0].measure) != "undefined") {
                            measure = data.ingredients[i].parsed[0].measure;
                        } else {measure = '-'};
                        if (typeof(data.ingredients[i].parsed[0].foodMatch) != "undefined") {
                            foodMatch = data.ingredients[i].parsed[0].foodMatch;
                        } else {foodMatch = '-'}; 
                      	if (typeof(data.ingredients[i].parsed[0].weight) != "undefined") {
                            weight = data.ingredients[i].parsed[0].weight;
                        } else {weight = '-'};
                      	if (typeof(data.ingredients[i].parsed[0].nutrients.ENERC_KCAL) != "undefined") {
                            cal = data.ingredients[i].parsed[0].nutrients.ENERC_KCAL.quantity;
                          	unit = data.ingredients[i].parsed[0].nutrients.ENERC_KCAL.unit;
                        } else {cal = '-'};  
                      
                        html += '<tr>'+
                                '	<th>'+quantity+'</th>'+
                                '   <th>'+measure+'</th>'+
                                '   <th>'+foodMatch+'</th>'+
                                '   <th>'+Math.round(cal*10)/10+' '+unit+'</th>'+ 
                          		'   <th>'+Math.round(weight*10)/10+' g</th>'+ 
                                '</tr>';
                      } else {
                      	err = '<span class="addition-e">We cannot calculate the nutrition for some ingredients. Please check the ingredient spelling or if you have entered a quantities for the ingredients.</span>';
                      }
                    });
                }
				$(".demo-result").append(html);
              	$(".demo-result-label").append($msg);
				$(".err-result").append(err);
              
              	$('.calc-analysis-api-new').css('display', 'inline-block');
				$('.loading-area').css('display', 'none');
				$('.content-area').css('display', 'block');              
			},
			error: function () {
              
              	err = '<span class="addition-e">We had a problem analysing this. Please check the ingredient spelling or if you have entered a quantities for the ingredients.</span>';
              	$(".err-result").append(err);

				$('.loading-area').css('display', 'none');
				$('.content-area').css('display', 'block');        
			}        
		});	
    });	  
  
    $('#collapse1').on('show.bs.collapse', function () {
        $('#heading1').css('display', 'none');
    })
    $('#collapse2').on('show.bs.collapse', function () {
        $('#heading2').css('display', 'none');
    })
    $('#collapse3').on('show.bs.collapse', function () {
        $('#heading3').css('display', 'none');
    })
    $('#collapse4').on('show.bs.collapse', function () {
        $('#heading4').css('display', 'none');
    })
    $('#collapse5').on('show.bs.collapse', function () {
        $('#heading5').css('display', 'none');
    })
    $('#collapse6').on('show.bs.collapse', function () {
        $('#heading6').css('display', 'none');
    })    

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
  
    function collapseMenu(selector){    
        $('#heading'+selector).css('display', 'block');
        $('#collapse'+selector).removeClass('in');     
      	addToHeader();      
    }
  
    $('.glyphicon-chevron-up').on('click', function() { 
		collapseMenu($(this).data('line'));
    }); 
  
    $(document).on('click', '.back', function() {
        $(".result-area").fadeOut(300, function(){
            $(".loading-area").fadeIn(200, function(){				
                $('.loading-area').css('display', 'none');
              	$('.content-area').css('display', 'block');
            });
        });        		
    });
  
    $('.search-back').on('click', function() { 
        $(".noresult-area").fadeOut(300, function(){
            $(".loading-area").fadeIn(200, function(){				
                $('.loading-area').css('display', 'none');
              	$('.content-area').css('display', 'block');
            });
        });
    });   
  
    $(".nutrient").change(function() {
        if(this.checked) {
          	$(this).parent('.checkbox-button').addClass('checked');
        } else {
          	$(this).parent('.checkbox-button').removeClass('checked');
          	$(this).parent('.checkbox-button').find('.min').val('');
          	$(this).parent('.checkbox-button').find('.max').val('');
        }
    });

  	$(".q").focus(function(){
  		$('.search.q').parent('.card-body').removeClass('err');
	});
  
  	$(".nut").focus(function(){
      	$('#collapse5').find('.card-body').removeClass('err');
	});
  

  
    function foodDBCall(ingrData) {
      	var cal, pro, fat, carbs, quantity, mlabel, flabel, brand, img;
		var errMsg 		= '';
		var result 		= '';

        var param = encodeURI(ingrData);
            param = param.replace("+", "%2B");
      
		$.ajax({
			url: 'https://api.edamam.com/api/food-database/parser?nutrition-type=logging&app_id=07d50733&app_key=80fcb49b500737827a9a23f7049653b9',
			type: 'GET',
          	data: param,
			//data: {ingr: ingrData},
			success: function(data) {
				console.log(data.parsed);
				if(data.hints == ""){
					result =	'<h4>Food Database</h4>'+
								'<span class="addition-e">Ooops, nothing in our database matches what you are searching for. Please try again</span>';
					$(".foodresult").append(result);
				} else if(data.hints != "") {
					result =	'<h4>Food Database</h4>'+
								'<table class="table-res-recipe">'+
								'  <thead>'+
								'    <tr>'+
								'      <th>Image</th>'+
								'      <th>Qty</th>'+
								'      <th>Unit</th>'+
								'      <th class="col-6">Food</th>'+
								'      <th>Energy</th>'+
								'      <th class="col-2">Nutrients</th>'+
								'    </tr>'+
								'  </thead>'+
								'  <tbody>';
							
						$.each(data.hints, function(i) {
							if (i > 9) {return false};
							if (typeof(data.hints[i].food.nutrients.ENERC_KCAL) != "undefined") {
								cal = '<b>'+Math.floor(data.hints[i].food.nutrients.ENERC_KCAL)+' kcal</b>';
							} else {cal = ''}
							if (typeof(data.hints[i].food.nutrients.PROCNT) != "undefined") {
								pro = 'Protein: <b class="mes">'+Math.floor(data.hints[i].food.nutrients.PROCNT)+' g</b></br>';
							} else {pro = ''}
							if (typeof(data.hints[i].food.nutrients.FAT) != "undefined") {
								fat = 'Fat: <b class="mes">'+Math.floor(data.hints[i].food.nutrients.FAT)+' g</b></br>';
							} else {fat = ''}
							if (typeof(data.hints[i].food.nutrients.CHOCDF) != "undefined") {
								carbs = 'Carbs: <b class="mes">'+Math.floor(data.hints[i].food.nutrients.CHOCDF)+' g</b></br>';
							} else {carbs = ''}

							if (typeof(data.hints[i].food.brand) != "undefined") {
								brand = data.hints[i].food.brand+' - ';
							} else {brand = ''}
							if (typeof(data.hints[i].food.label) != "undefined") {
								flabel = data.hints[i].food.label;
							} else {flabel = ''}   
							if (typeof(data.hints[i].food.image) != "undefined") {
								img = data.hints[i].food.image;
							} else {img = 'https://developer.edamam.com/images/food.png'} 							

							result += 	'<tr>'+
										'	<th><img src="'+img+'"></th>'+
										'	<th>100</th>'+
										'   <th>g</th>'+
										'   <th>'+brand+flabel+'</th>'+
										'   <th>'+cal+'</th>'+
										'   <th class="last">'+pro+fat+carbs+'</th>'+           
										'</tr>';                        

						});
					
						result +=	'	</tbody>'+
									'</table>';
						$(".foodresult").append(result);
						
				}
				$('.loading-area').css('display', 'none');
				$('.result-area').css('display', 'block');
			}
		});	
    }  
  

    $('.analyze-demo').on("click", function() {
      	var q 			= '',
            healt 		= '', 
            diet 		= '',
            calories	= '',
            nutrients	= '';
      
      	if($('.search.q').val() != ''){
          	q = "q="+$('.search.q').val();
        } else {
        	$('.search.q').parent('.card-body').addClass('err');
        	$('#heading1').css('display', 'none');
        	$('#collapse1').addClass('in');
          	exit;
        }
      
        $('input.healt:checked').each(function () {
          	healt += "&healt="+$(this).val();
        });
        $('input.diet:checked').each(function () {
          	diet += "&diet="+$(this).val();
        });
      	if($('.search.cal').val() != ''){
      		calories = "&calories="+$('.search.cal').val();
        }
        $('input.nutrient:checked').each(function () {
          	var min = $(this).parent('.checkbox-button').find('.min').val();
          	var max = $(this).parent('.checkbox-button').find('.max').val();
          	var range = '';
          	if((min!='')&&(max!='')){
            	range = min+'-'+max;
            } else if((min!='')&&(max=='')){
              	range = min+'+';
            } else if((min=='')&&(max!='')){
              	range = max;
            } else if((min=='')&&(max=='')){
            	range = '';
            }
          	
          	if(range != ''){
            	nutrients += "&nutrients["+$(this).val()+"]="+range;
            } else {
                $('#collapse5').find('.card-body').addClass('err');
                $('#heading5').css('display', 'none');
                $('#collapse5').addClass('in');
                exit;              
            }
        });
		
      	$('.content-area').css('display', 'none');
      	$('.loading-area').css('display', 'block');
      
      	$(".result-area").html('');
      	var cal, pro, fat, carbs, img, ingrd, ingr, srv;
      	var html = '<div class="back"><span class="glyphicon glyphicon-chevron-left"></span> Change Search Parameters</div>'+
            	   '<h1>Search Results</h1>'+
				   '<div class="foodresult"></div>'+
            	   '<h4>Recipes</h4>'; 
      
        var param = encodeURI(q+healt+diet+calories+nutrients);
            param = param.replace("+", "%2B");
      
		$.ajax({
			url: 'https://api.edamam.com/search?app_id=900da95e&app_key=40698503668e0bb3897581f4766d77f9',
			type: 'GET',
			data: param,
			success: function(data) {
				
				if(data.hits != "") {

					html += '<table class="table-res-recipe">'+
							'  <thead>'+
							'    <tr>'+
							'      <th>Image</th>'+
							'      <th>Qty</th>'+
							'      <th>Unit</th>'+                      
							'      <th class="col-6">Title</th>'+
							'      <th>Energy</th>'+
							'      <th class="col-2">Nutrients</th>'+          
							'    </tr>'+
							'  </thead>'+
							'  <tbody>';					

					$.each(data.hits, function(i) {
						if (i > 5) {return false};

						if (typeof(data.hits[i].recipe.image) != "undefined") {
							img = '<img src="'+data.hits[i].recipe.image+'">';
						} else {img = ''}

						if (typeof(data.hits[i].recipe.yield) != "undefined") {
							srv = Math.round(data.hits[i].recipe.yield);
						} else {srv = '-'}
                      
						if (typeof(data.hits[i].recipe.label) != "undefined") {
                          	ingr = data.hits[i].recipe.label;
							//ingrd = data.hits[i].recipe.ingredientLines;
							//ingr = ingrd.toString().replace(/\,/g,'</br>');
						} else {ingr = '-'}
						
						if (typeof(data.hits[i].recipe.totalNutrients.ENERC_KCAL.quantity) != "undefined") {
							cal = '<b>'+Math.floor(data.hits[i].recipe.totalNutrients.ENERC_KCAL.quantity)+' kcal</b>';
						} else {cal = ''}
						if (typeof(data.hits[i].recipe.totalNutrients.PROCNT.quantity) != "undefined") {
							pro = 'Protein: <b class="mes">'+Math.floor(data.hits[i].recipe.totalNutrients.PROCNT.quantity)+' g</b></br>';
						} else {pro = ''}
						if (typeof(data.hits[i].recipe.totalNutrients.FAT.quantity) != "undefined") {
							fat = 'Fat: <b class="mes">'+Math.floor(data.hits[i].recipe.totalNutrients.FAT.quantity)+' g</b></br>';
						} else {fat = ''}
						if (typeof(data.hits[i].recipe.totalNutrients.CHOCDF) != "undefined") {
							carbs = 'Carbs: <b class="mes">'+Math.floor(data.hits[i].recipe.totalNutrients.CHOCDF.quantity)+' g</b></br>';
						} else {carbs = ''}

						html += '<tr>'+
								'	<th>'+img+'</th>'+
                          		'	<th>'+srv+'</th>'+
                          		'	<th>servings</th>'+
								'   <th>'+ingr+'</th>'+
								'   <th>'+cal+'</th>'+
								'   <th class="last">'+pro+fat+carbs+'</th>'+           
								'</tr>';
					});
					
					html += '	</tbody>'+
							'</table>';
				  
					$(".result-area").append(html);
					//$('.loading-area').css('display', 'none');
					//$('.result-area').css('display', 'block');
				  
				} else {					
					html += '<span class="addition-e">Ooops, nothing in our database matches what you are searching for. Please try again</span>';	
							
					$(".result-area").append(html);
					//$('.loading-area').css('display', 'none');
					//$('.result-area').css('display', 'block');
					//$('.noresult-area').css('display', 'block');				
				}
              
				foodDBCall('ingr='+$('.search.q').val()+healt+diet+calories+nutrients);
				
			}
		});

    });	
  	$('.calc-analysis-api-new').on("click", function() {
    	location.reload();
    });
});