function register(){

        console.log("DEBUG dentro REGISTER >>>");
         if (valide_register() != 0) {

            console.log("DEBUG valide register OK >>>");
            var userinfo = $("#form_register").serialize();
            console.log("DEBUG valor DATA: "+ userinfo);
               
                ajax_reg('module/login/controller/controller_login.php?&op=valide_user&', userinfo)
                    .then(function (data) {

                        if(data === '"false"'){
                            console.log("DEBUG data No hay usuario con ese nick + email >>> ");

                            ajax_reg('module/login/controller/controller_login.php?&op=register&', userinfo)
                                .then(function (data_reg) {
                                    console.log("DEBUG valor data_reg: >>> "+data_reg);
                                    $("#show_reg_dialog").html('<span style="color: green ;"> Usuario Registrado correctamente </span>');
                                    setTimeout('window.location.href ="index.php?page=controller_home&op=list";',1000);
                            }) //end_ajax_reg
                        
                        }else if(data === '"true"'){
                            console.log("DEBUG data Usuario con ese nick + email >>> ");
                            $("#show_reg_dialog").html('<span style="color: red ;"> El usuario ya existe. </span>');
                        }//end_if_else
                }) //end_ajax_reg
        } //end_if
}//end_register

var ajax_reg = function (url, data) { // Funcion ajax_reg con promise

    console.log(data)

    return new Promise(function (resolve) {
        $.ajax({
            type: "POST",
            url: url,
            data: data
        })
            .done(function (data) {
                resolve(data);
            })
    })
};
function register_button(){

    $("#register-button").click(function(){
        console.log("DEBUG CARGA EL JS. REGISTER GO GO >>>");
        setTimeout('window.location.href ="index.php?page=controller_login&op=list_register";',1000);
    });
}
function register_submit(){
   
    $("#register_input").click(function (e) {
        console.log("DEBUG on SUBMIT >>>");
        e.preventDefault();
        register();
    });
}
function register_keydown(){

    $('#form_register').keypress(function (e) {
        console.log("DEBUG keydown register >>>");
        if (e.which == 13) {
            console.log("DEBUG pressEnter register >>>");
             e.preventDefault();
            register();
        }
    });  
}

$(document).ready(function () {
    register_button();
    register_submit();
    register_keydown();
    
    });