<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $chanteur->supprChanteur($db);
?>

      <!-- Supprimer un Chanteur -->
<div class='colonne'>
    <h1>Supprimer un Chanteur</h1>
</div>
<form action="deleteChanteur.php" method="POST">
    <div class="colonne">
        <div class="colonne marge input">
            <label>Nom du Chanteur à supprimer : </label>
            <input type='text' name='nomChanteur' id='nomChanteur' maxlength='50' size='55' value='<?= isset($_POST['nomChanteur']) ? htmlspecialchars($_POST['nomChanteur']) : ''?>' placeholder='Entrer le nom du Chanteur'>
        </div>
        <button>supprimer</button>
    </div>
</form>

      <!-- Fin supprimer un Chanteur -->

<?php
    include('includespa/footerpa.php');
?>