
<?php
$titrePage = 'Votre panier - Real Sound';
    include('includes/head.php');
    include('includes/header.php');
?>

<section class="colonnecentre taillevieux">
    <div id="invitCo" class="masque invitCo">
        <a>Pour commander le contenu de votre panier, pensez à vous </a>
        <a href="evalhtmlcssjs_login_remiPlateau.html">connecter.</a>
        <a><br>Pas de compte ? vous pouvez en créer un en </a>
        <a href="evalhtmlcssjs_register_remiPlateau.html">cliquant ici.</a>
    </div>
    <table class="tableau1" id="tableauUser">
        <thead>
            <tr>
                <th scope="col" class="titre">Nom</th>
                <th scope="col" class="quantite">Prénom</th>
                <th scope="col" class="total">Date</th>
            </tr>
            <tbody>
                <td class="titre" id="nomUser"></td>
                <td class="quantite" id="prenomUser"></td>
                <td class="total" id="dateUser"></td>
            </tbody>
        </thead>
    </table>

    <p class="" id="paniervide">Votre panier est vide</p>

    <table class="tableau1 masque" id="tableau1">
        <thead>
            <tr>
                <th scope="col" class="titre">Titre</th>
                <th scope="col" class="quantite">Quantité</th>
                <th scope="col" class="total">Prix du lot</th>

            </tr>
        </thead>
        <tbody>
            <tr class="masque" id="ligne1">
                <td class="titre" id="titre1"></td>
                <td class="quantite"><input type="number" id="qtite1" min="1"></td>
                <td class="total" id="total1"></td>
                <td class="suppr"><button id="suppr1">Enlever du panier</button></td>
            </tr>
            <tr class="masque" id="ligne2">
                <td class="titre" id="titre2"></td>
                <td class="quantite"><input type="number" id="qtite2" min="1"></td>
                <td class="total" id="total2"></td>
                <td class="suppr"><button id="suppr2">Enlever du panier</button></td>
            </tr>
            <tr class="masque" id="ligne3">
                <td class="titre" id="titre3"></td>
                <td class="quantite"><input type="number" id="qtite3" min="1"></td>
                <td class="total" id="total3"></td>
                <td class="suppr"><button id="suppr3">Enlever du panier</button></td>
            </tr>
        </tbody>
        <tfoot>
            <th scope="row" colspan="2" class="white">Totale</th>
            <td id="Total" class="total"></td>
        </tfoot>
    </table>



</section>

<script src="ehcj_panier_remiPlateau.js"></script>
</body>

</html>