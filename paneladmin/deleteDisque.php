<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $disque->supprDisque($db);
?>

      <!-- Supprimer un disque -->
<div class='colonne'>
    <h1>Supprimer un disque</h1>
</div>
<form action="deleteDisque.php" method="POST">
    <div class="colonne">
        <div class="colonne marge input">
            <label>Nom du disque à supprimer : </label>
            <input type='text' name='nomDisque' maxlength='50' size='55' value='<?= isset($_POST['nomDisque']) ? htmlspecialchars($_POST['nomDisque']) : ''?>' placeholder='Entrer le nom du disque'>
        </div>
        <button type='submit'>supprimer</button>
    </div>
</form>

      <!-- Fin supprimer un disque -->

<?php
    include('includespa/footerpa.php');
?>