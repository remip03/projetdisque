<?php
    include('includespa/import.php');
    include('includespa/headpa.php');
    include('includespa/headerpa.php');
    $chanteur = $chanteur->listeChanteurs($db);
?>

      <!-- liste des Chanteurs -->
<div class='colonne'>
    <h1>Liste des Chanteurs</h1>
</div>

<div class="colonne">
<div class="colonne marge">
<table>
    <thead>
        <tr>
            <th>Numéro id du chanteur</th>
            <th>nom du chanteur</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($chanteur as $cht){
        ?>
        <tr>
            <td><a href='updateChanteur.php?id=<?= $cht['idChanteur']?> '><?=$cht['idChanteur']?></a></td>
            <td><a href='updateChanteur.php?id=<?=$cht['nomChanteur']?>'><?=$cht['nomChanteur']?></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>

</table>
</div>
</div>


<?php
    include('includespa/footerpa.php');
?>