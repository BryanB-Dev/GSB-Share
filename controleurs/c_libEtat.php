<?php
include("vues/v_admin.php");
$etats=$pdo->getEtat();
include("vues/v_libEtat.php");

$action = $_REQUEST['action'];

switch($action){
	case 'changerLib':{
            $lib = $_REQUEST['libEtat'];
            $id = $_REQUEST['idEtat'];
			$pdo->changeLib($id, $lib);
            header('Location: /index.php?uc=libEtat');
		break;
	}
}