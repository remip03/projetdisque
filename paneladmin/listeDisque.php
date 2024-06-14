<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $disque = $disque->listeDisques($db);
?>

      <!-- liste des disques -->
<div class='colonne'>
    <h1>Liste des disques</h1>
</div>

<div class="colonne">
<div class="colonne marge">
<table>
    <thead>
        <tr>
            <th>idDisque</th>
            <th>nomDisque</th>
            <th>descriptionDisque</th>
            <th>prixDisque</th>
            <th>imgDisque</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($disque as $dsq){
        ?>
        <tr>
            <td><?= $dsq['idDisque'] ?></td>
            <td><?= $dsq['nomDisque'] ?></td>
            <td><?= $dsq['descriptionDisque'] ?></td>
            <td><?= $dsq['prixDisque'] ?> €</td>
            <td><img src='<?= $dsq['imgDisque'] ?>'></td>
        </tr>
        <?php
        }
        ?>
    </tbody>


<?php
    include('includespa/footerpa.php');
?>