<?php
       $path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
       include($path . "/model/connect.php");
       // include($path ."module/homes/model/Dates.php");
    
	class DAO_login{
        
         function select_user($user_email){
            
            $sql = "SELECT * FROM user WHERE email='$user_email'";
            $connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;

		}//end_valide_user


        function insert_user(){
            
            $nombre=$_POST['user_user'];
            $email=$_POST['user_email'];
            $passwd=$_POST['user_passwd'];
            $type="client";
            $hashed_pass = password_hash($passwd, PASSWORD_DEFAULT);
            $hashavatar= md5( strtolower( trim( $email ) ) );
            $avatar="https://www.gravatar.com/avatar/$hashavatar?s=40&d=identicon";

            $sql ="INSERT INTO user(name, email, passwd, type, avatar)
             VALUES ('$nombre','$email','$hashed_pass','$type', '$avatar')";

            $connection = connect::con();
            $res = mysqli_query($connection, $sql);
            connect::close($connection);
            return $res;

        }//end_insert_user

        function login_user(){

            $email=$_POST['user_log_email'];
            $passwd=$_POST['user_log_passwd'];
            
            $sql = "SELECT * FROM user WHERE email='$user_log_email'";
            $connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			

            if (password_verify($_POST['user_log_passwd'],$res['passwd'])) {
                 $rdo='hola';
            }else{
                 $rdo='false';
            }

            return $rdo;
        }
    
    }//end_class_DAO
?>