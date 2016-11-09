<?php
	include('glob.php');

	echo '<html>';
	echo '<h2>'.$_GET['animeName'].'</h2>';

	$bddAnimes = new PDO('mysql:host=localhost;bdname=series;charset=utf8', 'root', ' ');

	$reponse = $bddAnimes->query('SELECT * FROM series WHERE serieName='.$_GET['animeName']);

	echo $reponse['resume'];

	for ($i=1; $i < $reponse['nbEpisode']+1; $i++)
	{ 
		echo "<a href=SCRIPT_PAGE.php?nom=".$_GET['animeName']."&ep=".$i.'> episode '.$i.'</a><td>';
	}

	$reponse->CloseCursor();
	echo '</html>';
?>