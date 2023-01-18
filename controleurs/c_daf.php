<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_daf.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$daf = $pdo->getInfosDAF($login,$mdp);
		if(!is_array($daf)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_daf.php");
		}
		else{
			$id = $daf['id'];
			$nom =  $daf['nom'];
			$prenom = $daf['prenom'];
			connecter($id,$nom,$prenom);
			include("vues/v_admin.php");
		}
		break;
	}
	default :{
		include("vues/v_daf.php");
		break;
	}
}
?>