
   


    <head>
        <title>ZZedlet</title>
        <meta charset="UTF-8">
  
        
        <!-- graphic cart -->
		
		<!-- MODIFIER L'URL -->

        <style>
            
            
        </style>

    </head>

        <header class="mustChangeColor">
            <!-- TITRE -->
             <h1> ZZedLet!</h1>
            <!-- LOGIN -->
			<div id="chosecolor">
				<div class="color" id="Bleu" title="Change la couleur du site" data-couleur="#005DA3"></div>
				<div class="color" id="Rose" title="Change la couleur du site" data-couleur="#FF456A"></div>
			</div>
			
            <div id="lore"><a>
				
				<button id = "button-modal" onclick = "openmodal()" > Login </button>
				</a>
            <a> Register</a></div>
			
			 <div id = "modal">
	
				<form id="formulaire" method="post" action="formulaire.php">
					 
				<h1> Connexion </h1> 
			         
				<h2> adresse mail : </h2>
				</br>
				<input type="text" name="mail"/>
				</br>
				</br>
				<h2> mot de passe : </h2>
				</br>
				<input type="password" name="mdp"/>
				</br>
				</br>
				<p>
				<input type="submit" value="valider" /> 
				</p>
				</form>
				<button id="close" onclick="CloseModal()"> X </button>
			</div>  
			
        </header>

	
<script type="text/javascript" src="affichage.js"> </script> 

