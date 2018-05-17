let formulaireElt = document.querySelector("form");
let checkboxElement= document.querySelector("#checkbox");
let validCheckbox;
let regexCourriel = /.+@.+\..+/;
let regexString = /\d|\W/;
let validRadio = "";
let validSelect = "-";
let messErreur = "";

selectElt = document.getElementById ( "pays" );
selectElt.addEventListener ( "change", function ( e ){
	validSelect = e.target.value;
});
checkboxElement.addEventListener("change", function ( e ) {
	validCheckbox=checkboxElement.checked;
});
let radioElt = document.querySelectorAll ( "[name = age ]");

for ( let i = 0; i < radioElt.length; i++ ) {
	radioElt[i].addEventListener ( "change", function ( e ){
		validRadio = e.target.value;
	} );
}

formulaireElt.addEventListener( "submit", function ( e )  {
	if ( formulaireElt.nom.value === "" ){
		messErreur = "Vous devez entrer un nom valide!";
		document.querySelector('.erreurnom').innerHTML= messErreur;		
	} else {
		messErreur = "";
		document.querySelector('.erreurnom').innerHTML= messErreur;	
	} if ( formulaireElt.prenom.value === "" ){
		messErreur = "Vous devez entrer un prénom valide!";	
		document.querySelector('.erreurprenom').innerHTML= messErreur;	
	} else {
		messErreur = "";
		document.querySelector('.erreurprenom').innerHTML= messErreur;
	} if ( !regexCourriel.test(formulaireElt.email.value) ) {
		messErreur = "Vous devez entrer un mail valide!";
		document.querySelector('.erreurmail').innerHTML= messErreur;		
	} else {
		messErreur = "";
		document.querySelector('.erreurmail').innerHTML= messErreur;
	} if ( validCheckbox != true) {
		messErreur = "Vous devez accepter les conditions d'utilisation";
		document.querySelector ( ".paragraph--useConditions" ).style.border = "2px solid red";
		document.querySelector ( ".erreurConditions").innerHTML = messErreur;
	} else {
		messErreur = "";
		document.querySelector ( ".erreurConditions").innerHTML = messErreur;
		document.querySelector ( ".paragraph--useConditions" ).style.border = "1px solid black";
	} if ( formulaireElt.message.value === "" ) {
		messErreur = "Vous devez entrer un message!";
		
		document.querySelector ( ".message" ).style.border = "2px solid red";
	} else {
		messErreur = "";
		document.querySelector ( ".erreurMessage").innerHTML = messErreur;
		document.querySelector ( ".message" ).style.border = "1px solid brown";
	} if ( (validRadio != "jeune") && (validRadio != "normal") && (validRadio != "vieux") ){
		messErreur = "Selectionnez une tranche d'âge !";
		document.querySelector('.erreurage').innerHTML= messErreur;		
	} else {
		messErreur = "";
		document.querySelector('.erreurage').innerHTML= messErreur;
	} if ( validSelect == "-" ){
		messErreur = "Choisissez votre pays!";
		document.querySelector('.erreurpays').innerHTML= messErreur;		
	} else {
		messErreur = "";
		document.querySelector('.erreurpays').innerHTML= messErreur;
	}
	let zoneErreurs = document.querySelectorAll ( ".erreur");
	let erreurs = [];
	for ( let zoneErreur of zoneErreurs ) {
		if ( zoneErreur.innerHTML != "" ) {
			erreurs.push ( zoneErreur.innerHTML );
		}
	}
	console.log ( erreurs );
	if ( erreurs.length == 0 ) alert ( "formulaire envoyé" );	
	// e.preventDefault();

	document.forms["idform"].submit();
});