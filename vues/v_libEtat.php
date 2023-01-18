<h3>Libelle Etat :</h3>
<div style="margin-left:170px">
    <caption>Changer libelle etat</caption>
    <?php foreach($etats as $etat) {
        $idEtat = $etat['id'];
        $libEtat = $etat['libelle'];
    ?>
    <form method='POST' action="index.php?uc=libEtat&action=changerLib">
        <input type="text" name="libEtat" style="width:200px" value="<?php echo $libEtat ?>"></option>
        <input hidden type="text" name="idEtat" value="<?php echo $idEtat ?>"></option>
        <input type="submit" value="Changer">
    </form>
    <?php } ?>
</div>