<?php

function encode($user_name){
////////////////////////////////////////////////
    //https://github.com/miguelangel-nubla/JWT-PHP//
    ////////////////////////////////////////////////
   
    require_once "JWT.php";
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'lapalmerasedoblaperoaguantaelhuracan';

    /////////////////////////// hachemico ////////////////////////////////////////
    //iat: Tiempo que inició el token
    //exp: Tiempo que expirará el token (+1 hora)
    //name: info user
    $payload = {
        "iat":time(), 
        "exp":time() + (60*60),
        "name": $user_name
    };

    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
    // echo 'JWT encode usuario: >>> '.$token."\n\n"; echo '<br>';

    return $token;
}

function decode(){
    $json = $JWT->decode($token, $secret);
    echo 'JWT decode usuario: >>> '.$json."\n\n"; echo '<br>'; echo '<br>';
}
?>