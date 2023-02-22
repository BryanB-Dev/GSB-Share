<?php
include("vues/v_admin.php");
$paiements = $pdo->getPaiements();
include("vues/v_gestionPaiement.php");

$action = $_REQUEST['action'];

switch ($action) {
	case 'changerLib': {
			$lib = $_REQUEST['libPaiement'];
			$id = $_REQUEST['idPaiement'];
			$pdo->changeLibPaiement($id, $lib);
			header('Location: /index.php?uc=gestionPaiement');
			break;
		}
}
