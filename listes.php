<!DOCTYPE html>
<html>
    <!--  -->

    <?php include("head.php"); ?>
	
		

    <?php include("header.php"); ?>

        <!-- Classes / Listes grace à requetes-->
		<div class="middle">
			<h2> Les listes </h2>
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

					$reponse = $bdd->query('SELECT Name FROM listes WHERE NOC='.$_GET['NOC']);
					
					if ($donnees = $reponse->fetch())
					{
						do{
							?>
							<div class="classes"> 
								<h3> <?php echo $donnees['Name']; ?> </h3> 
							</div>
						<?php
						}while($donnees = $reponse->fetch());
					}
					else
					{
						?>
							<div class="classes"> 
								<h3> Aucune liste n'a été trouvée </h3> 
							</div>
						<?php
					}

					$reponse->closeCursor();
				?>

			</div>
		</div>

    <?php include("footer.php"); ?>
	
	
    <script type="text/javascript" src="affichage.js"></script>
	<script type="text/javascript">
	<?php 
		if (isset($_GET['color'])){
			$color = $_GET['color'];
		}
	?>
	var arg='<?php echo $color;?>';
	console.log('<?php echo $_GET['color'];?>');
	changecouleur(arg);
	changelien(arg);
	</script>
	

</html>