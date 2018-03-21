<!DOCTYPE html>
<html>


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
		
		<?php 
		if ($_POST['mail'] == "Admin")
		{
			header('Location: Admin.php');
			exit();
		}
		else
		{
			echo $_POST['mail'];
		}
		?>
	</body>

</html>


