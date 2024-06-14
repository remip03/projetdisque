//variables
let user = JSON.parse(localStorage.getItem('dataUser'));

//affiche le message si l'utilisateur est connecté
if(user == null){
    document.getElementById('intro').classList.add('cache');
}else{
    document.getElementById("prenomUser").innerHTML = user.prenomValid;
    document.getElementById("dateUser").innerHTML = user.date;
    document.getElementById("heureUser").innerHTML = user.heure;
}

//Créé les 3 objets
let vinyle1 ={
    titre: document.getElementById('description1').innerHTML,
    prix: document.getElementById('prix1').innerHTML
};
let vinyle2 ={
    titre: document.getElementById('description2').innerHTML,
    prix: document.getElementById('prix2').innerHTML
};
let vinyle3 ={
    titre: document.getElementById('description3').innerHTML,
    prix: document.getElementById('prix3').innerHTML
};

//Envoie les objets dans le localStorage
document.getElementById('boutton1').addEventListener("click",function btn1(){
    command1: localStorage.setItem('command1',JSON.stringify(vinyle1))
});

document.getElementById('boutton2').addEventListener("click",function btn2(){
    command2 : localStorage.setItem('command2',JSON.stringify(vinyle2))
});

document.getElementById('boutton3').addEventListener("click",function btn3(){
    command3 : localStorage.setItem('command3',JSON.stringify(vinyle3))
});




