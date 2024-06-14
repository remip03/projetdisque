      //variables
let nom;
let prenom;
let email;
let motdp;
let confirMotdp;
let verifnom = /^[a-zA-Z]{2,}$/;
let verifmail = /^[a-zA-Z0-9._%+-\.!,éèàê]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
let verifmdp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!:/;.,?%^¨$£'"]).{10,}$/;

function formSubmit(event){
    nom = document.getElementById('nom').value;
    prenom = document.getElementById('prenom').value;
    email = document.getElementById('mail').value;
    motdp = document.getElementById('motdp').value;
    confirMotdp = document.getElementById('confirmotdp').value;
    let confirm = true;

      //règles pour le nom et prénom
    if(nom.length <= 2){
        document.getElementById('erreurNom').style.visibility = 'visible';
        document.getElementById('erreurNom').innerHTML = 'Veuillez entrer votre nom svp';
        confirm = false;
    }
    if(nom.length > 2 && !verifnom.test(nom)){
        document.getElementById('erreurNom').style.visibility = 'visible';
        document.getElementById('erreurNom').innerHTML = 'Veuillez ne mettre que des lettres svp';
        confirm = false;
    }
    if(nom.length >2 && verifnom.test(nom)){
        document.getElementById('erreurNom').style.visibility = 'hidden';
    }

      //
    
    if(prenom.length <= 2){
        document.getElementById('erreurPrenom').style.visibility = 'visible';
        document.getElementById('erreurPrenom').innerHTML = 'Veuillez entrer votre prénom svp';
        confirm = false;
    }
    if(prenom.length > 2 && !verifnom.test(prenom)){
        document.getElementById('erreurPrenom').style.visibility = 'visible';
        document.getElementById('erreurPrenom').innerHTML = 'Veuillez ne mettre que des lettres svp';
        confirm = false;
    }
    if(prenom.length >2 && verifnom.test(prenom)){
        document.getElementById('erreurPrenom').style.visibility = 'hidden';
    }

      // règles pour le mail
    if(email == ""){
        document.getElementById('erreurMail').style.visibility = 'visible';
        document.getElementById('erreurMail').innerText = 'Veuillez entrer votre adresse mail svp';
        confirm = false;
    }
    if(email != "" && !verifmail.test(email)){
        document.getElementById('erreurMail').style.visibility = 'visible';
        document.getElementById('erreurMail').innerText = 'Veuillez entrer une adresse mail valide svp';
        confirm = false;
    }
    if(email != "" && verifmail.test(email)){
        document.getElementById('erreurMail').style.visibility = 'hidden';
    }

      //règles sur le mot de passe
    if(motdp.length < 10){
        document.getElementById('erreurMotdp').style.visibility = 'visible';
        document.getElementById('erreurMotdp').innerText = 'mot de passe trop court (10 caractères minimum)';
        confirm = false;
    }
    if(motdp.length >= 10 && !verifmdp.test(motdp)){
        document.getElementById('erreurMotdp').style.visibility = 'visible';
        document.getElementById('erreurMotdp').innerText = 'mot de passe non conforme (voir les règles ci-dessus)';
        confirm = false;
    }
    if(motdp.length >= 10 && verifmdp.test(motdp)){
        document.getElementById('erreurMotdp').style.visibility = 'hidden';
    }

      //règles sur la confirmation du mot de passe
    if(confirMotdp == ""){
        document.getElementById('erreurConfirMotdp').style.visibility = 'visible';
        document.getElementById('erreurConfirMotdp').innerText = 'veuillez entrer à nouveau votre mot de passe';
        confirm = false;
    }
    if(confirMotdp != "" && confirMotdp != motdp){
        document.getElementById('erreurConfirMotdp').style.visibility = 'visible';
        document.getElementById('erreurConfirMotdp').innerText = 'Les mots de passe ne correspondent pas';
        confirm = false;
    }
    if(confirMotdp != "" && confirMotdp == motdp){
        document.getElementById('erreurConfirMotdp').style.visibility = 'hidden';
    }

      //validation du formulaire et sauvegarde des données.
    if(confirm == true){
        document.location.href = 'evalhtmlcssjs_login_remiPlateau.html';
        const userValid = {
            nomValid : nom,
            prenomValid : prenom,
            mailValid : email,
            mdpValid : motdp
        }
        dataUser = localStorage.setItem('dataUser',JSON.stringify(userValid));
    }

    event.preventDefault();
}

