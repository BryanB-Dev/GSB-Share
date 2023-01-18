<div id="menuGauche">
    <div id="infosUtil">
        <h2>
        </h2>
    </div>
    <ul id="menuList">
        <li>
            DAF :<br>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </li>
        <li class="smenu">
            <a href="index.php?uc=ficheFrais" title="Saisie fiche de frais ">Saisie fiche de
                frais</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>