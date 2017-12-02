var i = 0;

function validation(){

    var MotDePasse = document.INSCRIPTION.MDP.value;
    var VerifPassword = document.INSCRIPTION.MDPVerif.value;
         if(MotDePasse != VerifPassword){
                alert("Votre saisie est différente");
                 i++;

        if (i == 3){
            alert("ERREUR TENTATIVE DE FRAUDE");
            window.location=('Index.php');
        }
    }  
 } 



    
function change(){
    var email = document.INSCRIPTION.emailverif.value;
    var DivCouleur = getElementBy("js");

    if (email =="") 
        DivCouleur.style.backgroundColor ="red";
}


function VerifFinale(){
	var champ_obligatoire = [ 'nom', 'email', 'mdpasse' ];
	var champ_plein = true;
	for (var h=0; h<3; h++){
   		 valeur = document.getElementById(champ_obligatoire[h]).value;
    	if( (valeur.length == 0) || (valeur == "") || (valeur == "NULL") ){
        champ_plein = false;
    	}
	}
 
	if (champ_plein){
		document.getElementById('Valide').disabled = false;
 	}
	else{
		document.getElementById('Valide').disabled = true;
	}
}