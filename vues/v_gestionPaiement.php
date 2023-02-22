<h3>Gestion Mode de paiement :</h3>
<div style="margin-left:170px">
    <caption>Changer les modes de paiements</caption>
    <?php foreach ($paiements as $paiement) {
        $idPaiement = $paiement['id'];
        $libPaiement = $paiement['libelle'];
    ?>
        <form method='POST' action="index.php?uc=gestionPaiement&action=changerLib">
            <input type="text" name="libPaiement" style="width:200px" value="<?php echo $libPaiement ?>"></option>
            <input hidden type="text" name="idPaiement" value="<?php echo $idPaiement ?>"></option>
            <input type="submit" value="Changer">
        </form>
    <?php } ?>
</div>