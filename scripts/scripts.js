//Скрипты login.php

$("#lgnForm").submit(function(e) {
	 e.preventDefault(); // avoid to execute the actual submit of the form.
    var url = "scripts/log_check.php"; // the script where you handle the form input.

			
    $.ajax({
           type: "POST",
           url: url,
           data: $("#lgnForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
			if(data==1){
			   $("#id01").hide();
			   $("#myModal").find("p").text("Вы успешно вошли в систему! Вы будете перенаправленны на главную страницу через 3 секунды.");
			   $("#myModal").show();
			   setTimeout(function() {
				window.location.href = "index.php";
				}, 3000);
			}
			else{
				$("#id01").hide();
			   $("#myModal").find("p").text("Пользователей с такими данными не найденно!");
			   $("#myModal").show();
			    setTimeout(function() {
				 $("#myModal").hide();
				}, 2000);
			}
              
           }
         });

   
});

$(document).ready(function(){
	
	$('#id02').find("input").keyup( function(){
	//$('#id02').find("input[name='login']").keyup( function(){
		 var id = $(this).attr('name');
         var val = $(this).val();
		 var event = jQuery.Event('keypress');
		event.which = 13; 
		event.keyCode = 13; 
		jQuery(this).trigger(event); 

			switch(id){
				
				// Условия проверки логина
				case 'login':
					var rv_name = /^[a-zA-Z0-9_.-]+$/;
					if(val.length > 2 && val.length < 15 && val != '' && rv_name.test(val))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
					
				//Условия проверки имени	
				case 'name':
					var rv_name = /^[a-zA-Zа-яА-Я0-9_.-]+$/;
					if(val.length > 2 && val.length < 15 && val != '' && rv_name.test(val))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
				
				//Условия проверки фамилии	
				case 'surname':
					var rv_name = /^[a-zA-Zа-яА-Я0-9_.-]+$/;
					if(val.length > 2 && val.length < 15 && val != '' && rv_name.test(val))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
					
				//Условия проверки отчества
				case 'fathername':
					var rv_name = /^[a-zA-Zа-яА-Я0-9_.-]+$/;
					if(val.length > 2 && val.length < 15 && val != '' && rv_name.test(val))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
					
				//Условия проверки email	
				case 'email':
					var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
					if(val != '' && rv_email.test(val))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
					
				//Условия проверки пароля	
				case 'password':
					var rep_psw=$('#id02').find("input[name='repeat-password']").val();
					if((val != '' && val.length > 4))
					{
						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					
					else
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					break;
					
					
				//<Условия проверки для повтора пароля	
				case 'password-repeat':
					var psw=$('#id02').find("input[name='password']").val();
						var pass 		= $('#id02').find("input[name='password']").val();
						var pass_rep 	= $('#id02').find("input[name='password-repeat']").val();
					 if (pass != pass_rep)
					{
						$(this).removeClass("Valide");
						$(this).addClass("Unvalide").css({"color": "red", "border": "2px solid red"});
						jQuery(this).trigger(event); 
					}
					
					else
					{

						$(this).removeClass("Unvalide");
						$(this).addClass("Valide").css({"color": "green", "border": "2px solid green"});
						jQuery(this).trigger(event); 
					}
					break;
					
			}
	});
});

$("#rgsrForm").submit(function(e) {
	
	 e.preventDefault(); // avoid to execute the actual submit of the form.
    var url = "scripts/reg_check.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#rgsrForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
		   if (data==1){
			$("#id02").hide();
			$("#myModal").find("p").text("Вы успешно зарегестрировались! Вы будете перенаправленны на страницу входа через 3 секунды.");
			$("#myModal").show();
			setTimeout(function() {
				$("#myModal").hide();
				$("#id01").show();
			}, 3000);  
		   }

		   switch(data){				
				case "Пароли не совпадают!":
					$("#id02").hide();
					$("#myModal").find("p").text("Пароли не совпадают!");
					$("#myModal").show();
					setTimeout(function() {
							$("#myModal").hide();
							$("#id02").show();
					}, 1500);
					break;
					
				case "Пользователь с таким логином уже есть!":
					$("#id02").hide();
					$("#myModal").find("p").text("Пользователь с таким логином уже есть!");
					$("#myModal").show();
					setTimeout(function() {
							$("#myModal").hide();
							$("#id02").show();
					}, 1500);
					break;
					
				case "Пользователь с таким почтовым адрессом уже существует!":
										$("#id02").hide();
					$("#myModal").find("p").text("Пользователь с таким почтовым адрессом уже существует!");
					$("#myModal").show();
					setTimeout(function() {
							$("#myModal").hide();
							$("#id02").show();
					}, 1500);
					break;
		   }
           }
         });

   
});

//Скрипты index.php


//Кнопка выхода
	$("#logoutBtn").click(function(e){
		e.preventDefault();
		$("#indModal").show();
		$("#indModal").find("p").text('Вы уверенны что хотите выйти?');
		});
//Событие сброс сессии
	$("#indModal").find(".signupbtn").click(function(e){

		 var url = "scripts/logout.php";
    $.ajax({
           type: "POST",
		   dataType: "text",
           url: url,
           data: ({request:"logout"}),
		   success: function(data)
	{
	if(data==1){
			$("#indModal").hide();
			location.reload();
		}
	}

           
         });
	
	});