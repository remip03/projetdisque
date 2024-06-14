<?php

class fonctionAdminDisque{

    //   fonction pour importer la liste des disques et ses données
    public function listeDisques($db){
        $sql = "SELECT * FROM `disque`";
        $query = $db->prepare($sql);
        $query->execute();
        $disque = $query->fetchAll(PDO::FETCH_ASSOC);
        return $disque;
    }

    //   fonction pour afficher les données d'un disque et le modifier
    public function showDisque($db){
        if (isset($_POST['idDisque'])){
            $idDisque = strip_tags($_POST['idDisque']);
            $sql = "SELECT * FROM 'disque' WHERE idDisque = :idDisque";
            $query = $db->prepare($sql);
            $query->bindValue(':idDisque', $idDisque, PDO::PARAM_INT);
            $query->execute();
            $disque = $query->fetch(PDO::FETCH_ASSOC);
            return $disque;
        }

    }

    //   fonction pour ajouter un disque
    public function nouveauDisque($db){
        if(isset($_POST['nomDisque'], $_POST['descriptionDisque'], $_POST['prixDisque'], $_FILES['imgDisque'])){
            $nomDisque = strip_tags($_POST['nomDisque']);
            $descriptionDisque = strip_tags($_POST['descriptionDisque']);
            $prixDisque = strip_tags($_POST['prixDisque']);
            $target_dir = '../img/';
            $target_file = $target_dir . basename($_FILES['imgDisque']['name']);
            move_uploaded_file($_FILES['imgDisque']['tmp_name'], $target_file);
            $sql = "INSERT INTO `disque` (nomDisque, descriptionDisque, prixDisque, imgDisque) VALUES (:nomDisque, :descriptionDisque, :prixDisque, :imgDisque)";
            $query = $db->prepare($sql);
            $query->bindValue(':nomDisque', $nomDisque, PDO::PARAM_STR);
            $query->bindValue(':descriptionDisque', $descriptionDisque, PDO::PARAM_STR);
            $query->bindValue(':prixDisque', $prixDisque);
            $query->bindValue(':imgDisque', $target_file);
            $query->execute();
            // header('Location: listeDisque.php');
        }
        $db = null;
    }

    //   fonction pour modifier les données des disques
    public function updateDisque($db){
        if(isset($_POST['idDisque'], $_POST['nomDisque'], $_POST['descriptionDisque'], $_POST['prixDisque'], $_POST['imgDisque'])){
            $idDisque = strip_tags($_POST['idDisque']);
            $nomDisque = strip_tags($_POST['nomDisque']);
            $descriptionDisque = strip_tags($_POST['descriptionDisque']);
            $prixDisque = strip_tags($_POST['prixDisque']);
            $imgDisque = strip_tags($_POST['imgDisque']);
            $sql = "UPDATE 'disque' SET 'nomDisque' =:nomDisque, 'descriptionDisque' =:descriptionDisque, 'prixDisque' =:prixDisque, 'imgDisque' =:imgDisque WHERE 'idDisque' =:idDisque";
            $query = $db->prepare($sql);
            $query->bindValue(':idDisque', $idDisque, PDO::PARAM_INT);
            $query->bindValue(':nomDisque', $nomDisque, PDO::PARAM_STR);
            $query->bindValue(':descriptionDisque', $descriptionDisque, PDO::PARAM_STR);
            $query->bindValue('prixDisque', $prixDisque, PDO::PARAM_STR);
            $query->bindValue('imgDisque', $imgDisque, PDO::PARAM_STR);
            $query->execute();
        }
        $disque = $this->showDisque($db);
        return $disque;
    }

    // fonction pour supprimer un disque de la liste
    public function supprDisque($db){
        if (isset($_POST['nomDisque'])) {
            $nomDisque = strip_tags($_POST['nomDisque']);
            $sql = "DELETE FROM disque WHERE nomDisque = :nomDisque";
            $query = $db->prepare($sql);
            $query->bindValue(':nomDisque', $nomDisque, PDO::PARAM_STR);
            $query->execute();
        }
    }

}

class fonctionAdminChanteur{

    //   fonction pour importer la liste des chanteurs et ses données
    public function listeChanteurs($db){
        $sql = 'SELECT * FROM chanteur';
        $query = $db->prepare($sql);
        $query->execute();
        $chanteur = $query->fetchAll(PDO::FETCH_ASSOC);
        return $chanteur;
    }


    //   fonction pour afficher les données d'un chanteur et le modifier
    public function showChanteur($db){
            $idChanteur = $_GET['idChanteur'];
            $sql = "SELECT * FROM `chanteur` WHERE idChanteur= :idChanteur";
            $query = $db->prepare($sql);
            $query->bindValue(':idChanteur', $idChanteur, PDO::PARAM_INT);
            $query->execute();
            $chanteur = $query->fetch(PDO::FETCH_ASSOC);
            return $chanteur;
    }

    //   fonction pour ajouter un chanteur
    public function nouveauChanteur($db){
        if(isset($_POST['nomChanteur'])){
            $nomChanteur = strip_tags($_POST['nomChanteur']);
            $sql = "INSERT INTO `chanteur` (nomChanteur) VALUE (:nomChanteur)";
            $query = $db->prepare($sql);
            $query->bindValue(':nomChanteur', $nomChanteur, PDO::PARAM_STR);
            $query->execute();
        }
    }


    //   fonction pour modifier les données des chanteurs
    public function updateChanteur($db){

        if(isset($_POST['idChanteur'], $_POST['nomChanteur'])){
            $idChanteur = strip_tags($_POST['idChanteur']);
            $nomChanteur = strip_tags($_POST['nomChanteur']);
            $sql = "UPDATE chanteur SET nomChanteur =:nomChanteur WHERE idChanteur =:idChanteur";
            $query = $db->prepare($sql);
            $query->bindValue(':idChanteur', $idChanteur, PDO::PARAM_INT);
            $query->bindValue(':nomChanteur', $nomChanteur, PDO::PARAM_STR);
            $query->execute();
        }
        $cht = $this->showChanteur($db);
        return $cht;
    }
    
        // fonction pour supprimer un chanteur de la liste
        public function supprChanteur($db){
            if (isset($_POST['nomChanteur'])) {
                $nomChanteur = strip_tags($_POST['nomChanteur']);
                $sql = "DELETE FROM chanteur WHERE nomChanteur = :nomChanteur";
                $query = $db->prepare($sql);
                $query->bindValue(':nomChanteur', $nomChanteur, PDO::PARAM_STR);
                $query->execute();
            }
        }
}

?>