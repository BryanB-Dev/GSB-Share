<div id="menuGauche">
    <div id="infosUtil">
        <h2>
        </h2>
    </div>
    <ul id="menuList">
        <li>
            DAF :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom']  ?>
        </li>
        <li class="smenu">
            <a href="index.php?uc=ficheFrais" title="Saisie fiche de frais ">Liste Fiches de Frais</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=libEtat" title="Saisie libelle etat ">Saisie libelle etat</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>