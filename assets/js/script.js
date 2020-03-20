
let person = {'nom':false,'prenom':false,'Email':false}; //

function verifInput (elmt) {				//vérification regex et activation btn valider

    let  valeur = elmt.value;					 //on enregistre la valeur des inputs

    if (valeur != "") {

        let regValeur = new RegExp(elmt.pattern);	//on fait un regex des patterns des imputs ciblé
        let testValeur = regValeur.test(valeur);	//on test le regex
        //console.log(testValeur);
        person[elmt.name] = testValeur;				//on check en console

    } else {

        person[elmt.name] = false;
        document.getElementById("okey").disabled = true;
    }

    if (person.nom == true && person.prenom == true && person.Email == true) {

        document.getElementById("okey").disabled = false;
        //console.log("ok"); // on regarde si on rentre bien dans le if

    } else {

        document.getElementById("okey").disabled = true;
    }
}

function envoye(elmt) {
    let nameF = document.getElementById("nameField").value;
    let firstnameF = document.getElementById("firstnameField").value;
    let emailF = document.getElementById("emailField").value;

    if (nameF && firstnameF && emailF != "") {
        let result = [nameF,firstnameF,emailF];
        console.log(result);
    }
}

function erase(elmt) {

    document.getElementById("okey").disabled = true;
}