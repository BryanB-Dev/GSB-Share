<?php
include("vues/v_admin.php");
$fiches = $pdo->getFiches();
$etats = $pdo->getEtat();
include("vues/v_listeFiche.php");
$action = $_REQUEST['action'];

switch ($action) {
	case 'changerEtat': {
			$etat = $_REQUEST['etat'];
			$id = $_REQUEST['idFiche'];
			$pdo->changeEtat($id, $etat);
			header('Location: /index.php?uc=ficheFrais');
			break;
		}
}
