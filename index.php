<!DOCTYPE html>
<html>
    <!--  -->

    <?php include("head.php"); ?>

    <?php include("header.php"); ?>

        <!-- Classes / Listes grace à requetes-->
		<div class="middle">
			<h2> Les classes </h2>
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

					$reponse = $bdd->query('SELECT Name,NOC FROM classes');
					
					if ($donnees = $reponse->fetch())
					{
						do{
							?>
							<div class="classes"> 
								<a class="choix" href="listes.php?NOC=<?php echo $donnees['NOC'];?>">
									<h3> <?php echo $donnees['Name']; ?> </h3>
								</a>
							</div>
						<?php
						}while($donnees = $reponse->fetch());
					}
					else
					{
						?>
							<div class="classes"> 
								<h3> Aucune classe n'a été trouvée </h3> 
							</div>
						<?php
					}

					$reponse->closeCursor();
				?>

			</div>
		</div>

    <?php include("footer.php"); ?>
    <script type="text/javascript" src="affichage.js"> </script>

</html>


<!--fr.html.net/tutorials/php/lesson19.php-->