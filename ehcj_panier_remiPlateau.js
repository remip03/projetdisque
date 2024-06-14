
// aller chercher les données dans le local storage
let vinyle1 = JSON.parse(localStorage.getItem('command1'));
let vinyle2 = JSON.parse(localStorage.getItem('command2'));
let vinyle3 = JSON.parse(localStorage.getItem('command3'));

//les réunir dans un tableau
let tableaucommand = [vinyle1,vinyle2,vinyle3];

//vérifie si l'utilisateur est connecté
let user = JSON.parse(localStorage.getItem('dataUser'));

if(user != null){ //vérifie si l'utilisateur est connecté
    //Données pour le 1er tableau
    document.getElementById("nomUser").innerHTML = user.nomValid;
    document.getElementById("prenomUser").innerHTML = user.prenomValid;
    document.getElementById("dateUser").innerHTML = user.date;
}else{ //s'il ne l'est pas, cache le 1er tableau et affiche un message pour inviter à se co/s'inscrire
    document.getElementById('tableauUser').classList.add('masque');
    document.getElementById('invitCo').classList.remove('masque');
}



//vérifie si le panier est vide
for (let i = 0; i < localStorage.length; i++) {
    let key = localStorage.key(i);
    if (key.startsWith('command') && localStorage.getItem(key) !== null) {
        document.getElementById('paniervide').classList.add('masque');
        document.getElementById('tableau1').classList.remove('masque');
    } 
}

//Total de la commande
let Total = 0;


//boucle pour le 1er article
if(tableaucommand[0] !== null){
    document.getElementById('qtite1').value = 1;
    let prix1 = vinyle1.prix;  //récupère le prix
    prix1 = prix1.substring(0,prix1.length -1); //enlève le €
    prix1 = prix1.replace(",","."); //remplace la virgule par un point
    let qtt1 = document.getElementById('qtite1').value;
    document.getElementById('ligne1').classList.remove('masque'); //affiche la ligne si ajout au panier
    document.getElementById('titre1').innerText = vinyle1.titre; //insère le titre du produit
    document.getElementById('total1').innerHTML = parseFloat(prix1); //convertit le prix en nombre et l'insère dans la cellule
    Total += parseFloat(prix1); //ajoute le prix de base au total
    document.getElementById('qtite1').addEventListener('input',function(){ //fonction dépendant de la quantité choisie
        let total1 = document.getElementById('total1').innerHTML;
        qtt1 = document.getElementById('qtite1').value;
        document.getElementById('total1').innerHTML = (prix1*qtt1).toFixed(2); //remplace le prix total
        Total = Total - parseFloat(total1); //enlève l'ancienne valeur du Total
        Total = Total + prix1*qtt1; //ajoute la nouvelle valeur
        document.getElementById('Total').innerHTML = Total.toFixed(2); //affiche le nouveau Total avec 2 chiffres après la virgule
    });
    document.getElementById('suppr1').addEventListener('click', function(){ //bouton enlever du panier
        localStorage.removeItem('command1'); //enlève du localStorage
        document.getElementById('ligne1').classList.add('masque'); //enlève la ligne
        Total = Total - prix1*qtt1; //soustrait la somme du Total
        document.getElementById('Total').innerHTML = Total.toFixed(2); //affiche le nouveau Total avec 2 chiffres après la virgule
    });
}

//boucle pour le 2ème article
if(tableaucommand[1] !== null){
    document.getElementById('qtite2').value = 1;
    let prix2 = vinyle2.prix;
    prix2 = prix2.substring(0,prix2.length -1);
    prix2 = prix2.replace(",",".");
    let qtt2 = document.getElementById('qtite2').value;
    document.getElementById('ligne2').classList.remove('masque');
    document.getElementById('titre2').innerText = vinyle2.titre;
    document.getElementById('total2').innerHTML = parseFloat(prix2);
    Total += parseFloat(prix2);
    document.getElementById('qtite2').addEventListener('input',function(){
        let total2 = document.getElementById('total2').innerHTML;
        qtt2 = document.getElementById('qtite2').value;
        document.getElementById('total2').innerHTML = (prix2*qtt2).toFixed(2);
        Total = Total - parseFloat(total2);
        Total = Total + prix2*qtt2;
        document.getElementById('Total').innerHTML = Total.toFixed(2);
    });
    document.getElementById('suppr2').addEventListener('click', function(){
        localStorage.removeItem('command2');
        document.getElementById('ligne2').classList.add('masque');
        Total = Total - prix2*qtt2;
        document.getElementById('Total').innerHTML = Total.toFixed(2);
    });
}

//boucle pour le 3ème article
if(tableaucommand[2] !== null){
    document.getElementById('qtite3').value = 1;
    let prix3 = vinyle3.prix;
    prix3 = prix3.substring(0,prix3.length -1);
    prix3 = prix3.replace(",",".");
    let qtt3 = 1;
    document.getElementById('ligne3').classList.remove('masque');
    document.getElementById('titre3').innerText = vinyle3.titre;
    document.getElementById('total3').innerHTML = parseFloat(prix3);
    Total += parseFloat(prix3);
    document.getElementById('qtite3').addEventListener('input',function(){
        let total3 = document.getElementById('total3').innerHTML;
        qtt3 = document.getElementById('qtite3').value;
        document.getElementById('total3').innerHTML = (prix3*qtt3).toFixed(2);
        Total = Total - parseFloat(total3);
        Total = Total + prix3*qtt3;
        document.getElementById('Total').innerHTML = Total.toFixed(2);
    });
    document.getElementById('suppr3').addEventListener('click', function(){
        localStorage.removeItem('command3');
        document.getElementById('ligne3').classList.add('masque');
        Total = Total - prix3*qtt3;
        document.getElementById('Total').innerHTML = Total.toFixed(2);
    });
}

//renvoi le prix total dans la case
document.getElementById('Total').innerHTML = Total.toFixed(2);