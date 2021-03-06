if(docment.getElementById('frmLogin')) {
	docment.getElementById('frmLogin').addEventListener('submit', validerFrmLogin);
}

function validerFrmLogin() {
	
	//empêcher le formulaire de soumettre automatiquemenet
	if(event.preventDefault()) {
		event.preventDefault();
	} else {
		event.returnValue = false;
	}

	var estValide 			= 	true;
	var frmLogin 			= 	document.getElementById('frmLogin');

	//Définir les champs
	var txtPseudo 			=	document.getElementById('txtPseudo');
	var pwdPass 			= 	document.getElementById('pwdPass');

	//Définir les champs d'erreur
	var txtPseudoErreur		=	document.getElementById('txtPseudoErreur');
	var pwdPassErreur		=	document.getElementById('pwdPassErreur');

	var aDivErreur 			= 	document.getElementsByClassName('divErreur');

	//Enlever toutes les erreurs
	for(var i = 0; i < aDivErreur.length; i++) {
		aDivErreur[i].innerHTML = "";	
	}

	//Valider Pseudo 
	if(estVide(txtPseudo.value)) {
		estValide = false;
		txtPseudoErreur.innerHTML = 'Veuillez remplir ce champ';
	} 
	else if(estTexte(txtPseudo.value) == false) {
		estValide = false;
		txtPseudoErreur.innerHTML = "Ce champ doit contenir du texte";
	}

	//Valider Mot de passe
	if(estVide(pwdPass.value)) {
		estValide = false;
		pwdPass.innerHTML = "Veuillez remplir ce champ";
	}
	else if(estMotDePasse(pwdPass.value) == false) {
		estValide = false;
		pwdPass.innerHTML = "Ce champ doit contenir huit caractères ou plus et au moins un chiffre";
	}

	//Soumettre le formulaire 
	if(estValide == true) {
		frmLogin.submit();
	}
}

if(docment.getElementById('frmProfilUtilateur')) {
	docment.getElementById('frmProfilUtilateur').addEventListener('submit', validerFormulaire);
}

function modifierProfil() {

	if(event.preventDefault()) {
		event.preventDefault();
	} else {
		event.returnValue = false;
	}

	var estValide = true;
	var frmProfilUtilateur 	= 	document.getElementById('frmProfilUtilateur');

	//Définir les champs
	var pwdPass1 			=	document.getElementById('pwdPass1');
	var pwdPass2 			= 	document.getElementById('pwdPass2');

	//Définir les champs d'erreur
	var txtPseudoErreur		=	document.getElementById('pwdPass1Erreur');
	var pwdPassErreur		=	document.getElementById('pwdPass2Erreur');

	var aDivErreur 			= 	document.getElementsByClassName('divErreur');

	for(var i = 0; i < aDivErreur.length; i++) {
		aDivErreur[i].innerHTML = "";	
	}

	//Valider Mot de passe1
	if(estVide(pwdPass1.value)) {
		estValide = false;
		pwdPass1Erreur.innerHTML = 'Veuillez remplir ce champ';
	} 
	else if(estMotDePasse(pwdPass1.value) == false) {
		estValide = false;
		pwdPass1Erreur.innerHTML = "Ce champ doit contenir huit caractères ou plus et au moins un chiffre";
	}

	//Valider Mot de passe2
	/*if(estVide(pwdPass2.value)) {
		estValide = false;
		pwdPass2Erreur.innerHTML = "Veuillez remplir ce champ";
	}
	else if(estMotDePasse(pwdPass2.value) ==  false) {
		estValide = false;
		pwdPass2Erreur.innerHTML = "Ce champ doit contenir huit caractères ou plus et au moins un chiffre";
	}*/

	//Vérifier s les mots de passe s
	if(pwdPass1.value != pwdPass2.value) {
		estValide = false;
		pwdPass2Erreur.innerHTML = "Les mots de passe ne sont pas identiques";
	}

	if(estValide ==  true) {
		frmProfilUtilateur.submit();
	}

}