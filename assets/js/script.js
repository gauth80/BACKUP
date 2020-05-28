//Vérification de suppression d'un produit par un alert
var supp = document.getElementById("supp");
supp.addEventListener("click", confirmation);

function confirmation(){
    let accepter = confirm("Voulez vous vraiment supprimer cet enregistrement ?");
    if (!accepter==true) { //si différent de ok
        event.preventDefault();//bloquage de formualaire
    }
}