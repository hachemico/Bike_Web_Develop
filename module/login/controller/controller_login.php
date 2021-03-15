<?php 
	$path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
    // include($path . "module/login/model/DAO_login.php");
    // include($path . "module/login/model/valide.php");
	// @session_start();

    switch ($_GET['op']) {

		case 'list_login':
			// if (isset($_GET['purch']) && $_GET['purch'] === 'on'){
			// 	$_SESSION['purchase'] = $_GET['purch'];
			// }
			include("module/login/view/form_login.html");
			break;
		
            case 'list_register':
                // if (isset($_GET['purch']) && $_GET['purch'] === 'on'){
                // 	$_SESSION['purchase'] = $_GET['purch'];
                // }
                include("module/login/view/form_register.html");
                break;       
		default:
			include("view/inc/error404.php");
			break;

        
	}