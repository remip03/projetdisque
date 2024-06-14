<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $cht = $chanteur->showChanteur($db);
?>

      <!-- Modifier les infos d'un(e) Chanteur(se) -->
<div class='colonne'>
    <h1>Modifier les infos d'un(e) Chanteur(se)</h1>
</div>
<form method='POST'>
    <div class='colonne'>
        <div class='colonne marge input'>
            <label for='idChanteur'>numéro id du Chanteur : </label>
            <input type='text' name='idChanteur' id='idChanteur' maxlength='50' size='55' value='<?= $cht['idChanteur'] ?>'>
            <label for='nomChanteur'>Nom du Chanteur : </label>
            <input type='text' name='nomChanteur' id='nomChanteur' maxlength='50' size='55' value='<?= $cht['nomChanteur'] ?>'>
            <button class='marge' type='submit'>modifier</button>
        </div>
    </div>
</form>

<?php
    include('includespa/footerpa.php');
?>