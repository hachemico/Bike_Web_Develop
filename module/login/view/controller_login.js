
function login(){
    console.log("DEBUG CARGA EL JS. LOGIN >>>")

    $("#login-button").click(function(){
        console.log("DEBUG CARGA EL JS. LOGIN GO GO >>>");
        setTimeout('window.location.href ="index.php?page=controller_login&op=list_login";',1000);

    });
  
    
}

function register(){
    console.log("DEBUG CARGA EL JS. REGISTER >>>")
      
    $("#register-button").click(function(){
        console.log("DEBUG CARGA EL JS. REGISTER GO GO >>>");
        setTimeout('window.location.href ="index.php?page=controller_login&op=list_register";',1000);
    });
       

  
}

$(document).ready(function () {
    login();
    register();
    });