function valide_login(){
	if(document.formlogin.user.value.length === 0){
		document.getElementById('e_user').innerHTML = "Tienes que escribir el usuario";
		document.formlogin.user.focus();
		return 0;
	}
	document.getElementById('e_user').innerHTML = "";

	if(document.formlogin.password.value.length === 0){
		document.getElementById('e_password').innerHTML = "Tienes que escribir la contraseña";
		document.formlogin.password.focus();
		return 0;
	}
	document.getElementById('e_password').innerHTML = "";
}