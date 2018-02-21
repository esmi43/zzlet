<!DOCTYPE html>
<html>
    <!--  -->

    <head>
        <title>ZZedlet</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="stylesheet.css">
        
        <!-- graphic cart -->
		
		<!-- MODIFIER L'URL -->

        <style>
            
            
        </style>

    </head>

    <body>
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

        <!-- Classes / Listes grace à requetes-->
		<div class="middle">
			<div class="liste">
			
				<?php 
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=zzlet;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
							die('Erreur : '.$e->getMessage());
					}

					$reponse = $bdd->query('SELECT Name FROM classes');
					
					if ($donnees = $reponse->fetch())
					{
						do{
							?>
							<div class="classes"> 
								<h2> <?php echo $donnees['Name']; ?> </h2> 
							</div>
						<?php
						}while($donnees = $reponse->fetch());
					}
					else
					{
						?>
							<div class="classes"> 
								<h2> Aucune classe n'a été trouvée </h2> 
							</div>
						<?php
					}

					$reponse->closeCursor();
				?>

			</div>
		</div>

        <footer>
            <p>Privacy terms: Later. &copy; Estelle MICHEL & Corentin PALISSON</p>
            <!-- Références -->
        </footer>

    </body>
    <script type="text/javascript" src="affichage.js"> </script>

</html>


<!--fr.html.net/tutorials/php/lesson19.php-->