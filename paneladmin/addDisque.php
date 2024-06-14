<?php
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $disque-> nouveauDisque($db);
?>

      <!-- ajouter un disque -->
<div class='colonne'>
    <h1>Ajouter un disque</h1>
</div>
<form method="POST" enctype='multipart/form-data'>
    <div class="colonne">
        <div class="colonne marge input">
            <label for='nomDisque'>Nom du disque : </label>
            <input type='text' name='nomDisque' id='nomDisque' maxlength='50' size='55' value='<?= isset($_POST['nomDisque']) ? htmlspecialchars($_POST['nomDisque']) : ''?>' placeholder='Entrer le nom du disque'>
        </div>
        <div class="colonne marge input">
            <label for='descriptionDisque'>Description du disque : </label>
            <input type='text' name='descriptionDisque' id='descriptionDisque' maxlength='120' size='125' value='<?= isset($_POST['descriptionDisque']) ? htmlspecialchars($_POST['descriptionDisque']) : ''?>' placeholder='Entrer une decription du disque'>
        </div>
        <div class="colonne marge input">
            <label for='prixDisque'>Prix du disque : </label>
            <input type='number' step='0.01' min='0' name='prixDisque' id='prixDisque' maxlength='20' size='25' value='<?= isset($_POST['prixDisque']) ? htmlspecialchars($_POST['prixDisque']) : ''?>' placeholder='Prix du disque'>
        </div>
        <div class="colonne marge input">
            <label for='imgDisque'>Sélectionner une image à télécharger : </label>
            <input type='file' name='imgDisque' id='imgDisque' value='<?= isset($_POST['imgDisque'])?>'>
        </div>
        <button type='submit'>Ajouter</button>
    </div>
</form>

      <!-- fin ajouter un disque -->

<?php
    include('includespa/footerpa.php');
?>