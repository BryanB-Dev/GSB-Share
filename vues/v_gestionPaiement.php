<h3>Gestion Mode de paiement :</h3>
<div style="margin-left:170px">
    <caption>Changer les modes de paiements</caption>
    <?php foreach ($paiements as $paiement) {
        $idPaiement = $paiement['id'];
        $libPaiement = $paiement['libelle'];
    ?>
        <form method='POST' action="index.php?uc=gestionPaiement&action=changerLib">
            <input type="text" name="libPaiement" style="width:200px" value="<?php echo $libPaiement ?>">
            <input hidden type="text" name="idPaiement" value="<?php echo $idPaiement ?>">
            <input type="submit" value="Changer">
        </form>

        <form method="POST" action="index.php?uc=gestionPaiement&action=supprimerPaiement">
            <input hidden type="text" name="idPaiement" value="<?php echo $idPaiement ?>">
            <input <?php
                    $disabled = $pdo->checkPaiement($idPaiement);
                    if ($disabled['ligne'] != 0) { ?> disabled title="Il reste encore des fiches avec ce mode de paiement" <?php } ?> type="submit" value="Supprimer">
        </form>

    <?php } ?>
    <form method="POST" action="index.php?uc=gestionPaiement&action=ajouterPaiement">
        <input type="text" name="libPaiement">
        <input type="submit" value="ajouter">
    </form>
</div>