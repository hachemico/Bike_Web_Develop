function valide_register(){

	console.log("DEBUG INTO >> VALIDE_REGISTER >>>");

	var mailp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	
	if(document.form_register.user_name.value.length === 0){
		console.log("Dentro del user_name");
		document.getElementById('user_name').innerHTML = "Tienes que escribir el nombre";
		document.form_register.user_name.focus();
		return 0;
	}
	if(document.form_register.user_name.value.length < 2){
		console.log("Dentro del user_name2");
		document.getElementById('user_name').innerHTML = "El nombre tiene que tener más de 2 caracteres";
		document.form_register.user_name.focus();
		return 0;
	}
	document.getElementById('user_name').innerHTML = "";

	// if(document.formregister.surname.value.length === 0){
	// 	document.getElementById('e_surname').innerHTML = "Tienes que escribir el apellido";
	// 	document.formregister.surname.focus();
	// 	return 0;
	// }
	// if(document.formregister.surname.value.length <= 2){
	// 	document.getElementById('e_surname').innerHTML = "El apellido tiene que tener más de 2 caracteres";
	// 	document.formregister.surname.focus();
	// 	return 0;
	// }
	// document.getElementById('e_surname').innerHTML = "";

	// if(document.formregister.user.value.length === 0){
	// 	document.getElementById('e_userr').innerHTML = "Tienes que escribir el usuario";
	// 	document.formregister.user.focus();
	// 	return 0;
	// }
	// if(document.formregister.surname.value.length <= 2){
	// 	document.getElementById('e_userr').innerHTML = "El usuario tiene que tener más de 2 caracteres";
	// 	document.formregister.surname.focus();
	// 	return 0;
	// }
	// document.getElementById('e_userr').innerHTML = "";

	// if(document.formregister.mail.value.length === 0){
	// 	document.getElementById('e_mail').innerHTML = "Tienes que escribir el mail";
	// 	document.formregister.mail.focus();
	// 	return 0;
	// }
	// if(!mailp.test(document.formregister.mail.value)){
	// 	document.getElementById('e_mail').innerHTML = "El formato del mail es invalido";
	// 	document.formregister.mail.focus();
	// 	return 0;
	// }
	// document.getElementById('e_mail').innerHTML = "";

	// if(document.formregister.password.value.length === 0){
	// 	document.getElementById('e_passwordr').innerHTML = "Tienes que escribir la contraseña";
	// 	document.formregister.password.focus();
	// 	return 0;
	// }
	// if(document.formregister.password.value.length < 6){
	// 	document.getElementById('e_passwordr').innerHTML = "La contraseña tiene que tener más de 6 caracteres";
	// 	document.formregister.password.focus();
	// 	return 0;
	// }
	// document.getElementById('e_passwordr').innerHTML = "";

	// if(document.formregister.rpassword.value.length === 0){
	// 	document.getElementById('e_rpasswordr').innerHTML = "Tienes que escribir la contraseña";
	// 	document.formregister.rpassword.focus();
	// 	return 0;
	// }
	// if(document.formregister.rpassword.value != document.formregister.password.value){
	// 	document.getElementById('e_rpasswordr').innerHTML = "La contraseña tiene que ser la misma";
	// 	document.formregister.rpassword.focus();
	// 	return 0;
	// }
	// document.getElementById('e_rpasswordr').innerHTML = "";
}	$("#form_register").submit(function (e) {
	console.log("DEBUG PRE PreventDefault on SUBMIT >>>");
	e.preventDefault();
	console.log("DEBUG POST PreventDefault on SUBMIT >>>");

	// if (valide_register() != 0) {
	// 	var data = $("#formregister").serialize();
	// 	$.ajax({
	// 		type : 'POST',
	// 		url  : 'module/login/controller/controller_login.php?&op=register&' + data,
	// 		data : data,
	// 		beforeSend: function(){	
	// 			console.log(data)
	// 			$("#error_register").fadeOut();
	// 		},
	// 		success: function(response){						
	// 			if(response==="ok"){
	// 				localStorage.setItem("user", data.name);
	// 				localStorage.setItem("type", data.type);
	// 				localStorage.setItem("avatar", data.avatar);
	// 				localStorage.setItem("email", data.email);
	// 				setTimeout(' window.location.href = "index.php?page=controller_home&op=list"; ',1000);
	// 			}else if (response=="okay") {
	// 				alert("Debes realizar login para completar tu compra");
	// 				setTimeout(' window.location.href = window.location.href; ',1000);
	// 			}else{
	// 				$("#error_register").fadeIn(1000, function(){						
	// 					$("#error_register").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
	// 				});
	// 			}
	// 	  }
	// 	});
	// }
});