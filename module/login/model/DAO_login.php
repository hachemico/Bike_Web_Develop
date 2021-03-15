<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
    include($path ."model/connect.php");
    // include($path ."module/homes/model/Dates.php");
    
	class DAOlogin{
        function insert_user(){
            // $nombre=$_POST['user'];
            // $email=$_POST['mail'];
            // $passw=$_POST['password'];
            // $type="client";
            // $hashed_pass = password_hash($passw, PASSWORD_DEFAULT);
            // $hashavatar= md5( strtolower( trim( $email ) ) );
            // $avatar="https://www.gravatar.com/avatar/$hashavatar?s=40&d=identicon";
            // $sql ="INSERT INTO `users`(`name`, `email`, `userpass`, `type`, `avatar`)
            // VALUES ('$nombre','$email','$hashed_pass','$type', '$avatar')";

            // $conexion = connect::con();
            // $res = mysqli_query($conexion, $sql);
            // connect::close($conexion);
            // return $res;
        }
        function select_user(){
            // $email=$_GET['mail'];
            // $sql = "SELECT * FROM users WHERE email='$email'";

            // $conexion = connect::con();
            // $res = mysqli_query($conexion, $sql)->fetch_object();;
            // connect::close($conexion);
            // return $res;
        }
    }