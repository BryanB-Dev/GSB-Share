<div id="contenu">
    <h2>Identification DAF</h2>

    <form method="POST" action="index.php?uc=daf&action=valideConnexion">
        <p>
            <label for="nom">Login*</label>
            <input id="login" type="text" name="login" size="30" maxlength="45">
        </p>
        <p>
            <label for="mdp">Mot de passe*</label>
            <input id="mdp" type="password" name="mdp" size="30" maxlength="45">
        </p>
        <input type="submit" value="Valider" name="valider">
        <input type="reset" value="Annuler" name="annuler">
        </p>
    </form>

    <form method="POST" action="index.php?uc=visiteur">
        <p>
            <input type="submit" value="Visiteur" name="Visiteur">
        </p>
    </form>
</div>