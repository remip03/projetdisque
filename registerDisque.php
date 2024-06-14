
<?php
$titrePage = 'Inscription - Real Sound';
    include('includes/head.php');
    include('includes/header.php');
?>

      <!-- partie register -->
    <section>
        <div class="colonnecentre taillevieux intro">
            <p>Bienvenue sur le site de Real Sound.</p>
            <p>En vous enregistrant, vous pourrez profiter de toutes nos offres.</p>
            <p>(bientôt disponible)</p>
        </div>
        
        <div class="lignespace">
            <div class="colonnegauche marge">
                <label for="nomUser">Nom</label>
                <input type="text" id="nomUser" class="taillevieux" maxlength="60" size="65" placeholder="Entrez votre nom">
                <p class="erreur" id="erreurNom">error</p>
            </div>
            <div class="colonnegauche marge">
                <label for="prenomUser">Prénom</label>
                <input type="text" id="prenomUser" class="taillevieux" maxlength="60" size="65" placeholder="Entrez votre prénom">
                <p class="erreur" id="erreurPrenom">error</p>
            </div>
        </div>        
        <div class="colonnecentre marge">
            <div class="colonnegauche">
                <label for="mailUser">Adresse mail</label>
                <input type="email" id="mailUser" class="taillevieux" maxlength="100" size="105" placeholder="Entrez votre adresse mail">
                <p class="erreur" id="erreurMail">error</p>
            </div>
            <div class="colonnegauche marge">
                <label for="motdpUser">Votre mot de passe doit contenir au minimum 10 caractères dont au moins une minuscule, une majuscule, un chiffre et un caractère spéciale.</label>
                <input type="password" id="motdpUser" class="taillevieux" maxlength="60" size="65" placeholder="Entrez votre mot de passe">
                <p class="erreur" id="erreurMotdp">error</p>
            </div>
            <div class="colonnegauche marge">
                <label for="confirmotdpUser">Confirmer votre mot de passe</label>
                <input type="password" id="confirmotdpUser" class="taillevieux" maxlength="60" size="65" placeholder="Confirmez votre mot de passe">
                <p class="erreur" id="erreurConfirMotdp">error</p>
            </div>
            <input type="submit" class="boutton" id="envoyer">
        </div>
    </section>
      <!-- partie register -->

</body>

</html>