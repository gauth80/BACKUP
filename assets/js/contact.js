var formValid = document.getElementById("ok");
formValid.addEventListener('click', verif);

function verif(event) {

    //variables de la plus part du formulaire
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var date = document.getElementById("ddn");
    var cp = document.getElementById("cpostal");
    var adresse = document.getElementById("adresse");
    var ville = document.getElementById("ville");
    var email = document.getElementById("email");
    var check = document.getElementById("check");
    var area = document.getElementById("question");

    //variables quand il manque un truc dans le formulaire
    var missNom = document.getElementById("missNom");
    var missPrenom = document.getElementById("missPrenom");
    var missDate = document.getElementById("missDate");
    var missCp = document.getElementById("missCp");
    var missAd = document.getElementById("missAd");
    var missVille = document.getElementById("missVille");
    var missEmail = document.getElementById("missEmail");
    var missCheck = document.getElementById("missCheck")
    var missArea = document.getElementById("missArea")

    //-------------------------------------------------------------------- Tout les Regex -------------------------------------------------------------------------------------
    /*
    le ? signifie zéro au le nombre de fois qu'on le veux
    le ?: sert à dire que ce n'est pas obligatoire
    */

    //regex autorisant les espace, les - et les ' dans les nom et prénom
    var filtreCara = new RegExp(/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?:\s|\-|\')?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/);
    //on exclu le 2 pour en fair eun cas particulier (tmtc la corse), le 0 pour l'armée, le 97 des dep d'outre mer et les 98 des territoire d'outre mer(le 0 des territoire c pour monaco)
    var filtreCp = new RegExp(/^(?:(?:(?:(?:[013-8]\d)|(?:2[\dabAB])|(?:9[0-5]))\d{3})|(?:(?:97[1-6]\d{2})|(?:98[04-8]\d{2})))$/);
    //permet les chiffres par groupes de 2/2/4 ou 2/2/2
    var filtreDate = new RegExp(/^(?:\d\d?[\/\- ]\d\d?[\/\- ](?:\d\d)(?:\d\d)?)|(?:(?:\d\d)(?:\d\d)?[\/\- ]\d\d?[\/\- ]\d\d?)$/)
    // permet de ne pas calculer les caractères mais de les faire passer comme simple texte et le {2,} sert à forcer l'introduction de 2 groupe de mots mini (genre rue Goffrey ou avenue bernard)
    var filtreAd = new RegExp(/^(?:\d+?(?: [Bis]|[bis]|[ter]|[Ter])?(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+){2,}|(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+)+))$/);
    //autorise les espace, les tirets, les slashs et les apostrophes
    var filtreVille = new RegExp(/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?: \-| |\'\/)?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/);
    //autorise après le @ obligatoire les .(2lettres), les .(3lettres) 
    var filtreEmail = new RegExp(/^\w+[\w\!#\$%&\'\*\.\+\-\/=\?\^\`\{|\}~]*@[a-z]+\.+[a-z]{2,3}$/);
    //pour eviter les injections
    var injection = new RegExp(/[^@|<>{}]+/)

    //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //Application des Regex en forme de filtre sur chaque value rentrée

    //sous filtre pour caractères
    if (nom.validity.valueMissing)
    //si le champs n'est pas renseigné, alors affiche la demande de renseignement
    {
        event.preventDefault()
        missNom.textContent = "Veuillez remplir ce champ";
        missNom.style.color = "red";
    } else if (!filtreCara.test(nom.value)) {//test la valeur du regex sur la valeur de la variable//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté//empeche l'envoie en cas de defaut détecté
        missNom.textContent = "Veuillez rentrer un nom valide";
        missNom.style.color = "red";
    } else {
        missNom.textContent = "*";
        missNom.style.color = "green";

    }
    if (prenom.validity.valueMissing) {
        event.preventDefault()
        missPrenom.textContent = "Veuillez remplir ce champ";
        missPrenom.style.color = "red";
    } else if (!filtreCara.test(prenom.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missPrenom.textContent = "Veuillez renseignez un prénom conforme.";
        missPrenom.style.color = "red";
    } else {
        missPrenom.textContent = "*";
        missPrenom.style.color = "green";
    }

    //sous filtre date
    if (date.validity.valueMissing) {
        event.preventDefault()
        missDate.textContent = "Veuillez remplir ce champ";
        missDate.style.color = "red";
    } else if (!filtreDate.test(date.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missDate.textContent = "Veuillez rentrez un numéro de téléphone valide.";
        missDate.style.color = "red";
    } else {
        missDate.textContent = "*";
        missDate.style.color = "green";
    }

    //sous filtre code postal
    if (cp.validity.valueMissing) {
        event.preventDefault()
        missCp.textContent = "Veuillez remplir ce champ";
        missCp.style.color = "red";
    } else if (!filtreCp.test(cp.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missCp.textContent = "Veuillez rentrez un code postal valide. (Exemple: 75000)";
        missCp.style.color = "red";
    } else {
        missCp.textContent = "*";
        missCp.style.color = "green";
    }

    //sous filtre adresse
    if (adresse.validity.valueMissing) {
        event.preventDefault()
        missAd.textContent = "Veuillez remplir ce champ";
        missAd.style.color = "red";
    } else if (!filtreAd.test(adresse.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missAd.textContent = "Veuillez rentrez une adresse valide.";
        missAd.style.color = "red";
    } else {
        missAd.textContent = "*";
        missAd.style.color = "green";
    }

    //sous filtre ville 
    if (ville.validity.valueMissing) {
        event.preventDefault()
        missVille.textContent = "Veuillez remplir ce champ";
        missVille.style.color = "red";
    } else if (!filtreVille.test(ville.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missVille.textContent = "Veuillez rentrez un nom de ville existant.";
        missVille.style.color = "red";
    } else {
        missVille.textContent = "*";
        missVille.style.color = "green";
    }

    //sous filtre email - doit forcer l'utilisation de @, de .(3 lettres) et de .(2 lettres)
    if (email.validity.valueMissing) {
        event.preventDefault()
        missEmail.textContent = "Veuillez remplir ce champ";
        missEmail.style.color = "red";
    } else if (!filtreEmail.test(email.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missEmail.textContent = "Veuillez rentrez un e-mail existant.";
        missEmail.style.color = "red";
    } else {
        missEmail.textContent = "*";
        missEmail.style.color = "green";
    }

    // bloquer les injections dans le textarea
    if (area.validity.valueMissing) {
        event.preventDefault()
        missArea.textContent = "Veuillez remplir ce champ";
        missArea.style.color = "red";
    } else if (!injection.test(area.value)) {//test la valeur du regex sur la valeur de la variable
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missArea.textContent = "Veuillez remplir ce champ";
        missArea.style.color = "red";
    } else {
        missArea.textContent = "*";
        missArea.style.color = "green";
    }

    // verifie la case des conditions d'utilisation
    if (check.validity.valueMissing) {
        event.preventDefault();//empeche l'envoie en cas de defaut détecté
        missCheck.textContent = "Veuillez cochez la case pour poursuivre.";
        missCheck.style.color = "red";
    } else {
        missCheck.textContent = "*";
        missCheck.style.color = "green";
    }
}