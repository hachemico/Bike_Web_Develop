<?php 
	$path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
    include($path . "/module/login/model/DAO_login.php");
    // include($path . "module/login/model/valide.php");
	// @session_start();

    switch ($_GET['op']) {

		case 'list_login':
			include("module/login/view/form_login.html");
			break;
		
        case 'list_register':
            include("module/login/view/form_register.html");
            break;    

		case 'valide_user':
		
				try {
					$daoreg = new DAO_login();
					$rdo = $daoreg->select_user($_POST['user_email']);
	
				} catch (Exception $e) {
					echo json_encode("error");
				}
				// echo json_encode($rdo);
				if ($rdo->num_rows === 0) {
					echo json_encode('false');
				} else {
					echo json_encode('true');
				}
		break;
		case 'register':
			
					try {
						
						 $daologin = new DAO_login();
						 $rdo = $daologin->insert_user($_POST['user_name'], $_POST['user_surname'], $_POST['user_user'], $_POST['user_email'], $_POST['user_passwd']);
						//  echo($rlt);
					} catch (Exception $e) {
						echo "Error al registrarse";
						exit();
					}
					if(!$rdo){
						echo "Error al registrarse";
						exit();
					}else{
					
						echo json_encode("Registrado Correctamente");
					}	
				
			break;	

			case 'login':
				// echo json_encode("Dentro Case LOGIN: >>>");
				$mail_log=$_POST['user_log_email'];
				$passwd_log=$_POST['user_log_passwd'];
				//  echo json_encode($passwd);
				//  echo json_encode($passwd);
				try {
					$daologin = new DAO_login();
					$rdo = $daologin->login_user($mail_log,$passwd_log);
				} catch (Exception $e) {
					echo json_encode("DEBUG error");
					exit();
				}
				// $value = get_object_vars($rdo);
				 echo json_encode($rdo);	
				// if(!$rdo){
				
				// 	 echo json_encode("DEBUG El usuario no existe");
				// 	exit();
				// }else{
				// 	$value = get_object_vars($rdo);

				// 	if (password_verify($_POST['user_log_passwd'],$value['passwd'])) {
				// 		echo json_encode("DEBUG Passwd correcto");
				// 		// if (isset($_SESSION['purchase']) && $_SESSION['purchase'] === 'on')
				// 		// 	echo 'okay';
				// 		// else
				// 		// 	echo 'ok';
				// 		// $_SESSION['type'] = $value['type'];
				// 		// $_SESSION['user'] = $value['user'];
				// 		// $_SESSION['tiempo'] = time();
				// 		// exit();
				// 	}else {
						
				// 		 echo json_encode(" DEBUG No coinciden los datos");
				// 		exit();
				// 	}
				// }	
				break;			
		
		default:
			include("view/inc/error404.php");
			break;

        
	}