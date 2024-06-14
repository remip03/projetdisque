
<?php
$titrePage = 'Se connecter - Real Sound';
    include('includes/head.php');
    include('includes/header.php');
?>

      <!-- formulaire login -->
    <section class="colonnecentre">
        <div class="colonnegauche marge">
            <label for="mail">Identifiants : (adresse mail)</label>
            <input type="email" id="mail" class="taillevieux" maxlength="100" size="105" placeholder="Entrez votre adresse mail">
            <p class="erreur" id="erreurMail">error</p>
        
        <div class="colonnegauche marge">
            <label for="motdp">Mot de passe</label>
            <input type="password" id="motdp" class="taillevieux" maxlength="60" size="65" placeholder="Entrez votre mot de passe">
            <p class="erreur" id="erreurMotdp">error</p>
        </div>
            <button type="button" id="boutton" onclick="connexion(event)">Se connecter</button>
    </section>
      <!-- fin du formulaire login -->

    <script src="evalhtmlcssjs_login_remiPlateau.js"></script>
</body>

</html>