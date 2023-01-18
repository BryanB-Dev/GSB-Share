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
	    foreach( $fiches as $fiche) 
		{
            $id = $fiche['id'];
            $prenom = $fiche['prenom'];
            $nom = $fiche['nom'];
			$mois = $fiche['mois'];
			$etat = $fiche['etat'];
			$montant=$fiche['montant'];
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
                <label for="etat-select">Etat : <?php echo $etat ?></label>
    
                <select name="etat" id="etat-select">
                    <option value="">Choisir etat</option>
                    <option value="CL">Saisie clôturée</option>
                    <option value="CR">Fiche créée, saisie en cours</option>
                    <option value="RB">Remboursée</option>
                    <option value="VA">Validée et mise en paiement</option>
                </select>
                <input type="submit" value="Valider">
                <input hidden name="idFiche" type="text" value="<?php echo $id ?>">
            </form>
        </td>
    </tr>
    <?php } ?>