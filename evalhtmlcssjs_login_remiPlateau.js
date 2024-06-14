// données entrées
let email;
let motdp;

// données récupérées
let userValid = localStorage.getItem('dataUser');
let user = JSON.parse(userValid);
let userTime;

function connexion(event){
    //récupère les données entrées
    email = document.getElementById('mail').value;
    motdp = document.getElementById('motdp').value;

    //boléen de validation
    let validCo = true;

      //verif identifiants
    if(email == ""){ //anti espace vide
        document.getElementById('erreurMail').style.visibility = 'visible';
        document.getElementById('erreurMail').innerText = 'Veuillez entrer votre adresse mail svp';
        validCo = false;
    }
    if(email != "" && email != user.mailValid){ //si le mail n'est pas bon
        document.getElementById('erreurMail').style.visibility = 'visible';
        document.getElementById('erreurMail').innerText = 'Adresse mail inconnue';
        validCo = false;
    }
    if(email != "" && email == user.mailValid){ //si tout est ok
        document.getElementById('erreurMail').style.visibility = 'hidden';
    }

      //verif mot de passe
    if(motdp == ""){ //anti espace vide
        document.getElementById('erreurMotdp').style.visibility = 'visible';
        document.getElementById('erreurMotdp').innerText = 'Veuillez entrer votre mot de passe svp';
        validCo = false;
    }
    if(motdp != "" && motdp != user.mdpValid){ //si le mdp n'est pas bon
        document.getElementById('erreurMotdp').style.visibility = 'visible';
        document.getElementById('erreurMotdp').innerText = 'mot de passe invalide';
        validCo = false;
    }
    if(motdp != "" && motdp == user.mdpValid){ //si tout est ok
        document.getElementById('erreurMotdp').style.visibility = 'hidden';
    }

      //Validation de la connexion
    if(validCo == true){
        //récupère la date et l'heure au bon format
        let date = new Date();
        let datefr = date.toLocaleDateString();
        let heurefr = date.toLocaleTimeString();
        //implémente ces informations dans l'objet user
        user.date = datefr;
        user.heure = heurefr;
        //remplace l'objet dans le localStorage par sa nouvelle version
        userTime = JSON.stringify(user);
        userValid = localStorage.setItem('dataUser',userTime);
        //redirige vers la page produit
        document.location.href = 'ehcj_produits_remiPlateau.html';
        event.preventDefault();
    }

    event.preventDefault();
}

