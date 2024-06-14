
<?php
$titrePage = 'Nos produits - Real Sound';
    include('includes/head.php');
    include('includes/header.php');
?>

<section>
    <!-- message de bienvenue -->
    <div class="intro" id="intro">
        <a>Bienvenue </a>
        <a id="prenomUser"></a>
        <a>, tu t'es connecté le : </a>
        <a id="dateUser"></a>
        <a> à : </a>
        <a id="heureUser"></a>
    </div>
    
    <!-- liste des produits -->
    <div class="ligne">
        <div class="colonnecentre taillevieux gold marge">
            <img src="img/billieeilish.png" class="image marge"/>
            <a id="description1" class="marge">Billie Eilish - Happier Tan Ever Double vinyle exclusif multi couleur</a>
            <a id="prix1" class="marge">39,99€</a>
            <button class="marge" id="boutton1">Ajouter au panier</button>
        </div>
        <div class="colonnecentre taillevieux gold marge">
            <img src="img/taylorswift.png" class="image marge"/>
            <a id="description2" class="marge">Taylor Swift - The tortured Poets Departement + Titre Bonus "The Manuscript" - Double vinyle Phantom Clear</a>
            <a id="prix2" class="marge">38,99€</a>
            <button class="marge" id="boutton2">Ajouter au panier</button>
        </div>
        <div class="colonnecentre taillevieux gold marge">
            <img src="img/theweekend.png" class="image marge"/>
            <a id="description3" class="marge">The Weeknd - ONE OF THE GIRLS + POPULAR - VINYLE 7</a>
            <a id="prix3" class="marge">14,99€</a>
            <button class="marge" id="boutton3">Ajouter au panier</button>
        </div>
    </div>
</section>

<script src="ehcj_produits_remiPlateau.js"></script>
</body>

</html>