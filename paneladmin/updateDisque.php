<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $disque = $disques->updateDisque($db);
?>

      <!-- modifier un disque -->
<div class='colonne'>
    <h1>Modifier un disque</h1>
</div>
<form action="updateDisque.php" method="POST">
    <div class="colonne">
        <div class="colonne marge input">
            <label>Nom du disque : </label>
            <input type='text' name='nomDisque' maxlength='50' size='55' placeholder='Entrer le nom du disque'>
        </div>
        <div class="colonne marge input">
            <label>Description du disque : </label>
            <input type='text' name='descriptionDisque' maxlength='120' size='125' placeholder='Entrer une decription du disque'>
        </div>
        <div class="colonne marge input">
            <label>Prix du disque : </label>
            <input type='number' step='0.01' min='0' name='prixDisque' maxlength='20' size='25' placeholder='Prix du disque'>
        </div>
        <div class="colonne marge input">
            <label>Sélectionner une image à télécharger : </label>
            <input type='file' name='imgDisque' id='imgDisque'>
        </div>
        <button>Modifier</button>
    </div>
</form>

      <!-- fin modifier un disque -->



<?php
    include('includespa/footerpa.php');
?>