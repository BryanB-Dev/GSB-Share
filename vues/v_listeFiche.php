<h3>Fiches frais :</h3>
<table class="listeLegere">
    <caption>Descriptif des éléments hors forfait
    </caption>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Mois</th>
        <th>Montant</th>
        <th>Date Modif.</th>
        <th>Justificatifs</th>
        <th>Etat</th>
    </tr>

    <?php    
        ob_start();
	    foreach($fiches as $fiche) 
		{
            $id = $fiche['id'];
            $prenom = $fiche['prenom'];
            $nom = $fiche['nom'];
			$mois = $fiche['mois'];
			$etat = $fiche['etat'];
			$montant = $fiche['montant'];
			$dateModif = $fiche['dateModif'];
            $nbJustificatifs = $fiche['nbJustificatifs'];
	?>
    <tr>
        <td>
            <?php echo $prenom ?>
        </td>
        <td>
            <?php echo $nom ?>
        </td>
        <td>
            <?php echo $mois ?>
        </td>
        <td>
            <?php echo $montant ?>
        </td>
        <td>
            <?php echo $dateModif ?>
        </td>
        <td>
            <?php echo $nbJustificatifs ?>
        </td>
        <td>
            <form method='POST' action="index.php?uc=ficheFrais&action=changerEtat">
                <div>
                    <label for="etat-select">Etat : <?php echo $etat ?></label>
                </div>
                <div>
                    <select name="etat" id="etat-select">
                        <option value="">--Changer Etat--</option>
                        <?php
                        foreach($etats as $etat) 
                        {
                            $idEtat = $etat['id'];
                            $libEtat = $etat['libelle'];
                        ?>
                        <option value="<?php echo $idEtat ?>"><?php echo $libEtat ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Valider">
                    <input hidden name="idFiche" type="text" value="<?php echo $id ?>">
                </div>
            </form>
        </td>
    </tr>
<?php } ?>