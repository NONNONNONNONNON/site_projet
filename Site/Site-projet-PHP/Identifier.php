<?php
	include('glob.php');
?>
<DOCTYPE html>
<link rel="stylesheet" href="Identifier_css.css">
<html>

		<div class = "main">
			<br>
			<form method = "post" action = "identifiant.php">
				<p>
					<label for = "pseudo" size = "30"> Pseudo : </label>
						<input type = "text" name = "pseudo" size = "20" > <br> <br>
					<label for "password"> Votre mot de passe : </label>
						<input type= "password" size = "25" name = "password" > <br> <br>
					<input type = "submit" value = "SE CONNECTER" > <br> <br>
				<h5> Toujours pas inscrit(e) ? <a href = "Inscription.php"> Inscrivez-vous ! </a> </h5>
				</p>
			</form>
		</div>
	</body>
</html>
