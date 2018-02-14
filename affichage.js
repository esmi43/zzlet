var couleurs = document.getElementsByClassName("color");
var fonds = document.getElementsByClassName("mustChangeColor");

var couleur = function() {
    var attribute = this.getAttribute("data-couleur");
    changecouleur(attribute);
	console.log("Hello");
}

var changecouleur = function(argument){
	console.log(argument);
	for (var i = 0; i < fonds.length; i++) {
		console.log(fonds[i]);
		fonds[i].style.backgroundColor = argument;
		
	}
}



for (var i = 0; i < couleurs.length; i++) {
	couleurs[i].addEventListener('click', couleur, false);
	
}