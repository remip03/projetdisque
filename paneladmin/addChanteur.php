<?php
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $chanteur-> nouveauChanteur($db);
?>

      <!-- ajouter un Chanteur -->
<div class='colonne'>
    <h1>Ajouter un(e) Chanteur(se)</h1>
</div>
<form method='POST'>
    <div class='colonne'>
        <div class='colonne marge input'>
            <label for='nomChanteur'>Nom du Chanteur : </label>
            <input type='text' name='nomChanteur' id='nomChanteur' maxlength='50' size='55' value='<?= isset($_POST['nomChanteur']) ? htmlspecialchars($_POST['nomChanteur']) : ''?>' placeholder='Entrer le nom du chanteur'>
            <button class='marge' type='submit'>Ajouter</button>
        </div>
    </div>
</form>


<?php
    include('includespa/footerpa.php');
?>