<?php
include('glob.php');
?>
<DOCTYPE html>
<link rel="stylesheet" href="Accueil_css.css">
<html>
		<div class = "main">
			<div class = "Nouveaux_episodes">
			<section>
				<br> <em> Liste des nouveaux épisodes. </em>
				<ul>
				<?php
					$bdd = new PDO('mysql:host=localhost;dbname=animes;charset=utf8', 'root', '');
					$response = $bdd->query('SELECT * FROM animes ORDER BY dateID');
					
					$form = $reponse->fetch(); 
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$response['animeName'].'&ep='.$response['episode'].'>'.$response['animeName'].' !</a> </li>';
					$form = $reponse->fetch();
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$response['animeName'].'&ep='.$response['episode'].'>'.$response['animeName'].' !</a> </li>';
					$form = $reponse->fetch(); 
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$response['animeName'].'&ep='.$response['episode'].'>'.$response['animeName'].' !</a> </li>';
					$form = $reponse->fetch(); 
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$response['animeName'].'&ep='.$response['episode'].'>'.$response['animeName'].' !</a> </li>';
					$form = $reponse->fetch();
					echo '<a href=SCRIPT_PAGE.php?nom='.$response['animeName'].'&ep='.$response['episode'].'>'.$response['animeName'].' !</a> </li>';
					$response->CloseCursor();
				?>
				</ul>
			</section>
			</div>
			<div class = "News">
			<section>
				<br> <em> News </em>
				<ul>
					<li> Article 1 </li>
					<li> Article 2 </li>
				</ul>
			</section>
			</div>
			<div class = "Animes_suggeres">
			<section>
				<em> Animé suggéré </em> <br> <br>
				<a href = ""> <img src = "Assassination_classroom_img.jpg"> </a> </li>
			</section>
			</div>
			<div class = "Top_des_vues">
			<section>
				<br> <em> Top des vues </em>
				
				<ul type:"1" start = 1>
				<?php
					$bdd = new PDO('mysql:host=localhost;dbname=series;charset=utf8', 'root', '');
					$response = $bdd->query('SELECT * FROM series ORDER BY vues');
					
					$form = $reponse->fetch(); 
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$form["animeName"].'&ep=1> Animé le plus populaire !</a> </li>';
					$form = $reponse->fetch();
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$form['animeName'].'&ep=1> 2nd Animé le plus populaire !</a> </li>';
					$form = $reponse->fetch(); 
					echo '<li><a href=SCRIPT_PAGE.php?nom='.$form['serieName'].'&ep=1> 3eme Animé le plus populaire !</a> </li>';
					$reponse->CloseCursor();
				?>
				</ul>
			</section>
			</div>
		</div>
	</body>
	<footer>
		<div class = "Statistiques">
		<section>
			<br> <em> Statistiques : </em>
			<ul>
				<li> Animes : nombre d'animés disponibles </li>
				<li> Films : nombre de films disponibles </li>
			</ul>
		</section>
		</div>
		<div class = "Partenaires">
		<selection>
			<br> <em> Liste des partenaires </em>
			<ul>
				<li> <a href = ""> Fansub 1 </a> </li>
				<li> <a href = ""> Fansub 2 </a> </li>
				<li> <a href = ""> Fansub 3 </a> </li>
			</ul>
		</section>
		</div>
	</footer>
</html>
