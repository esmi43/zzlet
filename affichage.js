var couleurs = document.getElementsByClassName("color");
var fonds = document.getElementsByClassName("mustChangeColor");
var choix = document.getElementsByClassName("choix");

var couleur = function() {
    var attribute = this.getAttribute("data-couleur");
    changecouleur(attribute);
	changelien(attribute);
	console.log("Hello");
}

var changecouleur = function(argument){
	console.log(argument);
	for (var i = 0; i < fonds.length; i++) {
		console.log(fonds[i]);
		fonds[i].style.backgroundColor = argument;
		
	}
}

/*Affichage pop up de connexion*/

function openmodal()
{
	document.getElementById("modal").style.top = "150px"; /*.style.display='block'*/
}

function CloseModal()
{
	document.getElementById("modal").style.top = "-300px";
}

var changelien= function(argument){
	for (var i = 0; i < choix.length; i++)
	{
		choix[i].href += "&color=" + argument;
	}
}

for (var i = 0; i < couleurs.length; i++) {
	couleurs[i].addEventListener('click', couleur, false);
	
}
