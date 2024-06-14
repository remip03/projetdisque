<?php

class connexion{

    //   fonction pour checker et envoyer les informations au serveur
    public function userIns() {
        $verifnom = '/^[a-zA-Z]{2,}$/';
        $verifmail = '/^[a-zA-Z0-9._%+-\.!,éèàê]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $verifmdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!:/;.,?%^¨$£\'"]).{10,}$/';
        if(isset($_POST['nomUser'], $_POST['prenomUser'], $_POST['mailUser'], $_POST['motdpUser'], $_POST['confirmotdpUser'])){
            $nomUser = strip_tags($_POST['nomUser']);
            $prenomUser = strip_tags($_POST['prenomUser']);
            $mailUser = strip_tags($_POST['mailUser']);
            $motdpUser = strip_tags($_POST['motdpUser']);
            $confirmotdpUser = strip_tags($_POST['confirmotdpUser']);
            if(!verifnom.test($nomUser) && !verifnom.test($prenomUser) && !verifmail.test($mailUser) && !verifmdp.test($motdpUser) && !verifmdp.test($confirmotdpUser) && $motdpUser == $confirmotdpUser){
                $sql = "INSERT INTO `duser` (nomUser, prenomUser, mailUser, pwdUser) VALUES (:nomUser, :prenomUser, :mailUser, :pwdUser)";
                $query = $db->prepare(sql);
                $query->bindValue()
            }
        }
    }
}

?>