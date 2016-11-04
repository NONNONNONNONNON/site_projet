<?php 
	include('glob.php');
?>
<DOCTYPE html>
<link rel="stylesheet" href="Contact_css.css">
<html>
		<div class = "main">
			<br>
			<p> Si vous rencontrez un problème vous êtes au bon endroit !! <p>
			<form method = "post" action = "requete.php">
				<br> <p> Veuillez nous indiquer la nature du problème </p> </br>
				<ul>
					<li> <label for = "autre"> <em> Lien mort </em> </label> <br> <br>
						<input type = "text" name = "lien_mort" id = "lien_mort" input placeholder ="Insérez ici le lien de la page du lien mort." size = "70"> </li> <br> <br>
					<li> <label for = "lien_mort"> <em> Autre </em> </label> <br> <br>
						<textarea placeholder = "Expliquez-nous votre problème." name = "autre" id = "autre" rows = "8" cols = "70"></textarea>
					</li> <br> <br>
					<li> <input type = "submit" name = "probleme" value = "Envoyer" > </li>
				</ul>
			</form>
		</div>
	</body>
</html>


