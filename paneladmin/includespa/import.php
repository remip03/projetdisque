<?php

$serveur = 'localhost';
$user = 'root';
$passwd = '';
$bdd = 'projetdisque';

try {
    $db = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $error) {
    echo 'N° : '.$error->getCode().'<br />';
    die ('Erreur : '.$error->getMessage().'<br />');
}

?>